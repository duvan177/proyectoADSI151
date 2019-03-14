<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'horarios';

    /**
     * Run the migrations.
     * @table horarios
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->time('HoraInicio');
            $table->time('horaFinal');
            $table->integer('idPerfilAlarma');

          //  $table->index(["idPerfilAlarma"], 'idPerfilAlarma');


           /* $table->foreign('idPerfilAlarma', 'idPerfilAlarma')
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
