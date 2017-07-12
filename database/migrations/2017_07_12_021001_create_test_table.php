<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test', function (Blueprint $table) {
            $table->increments('testId');
            $table->timestamps();
            $table->unsignedInteger('suiteId');
            $table->text('id');
            $table->text('name');
            $table->text('doc');
            $table->boolean('stautus');
            $table->text('endTime');
            $table->boolean('critical');
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
        Schema::dropIfExists('test');
    }
}
