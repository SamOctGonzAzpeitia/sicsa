<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Clients;

class ClientsController extends Controller
{
    //

    public function index(Request $request)
    {   
        $filtro = $request->get('filtro');
        
        if($filtro != null){
            $clients = Clients::where('name', 'like', "%$filtro%")
            ->orWhere('email', 'like', "%$filtro%")
            ->orWhere('rfc', 'like', "%$filtro%")
            ->paginate(10);
            return view('clients.index', compact('clients'));
        }else{
            $clients = Clients::paginate(10);
            return view('clients.index', compact('clients'));
        }

       
    }

    public function create()
    {
        return view('clients.create');
    }

    private function getValidador(Request $request){
        //validacion de datos
        $data = $request->except('_token');
        $rules = [
            'name' => 'required|max:255',
            'rfc' => 'required|max:15',
            'phone' => 'required|max:10',
            'address' => 'required|max:255',
            'email' => 'required|email|unique:clients,email',
        ];
        $messages = [
            'name.required' => 'El nombre es requerido',
            'rfc.required' => 'El RFC es requerido',
            'phone.required' => 'El telefono es requerido',
            'address.required' => 'La direccion es requerida',
            'email.required' => 'El correo es requerido',
            'email.email' => 'El correo no es valido',
            'email.unique' => 'El correo ya esta registrado',
        ];
        $validator = Validator::make($data, $rules, $messages);
        return $validator;
    }

    private function updateValidador(Request $request){
        //validacion de datos
        $data = $request->except('_token');
        $rules = [
            'name' => 'required|max:255',
            'rfc' => 'required|max:15',
            'phone' => 'required|max:10',
            'address' => 'required|max:255',
            'email' => 'required|email',
        ];
        $messages = [
            'name.required' => 'El nombre es requerido',
            'rfc.required' => 'El RFC es requerido',
            'phone.required' => 'El telefono es requerido',
            'address.required' => 'La direccion es requerida',
            'email.required' => 'El correo es requerido',
            'email.email' => 'El correo no es valido',
        ];
        $validator = Validator::make($data, $rules, $messages);
        return $validator;
    }

    public function store(Request $request)
    {
        //validacion de datos
        $validator = $this->getValidador($request);
        if($validator->fails()){
            
            //redirect con varible messages
            
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            //guardar los datos
            $client = new Clients();
            $client->name = $request->get('name');
            $client->rfc = $request->get('rfc');
            $client->phone = $request->get('phone');
            $client->address = $request->get('address');
            $client->email = $request->get('email');
            $client->save();
            return redirect()->route('clients')
            ->with('success', 'Cliente creado correctamente');
        }        
    }

    public function show($id)
    {
        $client = Clients::findOrFail($id);
        return view('clients.details', ['read'=>true, 'prevAnswers' => $client]);
    }

    public function edit($id)
    {
        $client = Clients::findOrFail($id);
        return view('clients.edit', ['prevAnswers' => $client]);
    }

    public function update(Request $request, $id)
    {
        //validacion de datos
        $validator = $this->updateValidador($request);
        if($validator->fails()){
            
            //redirect con varible messages
            
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            //guardar los datos
            $client = Clients::findOrFail($id);
            $client->name = $request->get('name');
            $client->rfc = $request->get('rfc');
            $client->phone = $request->get('phone');
            $client->address = $request->get('address');
            $client->email = $request->get('email');
            $client->save();
            return redirect()->route('clients')
            ->with('success', 'Cliente actualizado correctamente');
        }
    }

    public function destroy($id)
    {   
        $client = Clients::findOrFail($id);
        $client->delete();
        return redirect()->route('clients')
        ->with('success', 'Cliente eliminado correctamente');
        
    }
}

