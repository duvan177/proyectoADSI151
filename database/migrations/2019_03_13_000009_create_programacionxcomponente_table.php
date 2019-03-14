<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramacionxcomponenteTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'programacionxcomponente';

    /**
     * Run the migrations.
     * @table programacionxcomponente
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('idComponente');
            $table->integer('idPerfilAlarma_');
            $table->integer('idAtributoXtipo_');
            $table->string('EstadoProgramado', 45);

           // $table->index(["idComponente", "idPerfilAlarma_", "idAtributoXtipo_"], 'idComponente');

          //$table->index(["idPerfilAlarma_"], 'idPerfilAlarma');

            //$table->index(["idAtributoXtipo_"], 'atributosXtipo');

/*
            $table->foreign('idComponente', 'idComponente')
                ->references('id')->on('componentes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('idAtributoXtipo_', 'atributosXtipo')
                ->references('id')->on('atributosxtipo')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('idPerfilAlarma_', 'idPerfilAlarma')
                ->references('id')->on('perfilesyalarmas')
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
