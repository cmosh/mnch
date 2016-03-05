<?php

use Illuminate\Database\Seeder;

class FacilityOwnersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('FacilityOwners')->delete();
        
        \DB::table('FacilityOwners')->insert(array (
            0 => 
            array (
                'id' => 1,
            'Owner' => 'Academic (if registered)',
                'Group' => 'Other',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'Owner' => 'Armed Forces',
                'Group' => 'MOH',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'Owner' => 'Christian Health Association of Kenya',
                'Group' => 'FBO',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'Owner' => 'Community',
                'Group' => 'CBO
',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'Owner' => 'Community Development Fund',
                'Group' => 'MOH',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'Owner' => 'Company Medical Service',
                'Group' => 'Private',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'Owner' => 'Humanitarian Agencies',
                'Group' => 'NGO',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'Owner' => 'Kenya Episcopal Conference-Catholic Secretariat',
                'Group' => 'FBO',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'Owner' => 'Local Authority',
                'Group' => 'MOH',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'Owner' => 'Local Authority T Fund',
                'Group' => 'MOH',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'Owner' => 'Ministry of Health',
                'Group' => 'MOH',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'Owner' => 'Non-Governmental Organizations',
                'Group' => 'NGO',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'Owner' => 'Other Faith Based',
                'Group' => 'FBO',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'Owner' => 'Other Public Institution',
                'Group' => 'MOH',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'Owner' => 'Parastatal',
                'Group' => 'MOH',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
            'Owner' => 'Private Enterprise (Institution)',
                'Group' => 'Private
',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'Owner' => 'Private Practice - Clinical Officer',
                'Group' => 'Private
',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'Owner' => 'Private Practice - General Practitioner',
                'Group' => 'Private
',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'Owner' => 'Private Practice - Medical Specialist',
                'Group' => 'Private
',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'Owner' => 'Private Practice - Nurse / Midwife',
                'Group' => 'Private
',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'Owner' => 'Private Practice - Unspecified',
                'Group' => 'Private
',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'Owner' => 'State Coorporation',
                'Group' => 'Other',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'Owner' => 'Supreme Council for Kenya Muslims',
                'Group' => 'FBO',
                'created_at' => '2016-03-04 08:55:19',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
