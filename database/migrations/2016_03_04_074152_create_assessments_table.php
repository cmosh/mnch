<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->string('Assessment_ID');
            $table->integer('Facility_ID');
            $table->string('Survey');
            $table->string('Assessment_Term');
            $table->date('Date');
            $table->string('status');
            $table->string('PartID');
            $table->integer('UserId');  
            $table->softDeletes();  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('assessments');
    }
}
