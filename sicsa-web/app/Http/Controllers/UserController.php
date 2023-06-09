<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Utils\ErrorParser;
use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use App\Models\Clients;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request  $request)
    {
        //obtener valor del request
        
        $filtro = $request->input('filtro');

        if($filtro == null){
            $users = User::paginate(10);
        
            //retornar la vista con los usuarios
            return view('users.index', ['users' => $users]);
        }else{
            $users = User::where('name', 'like', '%'.$filtro.'%')
            ->orWhere('email', 'like', '%'.$filtro.'%')
            ->paginate(10);
        
            //retornar la vista con los usuarios
            return view('users.index', ['users' => $users]);
        }   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //obtener clientes
        $clients = Clients::all();
        //obtener roles
        $roles = Role::all();
        //retornar vista con clientes y roles
        return view('users.create', ['clients' => $clients, 'roles' => $roles]);
       
    }

    private function validadorClient(Request $request){

        //reglas de validacion
        $rules = [
            'name' => 'required|max:255',
            'phone' => 'required|max:10',
            'address' => 'required|max:255',
            'role_id' => 'required|numeric',
            'client_id' => 'required|numeric',
            'email' => 'required|email|unique:clients,email',
        ];
        //mensajes de validacion
        $messages = [
            'name.required' => 'El nombre es requerido',
            'phone.required' => 'El telefono es requerido',
            'address.required' => 'La direccion es requerida',
            'email.required' => 'El correo es requerido',
            'email.email' => 'El correo no es valido',
            'email.unique' => 'El correo ya esta registrado',
            'role_id.required' => 'El rol es requerido',
            'client_id.required' => 'El cliente es requerido',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        return $validator;

    }

    private function updateClient(Request $request){
        //reglas de validacion
        $rules = [
            'name' => 'required|max:255',
            'phone' => 'required|max:10',
            'address' => 'required|max:255',
            'role_id' => 'required|numeric',
            'client_id' => 'required|numeric',
            'email' => 'required|email',
        ];
        //mensajes de validacion
        $messages = [
            'name.required' => 'El nombre es requerido',
            'phone.required' => 'El telefono es requerido',
            'address.required' => 'La direccion es requerida',
            'email.required' => 'El correo es requerido',
            'email.email' => 'El correo no es valido',
            'role_id.required' => 'El rol es requerido',
            'client_id.required' => 'El cliente es requerido',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        return $validator;
    }


    private function getValidador(Request $request){
        $data = $request->except('_token'); //obtener los datos del formulario

        //reglas de validacion
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'role_id' => 'required|numeric',
            'phone' => 'required|max:10',
            'password' => 'required|max:255',
        ];

        //mensajes de validacion
        $messages = [
            'name.required' => 'El nombre es requerido',
            'email.required' => 'El correo es requerido',
            'email.email' => 'El correo no es valido',
            'email.unique' => 'El correo ya esta registrado',
            'role_id.required' => 'El rol es requerido',
            'phone.required' => 'El telefono es requerido',
            'password.required' => 'La contraseña es requerida',
        ];
        $validator = Validator::make($data, $rules, $messages);
        return $validator;
    }

    private function updateValidador(Request $request){
        $data = $request->except('_token'); //obtener los datos del formulario
        
        //reglas de validacion
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'role_id' => 'required|numeric',
            'phone' => 'required|max:10',
        ];
        //mensajes de validacion
        $messages = [
            'name.required' => 'El nombre es requerido',
            'email.required' => 'El correo es requerido',
            'email.email' => 'El correo no es valido',
            'role_id.required' => 'El rol es requerido',
            'phone.required' => 'El telefono es requerido',
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
        //añadir un nuevo usuario
        //validar los datos del formulario
        $valRole=$request->role_id;
        
        if($valRole == 3){
            $validator = $this->validadorClient($request);
        }else{
            $validator = $this->getValidador($request);
        }
        
        if ($validator->fails()) {
            return redirect()->route('users.create')
                ->withErrors($validator)
                ->withInput();
        }else{
            
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email; 
            $user->role_id = $request->role_id;
            if($valRole == 3){
                $user->client_id = $request->client_id;
            }
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->route('users')
                ->with('status', 'Usuario creado exitosamente');
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
        //obtener un usuario por id
        $user = User::find($id);
        $valRole = Role::find($user->role_id);
        //$user->role = $role;
        $roles = Role::all();
        $clients = Clients::all();
        $valClient = $user->client_id;
        // obtener el cliente del usuario
        $client = Clients::find($valClient);
        
        

        
        //retornar la vista con el usuario
        return view('users.details', ['read' =>true, 'prevAnswers' => $user, 'roles' => $roles, 'valRole' => $valRole, 'clients' => $clients, 'valClient' => $client]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //pbetener un usuario por id
        $user = User::find($id);
        $valRole = Role::find($user->role_id);
        //$user->role = $role;
        $roles = Role::all();
        //retornar la vista con el usuario
        $clients = Clients::all();
        $valClient = $user->client_id;
        // obtener el cliente del usuario
        $client = Clients::find($valClient);

        return view('users.edit', ['edit' =>true, 'prevAnswers' => $user, 'roles' => $roles, 'valRole' => $valRole, 'clients' => $clients, 'valClient' => $client]);
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
        //obtener un usuario por id
        $user = User::find($id);

        //obtener el rol del usuario
        $role = Role::find($user->role_id);
        $valRole = $role->id;

        if($valRole == 3){
            $validator = $this->updateClient($request);
        }else{
            $validator = $this->updateValidador($request);
        }

        //validar los datos del formulario
        
        if ($validator->fails()) {
            return redirect()->route('users.edit', ['id' => $id])
                ->withErrors($validator)
                ->withInput();
        }else{
            $user->name = $request->name;
            $user->email = $request->email; 
            $user->role_id = $request->role_id;
            if($valRole == 3){
                $user->client_id = $request->client_id;
            }
            $user->phone = $request->phone;
            $user->save();
            return redirect()->route('users')
                ->with('status', 'Usuario actualizado exitosamente');
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
        //obtener un usuario por id
        $user = User::find($id);
        //eliminar el usuario
        $user->delete();
        return redirect()->route('users')
                ->with('status', 'Usuario eliminado exitosamente');
    }
}
