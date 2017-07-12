<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKwTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kw', function (Blueprint $table) {
            $table->increments('kwId');
            $table->timestamps();
            $table->unsignedInteger('testId');
            $table->text('name');
            $table->boolean('stautus');
            $table->text('endTime');
            $table->text('startTime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kw');
    }
}
