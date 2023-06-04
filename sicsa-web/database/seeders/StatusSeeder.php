<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('statuses')->insert([
            'name' => 'Activo',
        ]);
        DB::table('statuses')->insert([
            'name' => 'Finalizado',
        ]);
    }
}
