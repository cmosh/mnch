<?php

use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sections')->delete();
        
        \DB::table('sections')->insert(array (
            0 => 
            array (
                'sectionID' => 'CHV1SEC1',
                'surveyID' => 'CHV1',
                'dependencyID' => '',
                'identifier' => 'Section1',
                'name' => 'SECTION 1 OF 9: FACILITY INFORMATION',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'sectionID' => 'CHV1SEC2',
                'surveyID' => 'CHV1',
                'dependencyID' => '',
                'identifier' => 'Section2',
                'name' => 'SECTION 2 OF 9:GUIDELINES, JOB AIDS AND TOOLS',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'sectionID' => 'CHV1SEC3',
                'surveyID' => 'CHV1',
                'dependencyID' => '',
                'identifier' => 'Section3',
                'name' => 'SECTION 3 OF 9:DOES THE HCW CHECK FOR THE FOLLOWING CONDITIONS',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'sectionID' => 'CHV1SEC4',
                'surveyID' => 'CHV1',
                'dependencyID' => '',
                'identifier' => 'Section4',
                'name' => 'SECTION 4 OF 9:COMMODITY AND BUNDLING AVAILABILITY',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'sectionID' => 'CHV1SEC5',
                'surveyID' => 'CHV1',
                'dependencyID' => '',
                'identifier' => 'Section5',
                'name' => 'SECTION 5 OF 9:REVIEW OF RECORDS',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'sectionID' => 'CHV1SEC6',
                'surveyID' => 'CHV1',
                'dependencyID' => '',
                'identifier' => 'Section6',
                'name' => 'SECTION 6 OF 9: EQUIPMENT AVAILABILITY AND STATUS',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'sectionID' => 'CHV1SEC7',
                'surveyID' => 'CHV1',
                'dependencyID' => '',
                'identifier' => 'Section7',
                'name' => 'SECTION 7 of  9: SUPPLIES AVAILABILITY',
                'created_at' => '2015-07-18 18:14:09',
                'updated_at' => '2015-07-18 18:14:09',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'sectionID' => 'CHV1SEC8',
                'surveyID' => 'CHV1',
                'dependencyID' => '',
                'identifier' => 'Section8',
                'name' => 'SECTION 8 of  9: RESOURCE AVAILABILITY',
                'created_at' => '2015-07-18 18:14:09',
                'updated_at' => '2015-07-18 18:14:09',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'sectionID' => 'CHV1SEC9',
                'surveyID' => 'CHV1',
                'dependencyID' => '',
                'identifier' => 'Section9',
                'name' => 'SECTION 9 OF 9: COMMUNITY STRATEGY',
                'created_at' => '2015-07-18 18:14:09',
                'updated_at' => '2015-07-18 18:14:09',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'sectionID' => 'CHV2SEC1',
                'surveyID' => 'CHV2',
                'dependencyID' => '',
                'identifier' => 'Section1',
                'name' => 'SECTION 1 OF 8: FACILITY INFORMATION',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'sectionID' => 'CHV2SEC2',
                'surveyID' => 'CHV2',
                'dependencyID' => '',
                'identifier' => 'Section2',
                'name' => 'SECTION 2 of 8: GUIDELINES,JOBS AND TOOLS',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'sectionID' => 'CHV2SEC3',
                'surveyID' => 'CHV2',
                'dependencyID' => '',
                'identifier' => 'Section3',
                'name' => 'SECTION 3 of  8: DOCUMENTED FACILITY LEVEL DATA',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'sectionID' => 'CHV2SEC4',
                'surveyID' => 'CHV2',
                'dependencyID' => '',
                'identifier' => 'Section4',
                'name' => 'SECTION 4 of  8: COMMODITY AVAILABILITY',
                'created_at' => '2015-07-18 18:14:09',
                'updated_at' => '2015-07-18 18:14:09',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'sectionID' => 'CHV2SEC5',
                'surveyID' => 'CHV2',
                'dependencyID' => '',
                'identifier' => 'Section5',
                'name' => 'SECTION 5 of  8: ORAL REHYDRATION THERAPY',
                'created_at' => '2015-07-18 18:14:09',
                'updated_at' => '2015-07-18 18:14:09',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'sectionID' => 'CHV2SEC6',
                'surveyID' => 'CHV2',
                'dependencyID' => '',
                'identifier' => 'Section6',
                'name' => 'SECTION 6 of  8: SUPPLIES AVAILABILITY',
                'created_at' => '2015-07-18 18:14:09',
                'updated_at' => '2015-07-18 18:14:09',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'sectionID' => 'CHV2SEC7',
                'surveyID' => 'CHV2',
                'dependencyID' => '',
                'identifier' => 'Section7',
                'name' => 'SECTION 7 of  8: RESOURCE AVAILABILITY',
                'created_at' => '2015-07-18 18:14:09',
                'updated_at' => '2015-07-18 18:14:09',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'sectionID' => 'CHV2SEC8',
                'surveyID' => 'CHV2',
                'dependencyID' => '',
                'identifier' => 'Section8',
                'name' => 'SECTION 8 OF 8: COMMUNITY STRATEGY',
                'created_at' => '2015-07-18 18:14:09',
                'updated_at' => '2015-07-18 18:14:09',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'sectionID' => 'IMCIV1SEC1',
                'surveyID' => 'IMCIV1',
                'dependencyID' => '',
                'identifier' => 'Section1',
                'name' => 'SECTION 1 OF 4: FACILITY, HCW and WORK STATION INFORMATION',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'sectionID' => 'IMCIV1SEC2',
                'surveyID' => 'IMCIV1',
                'dependencyID' => '',
                'identifier' => 'Section2',
                'name' => 'SECTION 2 OF 8: OBSERVATION OF CASE MANAGEMENT: ONE CASE PER HCW',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'sectionID' => 'IMCIV1SEC3',
                'surveyID' => 'IMCIV1',
                'dependencyID' => 'IMCIV1SEC2BLK1RW2COL02ztyes_no2',
                'identifier' => 'Section3',
                'name' => 'SECTION 2A OF 8: ASSESSMENT OF THE SICK CHILD AGE 2 MONTHS UP TO 5 YEARS',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'sectionID' => 'IMCIV1SEC4',
                'surveyID' => 'IMCIV1',
                'dependencyID' => 'IMCIV1SEC2BLK1RW2COL02ztyes_no1',
                'identifier' => 'Section4',
            'name' => 'SECTION 2B OF 8: ASSESMENT FOR THE SICK YOUNG INFANT AGE UPTO 2 MONTHS ( IF  APPLICABLE)',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'sectionID' => 'IMCIV1SEC5',
                'surveyID' => 'IMCIV1',
                'dependencyID' => '',
                'identifier' => 'Section5',
                'name' => 'SECTION 3 of 4: OBSERVATION OF CASE MANAGEMENT : ONE CASE PER HCW',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'sectionID' => 'IMCIV1SEC6',
                'surveyID' => 'IMCIV1',
                'dependencyID' => '',
                'identifier' => 'Section6',
                'name' => 'SECTION 4 of 4: CONSULTATION AND EXIT INTERVIEWS',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'sectionID' => 'MNHV1SEC1',
                'surveyID' => 'MNHV1',
                'dependencyID' => '',
                'identifier' => 'Section1',
                'name' => 'SECTION 1 of 8: FACILITY INFORMATION',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'sectionID' => 'MNHV1SEC2',
                'surveyID' => 'MNHV1',
                'dependencyID' => '',
                'identifier' => 'Section2',
                'name' => 'SECTION 2 of 8: FACILITY DATA AND MATERIAL AND NEONATAL SERVICE DELIVERY',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'sectionID' => 'MNHV1SEC3',
                'surveyID' => 'MNHV1',
                'dependencyID' => '',
                'identifier' => 'Section3',
                'name' => 'SECTION 3 of 8: GUIDELINES, JOB AIDS AND TOOLS AVAILABILITY',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'sectionID' => 'MNHV1SEC4',
                'surveyID' => 'MNHV1',
                'dependencyID' => '',
                'identifier' => 'Section4',
                'name' => 'SECTION 4 of 8: STAFF TRAINING',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'sectionID' => 'MNHV1SEC5',
                'surveyID' => 'MNHV1',
                'dependencyID' => '',
                'identifier' => 'Section5',
                'name' => 'SECTION 5 of 8: COMMODITY AVAILABILITY',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'sectionID' => 'MNHV1SEC6',
                'surveyID' => 'MNHV1',
                'dependencyID' => '',
                'identifier' => 'Section6',
                'name' => 'SECTION 6 of 8: COMMODITY USAGE',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'sectionID' => 'MNHV1SEC7',
                'surveyID' => 'MNHV1',
                'dependencyID' => '',
                'identifier' => 'Section7',
                'name' => 'SECTION 7 of 8: EQUIPMENT AVAILABILITY AND FUNCTIONALITY',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'sectionID' => 'MNHV1SEC8',
                'surveyID' => 'MNHV1',
                'dependencyID' => '',
                'identifier' => 'Section8',
                'name' => 'SECTION 7 of 8:III. RESOURCE AVAILABILITY',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'sectionID' => 'MNHV1SEC9',
                'surveyID' => 'MNHV1',
                'dependencyID' => '',
                'identifier' => 'Section9',
                'name' => 'SECTION 8 of 8: COMMUNITY STRATEGY',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'sectionID' => 'MNHV2SEC1',
                'surveyID' => 'MNHV2',
                'dependencyID' => '',
                'identifier' => 'Section1',
                'name' => 'SECTION 1 of 8: FACILITY INFORMATION',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'sectionID' => 'MNHV2SEC2',
                'surveyID' => 'MNHV2',
                'dependencyID' => '',
                'identifier' => 'Section2',
                'name' => 'SECTION 2 of 8: FACILITY DATA AND MATERIAL AND NEONATAL SERVICE DELIVERY',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'sectionID' => 'MNHV2SEC3',
                'surveyID' => 'MNHV2',
                'dependencyID' => '',
                'identifier' => 'Section3',
                'name' => 'SECTION 3 of 8: GUIDELINES, JOB AIDS AND TOOLS AVAILABILITY',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'sectionID' => 'MNHV2SEC4',
                'surveyID' => 'MNHV2',
                'dependencyID' => '',
                'identifier' => 'Section4',
                'name' => 'SECTION 4 of 8: STAFF TRAINING',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'sectionID' => 'MNHV2SEC5',
                'surveyID' => 'MNHV2',
                'dependencyID' => '',
                'identifier' => 'Section5',
                'name' => 'SECTION 5 of 8: COMMODITY AVAILABILITY',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'sectionID' => 'MNHV2SEC6',
                'surveyID' => 'MNHV2',
                'dependencyID' => '',
                'identifier' => 'Section6',
                'name' => 'SECTION 6 of 8: EQUIPMENT AVAILABILITY AND FUNCTIONALITY',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'sectionID' => 'MNHV2SEC7',
                'surveyID' => 'MNHV2',
                'dependencyID' => '',
                'identifier' => 'Section7',
                'name' => 'SECTION 7 of 8: RESOURCE AVAILABILITY',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'sectionID' => 'MNHV2SEC8',
                'surveyID' => 'MNHV2',
                'dependencyID' => '',
                'identifier' => 'Section8',
                'name' => 'SECTION 8 of 8: COMMUNITY STRATEGY',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '2016-03-04 08:55:20',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
