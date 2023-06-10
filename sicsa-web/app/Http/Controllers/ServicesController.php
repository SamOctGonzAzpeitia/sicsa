<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Utils\ErrorParser;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\Status;
use App\Models\Clients;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request  $request)
    {
        //obtener nombre del usuario
        $user = auth()->user()->role_id;
        $clients = Clients::all();
        $valClient = auth()->user()->client_id;

        
        if($user == 3){
            $services = Services::where('client_id', '=', $valClient)->paginate(10);
            //retornar la vista con los servicios
            return view('services.index', ['services' => $services, 'clients' => $clients]);
        }

        //filtro para servicios
        $filtro = $request->input('filtro');
        if($filtro == null){
            $services = Services::paginate(10);
            //retornar la vista con los servicios
            return view('services.index', ['services' => $services, 'clients' => $clients]);
        }else{
            $services = Services::where('name', 'like', '%'.$filtro.'%')
            ->orWhere('description', 'like', '%'.$filtro.'%')
            ->paginate(10);
            //retornar la vista con los servicios
            return view('services.index', ['services' => $services, 'clients' => $clients]);
        }
        

    }

    public function dateFilter(Request $request){
        $user = auth()->user()->role_id;
        $clients = Clients::all();
        $fecha_inicio = $request->input('fecha_inicio');
        $fecha_fin = $request->input('fecha_fin');
        $valClient = auth()->user()->client_id;
        
        if($user == 3){
            $services = Services::where('client_id', '=', $valClient)->whereBetween('fecha_inicio', [$fecha_inicio, $fecha_fin])->paginate(10);
            //retornar la vista con los servicios
            return view('services.index', ['services' => $services, 'clients' => $clients]);
        }else{
            $services = Services::whereBetween('fecha_inicio', [$fecha_inicio, $fecha_fin])->paginate(10);
            //retornar la vista con los servicios
            return view('services.index', ['services' => $services, 'clients' => $clients]);
        }

    }

    public function clientFilter(Request $request){
        $clients = Clients::all();
        $client_id = $request->input('client_id');
        $services = Services::where('client_id', '=', $client_id)->paginate(10);
        //retornar la vista con los servicios
        return view('services.index', ['services' => $services, 'clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //$request->user()->authorizeRoles(['admin']);
        //obtener todos los estados
        $statuses = Status::all();
        $clients = Clients::all();
        //dd($statuses);
        //retornar la vista con los estados
        return view('services.create', ['statuses' => $statuses, 'clients' => $clients]);
        

    }

    private function getvalidador(Request $request){
        $data = $request->except('_token'); //obtener los datos del formulario
        //reglas de validacion
        $rules = [
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'fecha_inicio' => 'required|date',
            'client_id' => 'required|numeric',
            'status_id' => 'required|numeric',

            
        ];
        $messages = [
            'name.required' => 'El nombre es requerido',
            'description.required' => 'La descripcion es requerida',
            'fecha_inicio.required' => 'La fecha de reporte es requerida',
            'client_id.required' => 'El cliente es requerido',
            'status_id.required' => 'El estado es requerido',
            
        ];

        $validator = Validator::make($data, $rules, $messages);
        return $validator;
    }

    private function clientValidador(Request $request){
        $data = $request->except('_token'); //obtener los datos del formulario
        //reglas de validacion
        $rules = [
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'fecha_inicio' => 'required|date',
        ];
        $messages = [
            'name.required' => 'El nombre es requerido',
            'description.required' => 'LA descripcion es requerido',
            'fecha_inicio.required' => 'El telefono es requerido',
            
        ];

        $validator = Validator::make($data, $rules, $messages);
        return $validator;
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $user = auth()->user()->role_id;
        if($user == 3){
            $validator = $this->clientValidador($request);
        }else{
            $validator = $this->getvalidador($request);
        }
        
        if($validator->fails()){
            return redirect('services/create')
            ->withErrors($validator)
            ->withInput();
        }else{
            //Guardar los datos
            $service = new Services();
            $service->name = $request->input('name');
            $service->description = $request->input('description');
            if($request->input('client_id') == null){
                $service->client_id = auth()->user()->client_id;
            }else{
                $service->client_id = $request->input('client_id');
            }
            if($request->input('status_id') == null){
                $service->status_id = 1;
            }else{
                    $service->status_id = $request->input('status_id');
            }            
            $service->notas = $request->input('notas');
            $service->costo = $request->input('costo');
            $service->fecha_inicio = $request->input('fecha_inicio');
            $service->fecha_fin = $request->input('fecha_fin');
            $service->save();
            //redireccionar a la vista de index
            return redirect()->route('services')
                ->with('status', 'Servicio creado exitosamente');
        }
    }    
    

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //obtener informacion del servicio
        $statuses=Status::all();
        $service_status = Services::find($id)->status_id;
        $service = Services::find($id);
        $valStatus=Status::find($service_status);
        $clients = Clients::all();
                
        return view('services.details', ['read'=> true, 'prevAnswers' => $service, 'statuses' => $statuses, 'valStatus' => $valStatus, 'clients' => $clients]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //obtener informacion del servicio
        $statuses=Status::all();
        $service_status = Services::find($id)->status_id;
        $service = Services::find($id);
        $valStatus=Status::find($service_status);
        $clients = Clients::all();

        return view('services.edit', ['prevAnswers' => $service, 'statuses' => $statuses, 'valStatus' => $valStatus, 'clients' => $clients]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user = auth()->user()->role_id;
        if($user == 3){
            $validator = $this->clientValidador($request);
        }else{
            $validator = $this->getvalidador($request);
        }   
        
        if($validator->fails()){
            return redirect('services/edit/'.$id)
            ->withErrors($validator)
            ->withInput();
        }else{
            //Guardar los datos
            $service = Services::find($id);
            $service->name = $request->input('name');
            $service->description = $request->input('description');
            $service->description = $request->input('description');
            if($request->input('client_id') == null){
                $service->client_id = auth()->user()->client_id;
            }else{
                $service->client_id = $request->input('client_id');
            }
            if($request->input('status_id') == null){
                $service->status_id = 1;
            }else{
                    $service->status_id = $request->input('status_id');
            }           
            $service->notas = $request->input('notas');
            $service->costo = $request->input('costo');
            $service->fecha_inicio = $request->input('fecha_inicio');
            $service->fecha_fin = $request->input('fecha_fin');
            $service->save();
            //redireccionar a la vista de index
            return redirect()->route('services')
                ->with('status', 'Servicio actualizado exitosamente');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //obtener informacion del servicio
        $service = Services::find($id);
        $service->delete();
        return redirect()->route('services')
                ->with('status', 'Servicio eliminado exitosamente');
        

    }
}
