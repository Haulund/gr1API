<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDepartments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('departments')) {
            Schema::create('departments', function (Blueprint $table) {
                $table->increments('dep_id');
                $table->integer('school_id')->unsigned();
                $table->foreign('school_id')->references('school_id')->on('schools');
                $table->string('dep_name');
                $table->string('dep_address');
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
        Schema::dropIfExists('departments');
    }
}
