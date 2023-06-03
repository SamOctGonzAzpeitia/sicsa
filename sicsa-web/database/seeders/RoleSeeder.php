<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
            DB :: table ('roles') -> insert ([
            'id' => '1',
            'name' => 'Administrador',
            'description' => 'Administrador del sistema',
            
        ]);
            DB :: table ('roles') -> insert ([
            'id' => '2',
            'name' => 'Usuario',
            'description' => 'Usuario del sistema',
            
        ]);
            DB :: table ('roles') -> insert ([
            'id' => '3',
            'name' => 'Cliente',
            'description' => 'Cliente del sistema',
            
        ]);
    }
}
