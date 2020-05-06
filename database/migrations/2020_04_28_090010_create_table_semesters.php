<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSemesters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('semesters')) {
            Schema::create('semesters', function (Blueprint $table) {
                $table->increments('sem_id');
                $table->integer('edu_id')->unsigned();
                $table->foreign('edu_id')->references('edu_id')->on('educations');
                $table->string('sem_name');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('semeseters');
    }
}
