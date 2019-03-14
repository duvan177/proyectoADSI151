<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtributosxtipoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'atributosxtipo';

    /**
     * Run the migrations.
     * @table atributosxtipo
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('idTipo_comp_');
            $table->string('nombre_atri', 45);

           // $table->index(["idTipo_comp_"], 'idTipo');

/*
            $table->foreign('idTipo_comp_', 'idTipo')
                ->references('id')->on('tipocomponente')
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
