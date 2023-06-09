<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

       Gate::define('admin', function($user){
            return $user->role_id == 1;
        });

        Gate::define('user', function($user){
            return $user->role_id == 2;
        });

        Gate::define('client', function($user){
            return $user->role_id == 3;
        });

        Gate::define('superadmin', function($user){
            return $user->role_id == 4;
        });

        //Usuarios
        Gate::define('verUsuarios', function($user){
            $role = $user->role_id;
            $allow;
            if($role == 4){
                $allow = true;
            }else{
                $allow = false;
            }
            return $allow;
        });

        Gate::define('registrarUsuario', function($user){
            $role = $user->role_id;
            $allow;
            if($role == 4){
                $allow = true;
            }else{
                $allow = false;
            }
            return $allow;
        });
        Gate::define('editarUsuario', function($user){
            $role = $user->role_id;
            $allow;
            if($role == 4){
                $allow = true;
            }else{
                $allow = false;
            }
            return $allow;
        });
        Gate::define('eliminarUsuario', function($user){
            $role = $user->role_id;
            $allow;
            if($role == 4){
                $allow = true;
            }else{
                $allow = false;
            }
            return $allow;
        });

        //Clientes
        Gate::define('verClientes', function($user){
            $role = $user->role_id;
            $allow;
            if($role == 1 || $role == 4){
                $allow = true;
            }else{
                $allow = false;
            }
            return $allow;
        });

        Gate::define('registrarCliente', function($user){
            $role = $user->role_id;
            $allow;
            if($role == 1 || $role == 4){
                $allow = true;
            }else{
                $allow = false;
            }
            return $allow;
        });
        Gate::define('editarCliente', function($user){
            $role = $user->role_id;
            $allow;
            if($role == 4){
                $allow = true;
            }else{
                $allow = false;
            }
            return $allow;
        });
        Gate::define('eliminarCliente', function($user){
            $role = $user->role_id;
            $allow;
            if($role == 4){
                $allow = true;
            }else{
                $allow = false;
            }
            return $allow;
        });
        //Servicios
        Gate::define('verServicios', function($user){
            $role = $user->role_id;
            $allow;
            if($role == 1 || $role == 4 || $role == 3){
                $allow = true;
            }else{
                $allow = false;
            }
            return $allow;
        });
        Gate::define('registrarServicio', function($user){
            $role = $user->role_id;
            $allow;
            if($role == 1 || $role == 4 || $role == 3){
                $allow = true;
            }else{
                $allow = false;
            }
            return $allow;
        });
        
        Gate::define('registrarCosto', function($user){
            $role = $user->role_id;
            $allow;
            if($role == 4){
                $allow = true;
            }else{
                $allow = false;
            }
            return $allow;
        });

        Gate::define('registarDetalles', function($user){
            $role = $user->role_id;
            $allow;
            if($role == 1 || $role == 4){
                $allow = true;
            }else{
                $allow = false;
            }
            return $allow;
        });

        Gate::define('editarServicio', function($user){
            $role = $user->role_id;
            $allow;
            if($role == 1 || $role == 4 || $role == 3){
                $allow = true;
            }else{
                $allow = false;
            }
            return $allow;
        });
        Gate::define('eliminarServicio', function($user){
            $role = $user->role_id;
            $allow;
            if($role == 4){
                $allow = true;
            }else{
                $allow = false;
            }
            return $allow;
        });

        Gate::define('filtroClientes', function($user){
            $role = $user->role_id;
            $allow;
            if($role == 1 || $role == 4){
                $allow = true;
            }else{
                $allow = false;
            }
            return $allow;
        });

    }
}
