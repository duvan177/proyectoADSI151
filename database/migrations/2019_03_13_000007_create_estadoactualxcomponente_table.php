<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadoactualxcomponenteTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'estadoactualxcomponente';

    /**
     * Run the migrations.
     * @table estadoactualxcomponente
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('idComponente_');
            $table->integer('idAtributoXtipo_a');
            $table->string('estadoActual', 45);

          //$table->index(["idComponente_", "idAtributoXtipo_a"], 'idComponente');

            //$table->index(["idAtributoXtipo_a"], 'idAtributoXtipo');


          /*  $table->foreign('idAtributoXtipo_a', 'idAtributoXtipo')
                ->references('id')->on('atributosxtipo')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('idComponente_', 'idComponente')
                ->references('id')->on('componentes')
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
