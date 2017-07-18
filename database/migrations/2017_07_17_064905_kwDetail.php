<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KwDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kwDetail', function (Blueprint $table) {
            $table->increments('kwDetailId');
            $table->timestamps();
            $table->unsignedInteger('kwId');
            $table->text('name');
            $table->text('library');
            $table->text('doc');
            $table->text('msg');
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
        //
    }
}
