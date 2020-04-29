<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAssignments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('assignments')) {
            Schema::create('assignments', function (Blueprint $table) {
                $table->increments('ass_id');
                $table->integer('course_id')->unsigned();
                $table->foreign('course_id')->reference('course_id')->on('courses');
                $table->string('ass_name', 255);
                $table->dateTime('ass_deadline', 0);
                $table->string('ass_desc', 255);
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
        Schema::dropIfExists('assignments');
    }
}
