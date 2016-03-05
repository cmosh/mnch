<?php

use Illuminate\Database\Seeder;

class FacilityGroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('FacilityGroups')->delete();
        
        \DB::table('FacilityGroups')->insert(array (
            0 => 
            array (
                'id' => 1,
                'FacilityGroup' => 'Other',
                'FacilityType' => 'Blood Bank',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'FacilityGroup' => 'Other',
                'FacilityType' => 'Dental Clinic',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'FacilityGroup' => 'Dispensary',
                'FacilityType' => 'Dispensary',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'FacilityGroup' => 'Other',
                'FacilityType' => 'District Health Office',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'FacilityGroup' => 'Hospital',
                'FacilityType' => 'District Hospital',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'FacilityGroup' => 'Other',
                'FacilityType' => 'Eye Centre',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'FacilityGroup' => 'Other',
                'FacilityType' => 'Eye Clinic',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'FacilityGroup' => 'Other',
            'FacilityType' => 'Funeral Home (Stand-alone)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'FacilityGroup' => 'Health Centre',
                'FacilityType' => 'Health Centre',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'FacilityGroup' => 'Other',
                'FacilityType' => 'Health Programme',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'FacilityGroup' => 'Other',
                'FacilityType' => 'Health Project',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'FacilityGroup' => 'Other',
            'FacilityType' => 'Laboratory (Stand-alone)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'FacilityGroup' => 'Medical Clinic',
                'FacilityType' => 'Maternity Home',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'FacilityGroup' => 'Medical Clinic',
                'FacilityType' => 'Medical Centre',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'FacilityGroup' => 'Medical Clinic',
                'FacilityType' => 'Medical Clinic',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'FacilityGroup' => 'Hospital',
                'FacilityType' => 'National Referral Hospital',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'FacilityGroup' => 'Other',
                'FacilityType' => 'Not in List',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'FacilityGroup' => 'Other',
                'FacilityType' => 'Nursing Home',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'FacilityGroup' => 'Hospital',
                'FacilityType' => 'Other Hospital',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'FacilityGroup' => 'Hospital',
                'FacilityType' => 'Provincial General Hospital',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'FacilityGroup' => 'Other',
                'FacilityType' => 'Radiology Unit',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'FacilityGroup' => 'Other',
                'FacilityType' => 'Regional Blood Transfusion Centre',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'FacilityGroup' => 'Other',
                'FacilityType' => 'Rural Health Training Centre',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'FacilityGroup' => 'Hospital',
                'FacilityType' => 'Sub-District Hospital',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'FacilityGroup' => 'Other',
            'FacilityType' => 'Training Institution in Health (Stand-alone)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'FacilityGroup' => 'Other',
            'FacilityType' => 'VCT Centre (Stand-Alone)',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
