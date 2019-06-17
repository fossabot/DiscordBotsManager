<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Configuredpanel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
        //Setup a correct first-run configuration system
    {
        Schema::create('configured', function(Blueprint $table){
            $table->boolean('configuredPanel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
