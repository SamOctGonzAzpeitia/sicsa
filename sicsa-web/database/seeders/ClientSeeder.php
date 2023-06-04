<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Clients;


class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB :: table ('clients') -> insert ([
            'id' => '1',
            'name' => 'Samy',
            'rfc' => 'SAM123456',
            'email' => 'prueba@gmail.com',
            'phone' => '12345678',
            'address' => 'Calle 1',
        ]);

        Clients::factory(10)->create();

    }
}
