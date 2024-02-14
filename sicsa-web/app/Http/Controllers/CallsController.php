<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\Status;
use App\Models\Clients;

class CallsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request  $request)
    {
        //
        $user = auth()->user()->role_id;
        $clients = Clients::all();
        
     
        //filtro para llamadas
        $filtro = $request->input('filtro');
        if($filtro == null){
            $services = Services::where('order_service', 0)->paginate(10);
            //retornar la vista con los servicios
            return view('calls.index', ['services' => $services, 'clients' => $clients]);
        }else{
            $services = Services::where('order_service', 0)
            ->orWhere('name', 'like', '%'.$filtro.'%')
            ->orWhere('description', 'like', '%'.$filtro.'%')
            ->paginate(10);
            //retornar la vista con los servicios
            return view('calls.index', ['services' => $services, 'clients' => $clients]);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $clients = Clients::all();
        return view('calls.create', ['clients' => $clients]);
    }

    private function getValidador(Request $request){
        
        $data = $request->except('_token');

        $rules = [
            'name' => 'required'|'max:255'|'min:5',
            'description' => 'required'|'max:255'|'min:5',
            'fecha_inicio' => 'required'|'date',
            'fecha_final' => 'required',
            
            
        ];
        
        $messages=[
            'name.required' => 'El nombre es requerido',
            'name.max' => 'El nombre no puede ser mayor a 255 caracteres',
            'name.min' => 'El nombre no puede ser menor a 5 caracteres',
            'description.required' => 'La descripción es requerida',
            'description.max' => 'La descripción no puede ser mayor a 255 caracteres',
            'description.min' => 'La descripción no puede ser menor a 5 caracteres',
            'fecha_inicio.required' => 'La fecha de inicio es requerida',
            'fecha_inicio.date' => 'La fecha de inicio no es válida',
            'fecha_final.required' => 'La fecha de fin es requerida',
            'fecha_final.date' => 'La fecha de fin no es válida',
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
        //
        //validar los datos
        $validator = $this->getValidador($request);

        if($validator->fails()){
            return redirect('calls/create')->withErrors($validator)->withInput();
        }else{
            //guardar los datos
            $service = new Services();
            $service->name = $request->input('name');
            $service->description = $request->input('description');
            $service->fecha_inicio = $request->input('fecha_inicio');
            $service->fecha_final = $request->input('fecha_final');
            $service->notas = $request->input('notas');
            $service->client_id = $request->input('client_id');
            $service->order_service = 0;
            $service->save();

            return redirect()->route('calls')->with('mensaje', 'Llamada creada con éxito');
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
        //
        $service = Services::find($id);
        $clients = Clients::all();
                
        return view('calls.details', ['read'=> true, 'prevAnswers' => $service, 'clients' => $clients]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $service = Services::find($id);
        $clients = Clients::all();
                
        return view('calls.edit', ['prevAnswers' => $service, 'clients' => $clients]);

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
        $validator = $this->getValidador($request);

        if($validator->fails()){
            return redirect('calls/edit')->withErrors($validator)->withInput();
        }else{
            //guardar los datos
            $service = new Services();
            $service->name = $request->input('name');
            $service->description = $request->input('description');
            $service->fecha_inicio = $request->input('fecha_inicio');
            $service->fecha_final = $request->input('fecha_final');
            $service->notas = $request->input('notas');
            $service->client_id = $request->input('client_id');
            $service->order_service = 0;
            $service->save();

            return redirect()->route('calls')->with('mensaje', 'Llamada actualizada con éxito');
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
        //
        $service = Services::find($id);
        $service->delete();
        return redirect()->route('services')
                ->with('status', 'Llamada eliminada exitosamente');
        

    }
}
