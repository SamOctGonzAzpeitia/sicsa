<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Utils\ErrorParser;
use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //obtener todos los usuarios
        $users = User::all();
        //retornar la vista con los usuarios
        return view('users.index', ['users' => $users]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //vista para crear un usuario
        return view('users.create', ['roles' => Role::all()]);
    }


    private function getValidador(Request $request){
        $data = $request->except('_token'); //obtener los datos del formulario
        $validator = Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'role_id' => 'required|numeric',
            'phone' => 'required|max:10',
            'password' => 'required|max:255',
        ]);

        return $validator;
    }

    private function updateValidador(Request $request){
        $data = $request->except('_token'); //obtener los datos del formulario
        $validator = Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'role_id' => 'required|numeric',
            'phone' => 'required|max:10',
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
        //añadir un nuevo usuario
        //validar los datos del formulario
        $validator = $this->getValidador($request);
        if ($validator->fails()) {
            return redirect()->route('users.create')
                ->withErrors($validator)
                ->withInput();
        }else{
            
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email; 
            $user->role_id = $request->role_id;
            $user->phone = $request->phone;
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
        
        //retornar la vista con el usuario
        return view('users.details', ['read' =>true, 'prevAnswers' => $user, 'roles' => $roles, 'valRole' => $valRole]);
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
        return view('users.edit', ['edit' =>true, 'prevAnswers' => $user, 'roles' => $roles, 'valRole' => $valRole]);
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
        //validar los datos del formulario
        $validator = $this->updateValidador($request);
        if ($validator->fails()) {
            return redirect()->route('users.edit', ['id' => $id])
                ->withErrors($validator)
                ->withInput();
        }else{
            $user->name = $request->name;
            $user->email = $request->email; 
            $user->role_id = $request->role_id;
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
