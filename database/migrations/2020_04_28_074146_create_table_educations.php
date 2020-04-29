<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEducations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('educations')) {
            Schema::create('educations', function (Blueprint $table) {
                $table->increments('edu_id');
                $table->integer('dep_id')->unsigned();
                $table->foreign('dep_id')->reference('dep_id')->on('departments');
                $table->string('edu_name');
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
        Schema::dropIfExists('educations');
    }
}
