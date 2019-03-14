<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorarioxperiodoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'horarioxperiodo';

    /**
     * Run the migrations.
     * @table horarioxperiodo
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->date('FechaInicio');
            $table->date('FechaFin');
            $table->string('diaSemana', 45);

     /*       $table->index(["id"], 'idHorario');


            $table->foreign('id', 'idHorario')
                ->references('id')->on('horarios')
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
