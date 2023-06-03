<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;



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
            'password' => Hash::make('12345678'),

        ]);

        // \App\Models\Article::factory()->count(30)->create(); 
        User::factory()->count(30)->create();

    }

}
