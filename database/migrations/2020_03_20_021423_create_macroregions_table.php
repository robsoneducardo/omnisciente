<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMacroregionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('macroregions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('code');
            $table->string('name');
            $table->timestamps();
            $table->unique=['code', 'name'];
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('macroregions');
    }
}
