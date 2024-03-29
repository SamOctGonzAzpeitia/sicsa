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
            $table->longtext('description');
            $table->string('client_id');
            $table->string('status_id');
            $table->longtext('notas')->nullable();
            $table->string('costo')->nullable();
            $table->string('details')->nullable();
            $table->boolean('order_service')->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
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
