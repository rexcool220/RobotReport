<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suite', function (Blueprint $table) {
            $table->increments('suiteId');
            $table->timestamps();
            $table->unsignedInteger('reportId');
            $table->text('source');
            $table->text('id');
            $table->text('name');
            $table->text('doc');
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
        Schema::dropIfExists('suite');
    }
}
