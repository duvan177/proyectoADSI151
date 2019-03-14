<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadosxatributoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'estadosxatributo';

    /**
     * Run the migrations.
     * @table estadosxatributo
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('idAtributoXtipo');
            $table->string('Estado', 45);

           // $table->index(["idAtributoXtipo"], 'idAtributoXtipo');


           /* $table->foreign('idAtributoXtipo', 'idAtributoXtipo')
                ->references('id')->on('atributosxtipo')
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
