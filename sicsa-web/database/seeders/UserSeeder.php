<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB :: table ('users') -> insert ([
            'id' => '1',
            'name' => 'Samy',
            'email' => 'samy@gmail.com',
            'role_id' => '1',
            'phone' => '12345678',
            'password' => bcrypt('12345678'),

        ]);
    }

}
