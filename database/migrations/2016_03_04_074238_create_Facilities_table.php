<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Facilities', function (Blueprint $table) {
            $table->string('FacilityName');
            $table->string('Province');
            $table->string('County');
            $table->string('SubCounty');
            $table->string('District');
            $table->string('Tier');
            $table->string('Division');
            $table->string('Type');
            $table->string('Owner');
            $table->string('Location');
            $table->string('SubLocation');
            $table->string('DescriptionOfLocation');
            $table->string('Constituency');
            $table->string('NearestTown');
            $table->string('OfficalLandline');
            $table->string('OfficalFAx');
            $table->string('OfficalMobile');
            $table->string('OfficalEmail');
            $table->string('OfficalAddress');
            $table->string('OfficalAlternateNo');
            $table->string('Town');
            $table->string('PostCode');
            $table->string('InCharge');
            $table->string('JobTitleofInCharge');
            $table->string('Open24Hours');
            $table->string('OpenWeekends');
            $table->string('OperationalStatus');
            $table->string('ANC');
            $table->string('ART');
            $table->string('BEOC');
            $table->string('BLOOD');
            $table->string('CAES_SEC');
            $table->string('CEOC');
            $table->string('C_IMCI');
            $table->string('EPI');
            $table->string('FP');
            $table->string('GROWM');
            $table->string('HBC');
            $table->string('HCT');
            $table->string('IPD');
            $table->string('OPD');
            $table->string('OUTREACH');
            $table->string('PMTCT');
            $table->string('RAD_XRAY');
            $table->string('RHTC_RHDC');
            $table->string('TB_DIAG');
            $table->string('TB_LABS');
            $table->string('TB_TREAT');
            $table->string('YOUTH');
            $table->timestamps();
            $table->increments('Index');
            $table->integer('FacilityCode');
            $table->integer('Beds');
            $table->integer('Cots');
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
          Schema::drop('Facilities');
    }
}
