<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCourses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('courses')) {
            Schema::create('courses', function (Blueprint $table) {
                $table->increments('course_id');
                $table->integer('sem_id')->unsigned();
                $table->foreign('sem_id')->reference('sem_id')->on('semesters');
                $table->string('course_name');
                $table->string('course_teacher');
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
        Schema::dropIfExists('courses');
    }
}
