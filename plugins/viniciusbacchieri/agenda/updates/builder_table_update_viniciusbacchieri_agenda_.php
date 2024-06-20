<?php namespace ViniciusBacchieri\Agenda\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateViniciusbacchieriAgenda extends Migration
{
    public function up()
    {
        Schema::table('viniciusbacchieri_agenda_', function($table)
        {
            $table->time('hour');
            $table->string('url')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('viniciusbacchieri_agenda_', function($table)
        {
            $table->dropColumn('hour');
            $table->string('url')->nullable(false)->change();
        });
    }
}
