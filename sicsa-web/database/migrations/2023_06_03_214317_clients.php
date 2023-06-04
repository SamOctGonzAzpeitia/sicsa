<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class Clients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        //creacion de tabla de clientes
        Schema::create('clients', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('rfc');
                $table->string('address');
                $table->string('phone');
                $table->string('email');
                $table->timestamps();
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
