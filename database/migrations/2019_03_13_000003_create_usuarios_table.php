<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'usuarios';

    /**
     * Run the migrations.
     * @table usuarios
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('usuario', 45);
            $table->integer('idRol');
            $table->string('nombre', 45);
            $table->string('password', 45);
            $table->string('correo', 45);
            $table->timestamp('create_time')->nullable();
            $table->timestamp('update_time')->nullable();

          //  $table->index(["idRol"], 'id');

           // $table->index(["idRol"], 'roles');

/*
            $table->foreign('idRol', 'id')
                ->references('id')->on('roles')
                ->onDelete('cascade')
                ->onUpdate('cascade');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
