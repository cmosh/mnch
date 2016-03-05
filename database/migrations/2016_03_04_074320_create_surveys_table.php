<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->string('Name');
            $table->string('surveyID');
            $table->integer('Version');
            $table->string('Runtime');
            $table->string('Description');       
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('surveys');
    }
}