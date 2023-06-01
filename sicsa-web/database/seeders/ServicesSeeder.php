<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Service;
class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
            DB :: table ('services') -> insert ([
            'id' => '1',
            'name' => 'Servicio 1',
            'description' => 'Servicio 1',
            'client' => 'Cliente 1',
            'status' => 'Activo',
            'notas' => 'Notas 1',
            'fecha_inicio' => '2021-05-31',
            'fecha_fin' => '2021-06-30',
            
        ]);
            DB :: table ('services') -> insert ([
            'id' => '2',
            'name' => 'Servicio 2',
            'description' => 'Servicio 2',
            'client' => 'Cliente 2',
            'status' => 'Activo',
            'notas' => 'Notas 2',
            'fecha_inicio' => '2021-05-31',
            'fecha_fin' => '2021-06-30',
        ]);
    }
}
