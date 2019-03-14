<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilesyalarmasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'perfilesyalarmas';

    /**
     * Run the migrations.
     * @table perfilesyalarmas
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre_perfil', 45);
            $table->integer('idUsuario');

/*           $table->index(["idUsuario"], 'idUsuario');


            $table->foreign('idUsuario', 'idUsuario')
                ->references('id')->on('usuarios')
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
