<?php namespace ViniciusBacchieri\Agenda\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateViniciusbacchieriAgenda extends Migration
{
    public function up()
    {
        Schema::create('viniciusbacchieri_agenda_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->date('date');
            $table->time('time');
            $table->string('local', 255);
            $table->string('city', 255);
            $table->string('uf', 50);
            $table->string('url', 255);
            $table->string('show_name');
            $table->boolean('status');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('viniciusbacchieri_agenda_');
    }
}
