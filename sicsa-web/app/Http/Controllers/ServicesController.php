<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Utils\ErrorParser;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\Status;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request  $request)
    {
        
        //filtrp para servicios
        $filtro = $request->input('filtro');
        if($filtro == null){
            $services = Services::paginate(10);
            //retornar la vista con los servicios
            return view('services.index', ['services' => $services]);
        }else{
            $services = Services::where('name', 'like', '%'.$filtro.'%')
            ->orWhere('description', 'like', '%'.$filtro.'%')
            ->orWhere('client', 'like', '%'.$filtro.'%')
            ->paginate(10);
            //retornar la vista con los servicios
            return view('services.index', ['services' => $services]);
        }
        

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
        //dd($statuses);
        //retornar la vista con los estados
        return view('services.create', ['statuses' => $statuses]);
        

    }

    private function getvalidador(Request $request){
        $data = $request->except('_token'); //obtener los datos del formulario
        $validator = Validator::make($data, [
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'client' => 'required|max:255',
            'status_id' => 'required|numeric',
            'costo' => 'required|numeric',
            'fecha_inicio' => 'required|max:255',
        ]);

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
        
        $validator = $this->getvalidador($request);
        
        if($validator->fails()){
            return redirect('services/create')
            ->withErrors($validator)
            ->withInput();
        }else{
            //Guardar los datos
            $service = new Services();
            $service->name = $request->input('name');
            $service->description = $request->input('description');
            $service->client = $request->input('client');
            $service->status_id = $request->input('status_id');
            $service->notas = $request->input('notas');
            $service->costo = $request->input('costo');
            $service->fecha_inicio = $request->input('fecha_inicio');
            $service->fecha_fin = $request->input('fecha_fin');
            $service->save();
            //redireccionar a la vista de index
            return redirect()->route('services');
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
                
        return view('services.details', ['read'=> true, 'prevAnswers' => $service, 'statuses' => $statuses, 'valStatus' => $valStatus]);

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

        return view('services.edit', ['prevAnswers' => $service, 'statuses' => $statuses, 'valStatus' => $valStatus]);

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
    
        $validator = $this->getvalidador($request);
        //dd($validator);
        if($validator->fails()){
            return redirect('services/edit/'.$id)
            ->withErrors($validator)
            ->withInput();
        }else{
            //Guardar los datos
            $service = Services::find($id);
            $service->name = $request->input('name');
            $service->description = $request->input('description');
            $service->client = $request->input('client');
            $service->status_id = $request->input('status_id');
            $service->notas = $request->input('notas');
            $service->costo = $request->input('costo');
            $service->fecha_inicio = $request->input('fecha_inicio');
            $service->fecha_fin = $request->input('fecha_fin');
            $service->save();
            //redireccionar a la vista de index
            return redirect()->route('services');
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
        return redirect()->route('services');
        

    }
}
