<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Participants', function (Blueprint $table) {
            $table->string('Name_of_Participant');
            $table->string('id_Number');
            $table->string('mobile_number');
            $table->string('email_address');
            $table->string('training_site');
            $table->string('district');
            $table->string('FacilityName');
            $table->integer('PartID');
            $table->integer('mfl_code');
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
          Schema::drop('Participants');
    }
}