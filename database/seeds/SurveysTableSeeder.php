<?php

use Illuminate\Database\Seeder;

class SurveysTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('surveys')->delete();
        
        \DB::table('surveys')->insert(array (
            0 => 
            array (
                'Name' => 'Child Health',
                'surveyID' => 'CHV1',
                'Version' => 1,
                'Runtime' => '2012-2013',
                'Description' => 'CH survey',
                'created_at' => '2015-07-18 00:00:00',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'Name' => 'Child Health',
                'surveyID' => 'CHV2',
                'Version' => 2,
                'Runtime' => '2014-present',
                'Description' => 'CH survey',
                'created_at' => '2015-07-18 00:00:00',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'Name' => 'IMCI',
                'surveyID' => 'IMCIV1',
                'Version' => 1,
                'Runtime' => '2014-Present',
                'Description' => 'Integrated Management of Childhood Illness',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'Name' => 'Maternal Neonatal Healthcare',
                'surveyID' => 'MNHV1',
                'Version' => 1,
                'Runtime' => '2012-2013',
                'Description' => 'MNH Survey',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'Name' => 'Maternal Neonatal Healthcare',
                'surveyID' => 'MNHV2',
                'Version' => 2,
                'Runtime' => '2014-present',
                'Description' => 'MNH Survey',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
