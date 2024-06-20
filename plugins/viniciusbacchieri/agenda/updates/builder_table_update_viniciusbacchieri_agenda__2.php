<?php namespace ViniciusBacchieri\Agenda\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateViniciusbacchieriAgenda2 extends Migration
{
    public function up()
    {
        Schema::table('viniciusbacchieri_agenda_', function($table)
        {
            $table->dropColumn('hour');
        });
    }
    
    public function down()
    {
        Schema::table('viniciusbacchieri_agenda_', function($table)
        {
            $table->time('hour');
        });
    }
}
