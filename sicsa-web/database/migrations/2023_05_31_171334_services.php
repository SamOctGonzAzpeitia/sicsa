<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Services extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('services',function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('client');
            $table->string('status');
            $table->string('notas');
            $table->string('fecha_inicio')->nullable();
            $table->string('fecha_fin')->nullable();
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
