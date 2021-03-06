<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMicroregionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('microregions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('code');
            $table->string('name');
            $table->unsignedBigInteger('mesoregion_id');
            $table->foreign('mesoregion_id')->references('id')
                  ->on('mesoregions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('microregions');
    }
}
