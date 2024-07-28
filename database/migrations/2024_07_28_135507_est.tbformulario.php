<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbformulario', function(Blueprint $table){
            $table->id('id');
            $table->bigInteger('moduloId');
            $table->integer('acao');
            $table->string('titulo');
            $table->string('controller');
            $table->string('include');
            $table->foreign('moduloId')->references('id')->on('tbmodulo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
