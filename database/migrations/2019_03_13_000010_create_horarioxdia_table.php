<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorarioxdiaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'horarioxdia';

    /**
     * Run the migrations.
     * @table horarioxdia
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->date('Fecha');

           // $table->index(["id"], 'idHorario');


         /*   $table->foreign('id', 'idHorario')
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
