<?php

use Illuminate\Database\Seeder;

class BlocksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blocks')->delete();
        
        \DB::table('blocks')->insert(array (
            0 => 
            array (
                'sectionID' => 'CHV1SEC1',
                'blockID' => 'CHV1SEC1BLK1',
                'dependencyID' => '',
                'name' => 'HOW MANY STAFF MEMBERS HAVE BEEN TRAINED IN THE  FOLLOWING?',
                'created_at' => '2015-07-18 18:18:47',
                'updated_at' => '2015-07-18 18:18:47',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'sectionID' => 'CHV1SEC1',
                'blockID' => 'CHV1SEC1BLK2',
                'dependencyID' => '',
                'name' => 'HEALTH SERVICES',
                'created_at' => '2015-07-18 18:18:47',
                'updated_at' => '2015-07-18 18:18:47',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'sectionID' => 'CHV1SEC1',
                'blockID' => 'CHV1SEC1BLK3',
                'dependencyID' => '',
                'name' => 'INFRASTRUCTURE: IMCI Consultation Room',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'sectionID' => 'CHV1SEC2',
                'blockID' => 'CHV1SEC2BLK01',
                'dependencyID' => '',
                'name' => 'GUIDELINES AND JOBS AIDS AVAILABILITY',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'sectionID' => 'CHV1SEC2',
                'blockID' => 'CHV1SEC2BLK02',
                'dependencyID' => '',
                'name' => 'DOES THE UNIT HAVE THE FOLOWING TOOLS?',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'sectionID' => 'CHV1SEC2',
                'blockID' => 'CHV1SEC2BLK03',
                'dependencyID' => '',
                'name' => 'TOTAL U5 CHILDREN SEEN IN THE LAST 1 MONTH',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'sectionID' => 'CHV1SEC2',
                'blockID' => 'CHV1SEC2BLK04',
                'dependencyID' => '',
                'name' => 'ARE THE FOLLOWING DANGER SIGNS ASSESSED IN ONGOING SESSION FOR A CHILD',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'sectionID' => 'CHV1SEC2',
                'blockID' => 'CHV1SEC2BLK05',
                'dependencyID' => '',
                'name' => 'ASSESSMENT FOR THE MAIN SYMPTOMS IN AN ONGOING SESSION FOR A CHILD',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'sectionID' => 'CHV1SEC2',
                'blockID' => 'CHV1SEC2BLK06',
                'dependencyID' => 'CHV1SEC2BLK5RW02COL02chsyes_no1',
                'name' => 'Coughing/Difficulty Breathing',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'sectionID' => 'CHV1SEC2',
                'blockID' => 'CHV1SEC2BLK07',
                'dependencyID' => '',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'sectionID' => 'CHV1SEC2',
                'blockID' => 'CHV1SEC2BLK08',
                'dependencyID' => 'CHV1SEC2BLK7RW02COL02chsyes_no1',
                'name' => 'Diarrhoea',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'sectionID' => 'CHV1SEC2',
                'blockID' => 'CHV1SEC2BLK09',
                'dependencyID' => '',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'sectionID' => 'CHV1SEC2',
                'blockID' => 'CHV1SEC2BLK10',
                'dependencyID' => 'CHV1SEC2BLK9RW02COL02chsyes_no1',
                'name' => 'Fever',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'sectionID' => 'CHV1SEC2',
                'blockID' => 'CHV1SEC2BLK11',
                'dependencyID' => '',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'sectionID' => 'CHV1SEC2',
                'blockID' => 'CHV1SEC2BLK12',
                'dependencyID' => 'CHV1SEC2BLK11RW02COL02chsyes_no1',
                'name' => 'Ear Infection',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'sectionID' => 'CHV1SEC3',
                'blockID' => 'CHV1SEC3BLK1',
                'dependencyID' => '',
                'name' => 'Malnutrition',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'sectionID' => 'CHV1SEC3',
                'blockID' => 'CHV1SEC3BLK2',
                'dependencyID' => '',
                'name' => 'Anaemia',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'sectionID' => 'CHV1SEC3',
                'blockID' => 'CHV1SEC3BLK3',
                'dependencyID' => '',
                'name' => 'Condition',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'sectionID' => 'CHV1SEC4',
                'blockID' => 'CHV1SEC4BLK1',
                'dependencyID' => '',
                'name' => 'MAIN SUPPLIER',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'sectionID' => 'CHV1SEC4',
                'blockID' => 'CHV1SEC4BLK2',
                'dependencyID' => '',
                'name' => 'INDICATE AVAILABILITY, LOCATION, SUPPLIER AND QUANTITIES ON HAND OF THE FOLLOWING COMMODITIES',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'sectionID' => 'CHV1SEC4',
                'blockID' => 'CHV1SEC4BLK3',
                'dependencyID' => '',
                'name' => 'MAIN SUPPLIER',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'sectionID' => 'CHV1SEC4',
                'blockID' => 'CHV1SEC4BLK4',
                'dependencyID' => '',
                'name' => 'INDICATE AVAILABILITY, LOCATION, SUPPLIER AND QUANTITIES ON HAND OF THE FOLLOWING COMMODITIES',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'sectionID' => 'CHV1SEC5',
                'blockID' => 'CHV1SEC5BLK1',
                'dependencyID' => '',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'sectionID' => 'CHV1SEC5',
                'blockID' => 'CHV1SEC5BLK2',
                'dependencyID' => '',
                'name' => 'ORAL REHYDRATION THERAPY CORNER ASSESSMENT',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'sectionID' => 'CHV1SEC6',
                'blockID' => 'CHV1SEC6BLK1',
                'dependencyID' => '',
                'name' => 'INDICATE THE AVAILABILITY, LOCATION AND FUNCTIONALITY OF THE FOLLOWING EQUIPMENT AT THE ORT CORNER',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'sectionID' => 'CHV1SEC7',
                'blockID' => 'CHV1SEC7BLK1',
                'dependencyID' => '',
                'name' => 'MAIN SUPPLIER',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'sectionID' => 'CHV1SEC7',
                'blockID' => 'CHV1SEC7BLK2',
                'dependencyID' => '',
                'name' => 'INDICATE THE AVAILABILITY OF THE FOLLOWING SUPPLIES',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'sectionID' => 'CHV1SEC8',
                'blockID' => 'CHV1SEC8BLK1',
                'dependencyID' => '',
                'name' => 'MAIN SUPPLIER',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'sectionID' => 'CHV1SEC8',
                'blockID' => 'CHV1SEC8BLK2',
                'dependencyID' => '',
                'name' => 'INDICATE THE AVAILABILITY AND LOCATION OF THE FOLLOWING RESOURCES',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'sectionID' => 'CHV1SEC9',
                'blockID' => 'CHV1SEC9BLK1',
                'dependencyID' => '',
                'name' => 'COMMUNITY STRATEGY',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'sectionID' => 'CHV2SEC1',
                'blockID' => 'CHV2SEC1BLK1',
                'dependencyID' => '',
                'name' => 'H',
                'created_at' => '2015-07-18 18:18:47',
                'updated_at' => '2015-07-18 18:18:47',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'sectionID' => 'CHV2SEC1',
                'blockID' => 'CHV2SEC1BLK2',
                'dependencyID' => '',
                'name' => 'H',
                'created_at' => '2015-07-18 18:18:47',
                'updated_at' => '2015-07-18 18:18:47',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'sectionID' => 'CHV2SEC2',
                'blockID' => 'CHV2SEC2BLK1',
                'dependencyID' => '',
                'name' => 'GUIDELINES AND JOBS AIDS AVAILABILITY',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'sectionID' => 'CHV2SEC2',
                'blockID' => 'CHV2SEC2BLK2',
                'dependencyID' => '',
                'name' => 'DOES THE UNIT HAVE THE FOLOWING TOOLS?',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'sectionID' => 'CHV2SEC3',
                'blockID' => 'CHV2SEC3BLK96A',
                'dependencyID' => '',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'sectionID' => 'CHV2SEC3',
                'blockID' => 'CHV2SEC3BLK96D',
                'dependencyID' => 'CHV2SEC3BLK96ARW01COL02chsyes_no1',
                'name' => '2015',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'sectionID' => 'CHV2SEC3',
                'blockID' => 'CHV2SEC3BLK97A',
                'dependencyID' => 'CHV2SEC3BLK96ARW01COL02chsyes_no1',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'sectionID' => 'CHV2SEC3',
                'blockID' => 'CHV2SEC3BLK97D',
                'dependencyID' => 'CHV2SEC3BLK97ARW01COL02chsyes_no1',
                'name' => '2014',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'sectionID' => 'CHV2SEC3',
                'blockID' => 'CHV2SEC3BLK98A',
                'dependencyID' => 'CHV2SEC3BLK97ARW01COL02chsyes_no1',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'sectionID' => 'CHV2SEC3',
                'blockID' => 'CHV2SEC3BLK98D',
                'dependencyID' => 'CHV2SEC3BLK98ARW01COL02chsyes_no1',
                'name' => '2013',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'sectionID' => 'CHV2SEC3',
                'blockID' => 'CHV2SEC3BLK99A',
                'dependencyID' => 'CHV2SEC3BLK98ARW01COL02chsyes_no1',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'sectionID' => 'CHV2SEC3',
                'blockID' => 'CHV2SEC3BLK99D',
                'dependencyID' => 'CHV2SEC3BLK99ARW01COL02chsyes_no1',
                'name' => '2012',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'sectionID' => 'CHV2SEC4',
                'blockID' => 'CHV2SEC4BLK1',
                'dependencyID' => '',
                'name' => 'MAIN SUPPLIER',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'sectionID' => 'CHV2SEC4',
                'blockID' => 'CHV2SEC4BLK2',
                'dependencyID' => '',
                'name' => 'INDICATE THE AVAILABILITY AND MAIN REASON FOR UNAVAILABILITY FOR THE COMMODITIES BELOW',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'sectionID' => 'CHV2SEC5',
                'blockID' => 'CHV2SEC5BLK1',
                'dependencyID' => '',
                'name' => 'ORAL REHYDRATION THERAPY CORNER ASSESSMENT',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'sectionID' => 'CHV2SEC6',
                'blockID' => 'CHV2SEC6BLK1',
                'dependencyID' => '',
                'name' => 'MAIN SUPPLIER',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'sectionID' => 'CHV2SEC6',
                'blockID' => 'CHV2SEC6BLK2',
                'dependencyID' => '',
                'name' => 'INDICATE THE AVAILABILITY OF THE FOLLOWING SUPPLIES',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'sectionID' => 'CHV2SEC7',
                'blockID' => 'CHV2SEC7BLK1',
                'dependencyID' => '',
                'name' => 'MAIN SUPPLIER',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'sectionID' => 'CHV2SEC7',
                'blockID' => 'CHV2SEC7BLK2',
                'dependencyID' => '',
                'name' => 'INDICATE THE AVAILABILITY AND LOCATION OF THE FOLLOWING RESOURCES',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'sectionID' => 'CHV2SEC8',
                'blockID' => 'CHV2SEC8BLK1',
                'dependencyID' => '',
                'name' => 'COMMUNITY STRATEGY',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'sectionID' => 'IMCIV1SEC1',
                'blockID' => 'IMCIV1SEC1BLK4',
                'dependencyID' => '',
                'name' => 'HCW Profile',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'sectionID' => 'IMCIV1SEC1',
                'blockID' => 'IMCIV1SEC1BLK5',
                'dependencyID' => '',
                'name' => 'Work Station Profile',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'sectionID' => 'IMCIV1SEC2',
                'blockID' => 'IMCIV1SEC2BLK1',
                'dependencyID' => '',
                'name' => 'Child Profile',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'sectionID' => 'IMCIV1SEC2',
                'blockID' => 'IMCIV1SEC2BLK2',
                'dependencyID' => '',
                'name' => 'Are the following Services Offered to a child?',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'sectionID' => 'IMCIV1SEC2',
                'blockID' => 'IMCIV1SEC2BLK3',
                'dependencyID' => '',
                'name' => 'Are the following Danger Signs assessed in ongoing session for a child?',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'sectionID' => 'IMCIV1SEC3',
                'blockID' => 'IMCIV1SEC3BLK01',
                'dependencyID' => '',
                'name' => 'Assessment of the main Symptoms in an ongoing session for a child',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'sectionID' => 'IMCIV1SEC3',
                'blockID' => 'IMCIV1SEC3BLK02',
                'dependencyID' => 'IMCIV1SEC3BLK1RW02COL02ztyes_no1',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'sectionID' => 'IMCIV1SEC3',
                'blockID' => 'IMCIV1SEC3BLK03',
                'dependencyID' => '',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'sectionID' => 'IMCIV1SEC3',
                'blockID' => 'IMCIV1SEC3BLK04',
                'dependencyID' => 'IMCIV1SEC3BLK3RW02COL02ztyes_no1',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'sectionID' => 'IMCIV1SEC3',
                'blockID' => 'IMCIV1SEC3BLK05',
                'dependencyID' => '',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'sectionID' => 'IMCIV1SEC3',
                'blockID' => 'IMCIV1SEC3BLK06',
                'dependencyID' => 'IMCIV1SEC3BLK5RW02COL02ztyes_no1',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'sectionID' => 'IMCIV1SEC3',
                'blockID' => 'IMCIV1SEC3BLK07',
                'dependencyID' => '',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'sectionID' => 'IMCIV1SEC3',
                'blockID' => 'IMCIV1SEC3BLK08',
                'dependencyID' => 'IMCIV1SEC3BLK7RW02COL02ztyes_no1',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'sectionID' => 'IMCIV1SEC3',
                'blockID' => 'IMCIV1SEC3BLK09',
                'dependencyID' => '',
                'name' => '5A. Feeding Problem',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'sectionID' => 'IMCIV1SEC3',
                'blockID' => 'IMCIV1SEC3BLK10',
                'dependencyID' => '',
                'name' => '5B. Weight',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'sectionID' => 'IMCIV1SEC3',
                'blockID' => 'IMCIV1SEC3BLK11',
                'dependencyID' => '',
                'name' => '6. Special Treatment Needs',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'sectionID' => 'IMCIV1SEC4',
                'blockID' => 'IMCIV1SEC4BLK01',
                'dependencyID' => '',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'sectionID' => 'IMCIV1SEC4',
                'blockID' => 'IMCIV1SEC4BLK02',
                'dependencyID' => 'IMCIV1SEC4BLK1RW01COL02ztyes_no1',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'sectionID' => 'IMCIV1SEC4',
                'blockID' => 'IMCIV1SEC4BLK03',
                'dependencyID' => '',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'sectionID' => 'IMCIV1SEC4',
                'blockID' => 'IMCIV1SEC4BLK04',
                'dependencyID' => 'IMCIV1SEC4BLK3RW01COL02ztyes_no1',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'sectionID' => 'IMCIV1SEC4',
                'blockID' => 'IMCIV1SEC4BLK05',
                'dependencyID' => '',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'sectionID' => 'IMCIV1SEC4',
                'blockID' => 'IMCIV1SEC4BLK06',
                'dependencyID' => 'IMCIV1SEC4BLK5RW01COL02ztyes_no1',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'sectionID' => 'IMCIV1SEC4',
                'blockID' => 'IMCIV1SEC4BLK07',
                'dependencyID' => '',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'sectionID' => 'IMCIV1SEC4',
                'blockID' => 'IMCIV1SEC4BLK08',
                'dependencyID' => 'IMCIV1SEC4BLK7RW01COL02ztyes_no1',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'sectionID' => 'IMCIV1SEC4',
                'blockID' => 'IMCIV1SEC4BLK10',
                'dependencyID' => '',
                'name' => '5A. Feeding Problem',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'sectionID' => 'IMCIV1SEC4',
                'blockID' => 'IMCIV1SEC4BLK11',
                'dependencyID' => '',
                'name' => '5B. Weight',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'sectionID' => 'IMCIV1SEC4',
                'blockID' => 'IMCIV1SEC4BLK12',
                'dependencyID' => '',
                'name' => '6. Special Treatment Needs',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'sectionID' => 'IMCIV1SEC5',
                'blockID' => 'IMCIV1SEC5BLK1',
                'dependencyID' => '',
                'name' => 'MALNUTRITION',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'sectionID' => 'IMCIV1SEC5',
                'blockID' => 'IMCIV1SEC5BLK2',
                'dependencyID' => '',
                'name' => 'ANAEMIA',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'sectionID' => 'IMCIV1SEC5',
                'blockID' => 'IMCIV1SEC5BLK3',
                'dependencyID' => '',
                'name' => 'CONDITION',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'sectionID' => 'IMCIV1SEC5',
                'blockID' => 'IMCIV1SEC5BLK4',
                'dependencyID' => '',
                'name' => 'TREATMENT AND COUNSELLING',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'sectionID' => 'IMCIV1SEC6',
                'blockID' => 'IMCIV1SEC6BLK1',
                'dependencyID' => '',
                'name' => 'Consultation Observation',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'sectionID' => 'IMCIV1SEC6',
                'blockID' => 'IMCIV1SEC6BLK2',
                'dependencyID' => '',
                'name' => 'Exit Interview with Caregiver',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'sectionID' => 'IMCIV1SEC6',
                'blockID' => 'IMCIV1SEC6BLK3',
                'dependencyID' => '',
                'name' => 'Assessment Outcome',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'sectionID' => 'IMCIV1SEC6',
                'blockID' => 'IMCIV1SEC6BLK4',
                'dependencyID' => '',
                'name' => 'Criteria For Certification : Section A',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'sectionID' => 'IMCIV1SEC6',
                'blockID' => 'IMCIV1SEC6BLK5',
                'dependencyID' => '',
                'name' => 'Checked For The Following: Section B',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'sectionID' => 'IMCIV1SEC6',
                'blockID' => 'IMCIV1SEC6BLK6',
                'dependencyID' => '',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'sectionID' => 'IMCIV1SEC6',
                'blockID' => 'IMCIV1SEC6BLK7',
                'dependencyID' => '',
                'name' => 'CERTIFICATION',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'sectionID' => 'IMCIV1SEC6',
                'blockID' => 'IMCIV1SEC6BLK8',
                'dependencyID' => '',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'sectionID' => 'IMCIV1SEC6',
                'blockID' => 'IMCIV1SEC6BLK9',
                'dependencyID' => '',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'sectionID' => 'MNHV1SEC1',
                'blockID' => 'MNHV1SEC1BLK1',
                'dependencyID' => '',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'sectionID' => 'MNHV1SEC1',
                'blockID' => 'MNHV1SEC1BLK2',
                'dependencyID' => '',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'sectionID' => 'MNHV1SEC1',
                'blockID' => 'MNHV1SEC1BLK3',
                'dependencyID' => '',
                'name' => 'PROVISION OF SERVICES',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'sectionID' => 'MNHV1SEC1',
                'blockID' => 'MNHV1SEC1BLK4',
                'dependencyID' => '',
                'name' => 'Health Facility Management',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'sectionID' => 'MNHV1SEC2',
                'blockID' => 'MNHV1SEC2BLK1',
                'dependencyID' => '',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'sectionID' => 'MNHV1SEC2',
                'blockID' => 'MNHV1SEC2BLK2',
                'dependencyID' => '',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'sectionID' => 'MNHV1SEC2',
                'blockID' => 'MNHV1SEC2BLK3',
                'dependencyID' => '',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'sectionID' => 'MNHV1SEC2',
                'blockID' => 'MNHV1SEC2BLK4',
                'dependencyID' => '',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'sectionID' => 'MNHV1SEC2',
                'blockID' => 'MNHV1SEC2BLK5',
                'dependencyID' => '',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'sectionID' => 'MNHV1SEC2',
                'blockID' => 'MNHV1SEC2BLK6',
                'dependencyID' => '',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'sectionID' => 'MNHV1SEC2',
                'blockID' => 'MNHV1SEC2BLK7',
                'dependencyID' => '',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'sectionID' => 'MNHV1SEC3',
                'blockID' => 'MNHV1SEC3BLK1',
                'dependencyID' => '',
                'name' => 'GUIDELINES AVAILABILITY',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'sectionID' => 'MNHV1SEC3',
                'blockID' => 'MNHV1SEC3BLK2',
                'dependencyID' => '',
                'name' => 'JOB AIDS AVAILABILITY',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'sectionID' => 'MNHV1SEC3',
                'blockID' => 'MNHV1SEC3BLK3',
                'dependencyID' => '',
                'name' => 'TOOLS AVAILABILITY',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'sectionID' => 'MNHV1SEC4',
                'blockID' => 'MNHV1SEC4BLK1',
                'dependencyID' => '',
                'name' => 'HOW MANY STAFF MEMBERS HAVE BEEN TRAINED IN THE FOLLOWING?',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'sectionID' => 'MNHV1SEC5',
                'blockID' => 'MNHV1SEC5BLK1',
                'dependencyID' => '',
                'name' => 'MAIN SUPPLIER',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'sectionID' => 'MNHV1SEC5',
                'blockID' => 'MNHV1SEC5BLK2',
                'dependencyID' => '',
                'name' => 'INDICATE THE AVAILABILITY, MAIN REASON FOR UNAVAILABILITY, DURATION OF UNAVAILABILITY & WHAT HAPPENED WHEN THE COMMODITY WAS NOT AVAILABLE',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'sectionID' => 'MNHV1SEC6',
                'blockID' => 'MNHV1SEC6BLK2',
                'dependencyID' => '',
                'name' => 'INDICATE THE AVAILABILITY, MAIN REASON FOR UNAVAILABILITY, DURATION OF UNAVAILABILITY & WHAT HAPPENED WHEN THE COMMODITY WAS NOT AVAILABLE',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'sectionID' => 'MNHV1SEC7',
                'blockID' => 'MNHV1SEC7BLK1',
                'dependencyID' => '',
                'name' => 'Equipment Availability',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'sectionID' => 'MNHV1SEC7',
                'blockID' => 'MNHV1SEC7BLK2',
                'dependencyID' => '',
                'name' => 'Testing Supplies',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'sectionID' => 'MNHV1SEC7',
                'blockID' => 'MNHV1SEC7BLK21',
                'dependencyID' => '',
                'name' => 'SECTION 7 OF 8: II. KITS/SETS AVAILABILITY',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'sectionID' => 'MNHV1SEC7',
                'blockID' => 'MNHV1SEC7BLK3',
                'dependencyID' => '',
                'name' => 'Delivery Kit Components',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'sectionID' => 'MNHV1SEC7',
                'blockID' => 'MNHV1SEC7BLK4',
                'dependencyID' => '',
                'name' => 'MAIN SUPPLIER',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'sectionID' => 'MNHV1SEC7',
                'blockID' => 'MNHV1SEC7BLK5',
                'dependencyID' => '',
                'name' => 'INDICATE THE AVAILABILITY AND MAIN REASON FOR UNAVAILABILITY FOR THE FOLLOWING KITS/SETS',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'sectionID' => 'MNHV1SEC8',
                'blockID' => 'MNHV1SEC8BLK1',
                'dependencyID' => '',
                'name' => 'INDICATE THE AVAILABILITY AND LOCATION OF THE FOLLOWING RESOURCES',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'sectionID' => 'MNHV1SEC8',
                'blockID' => 'MNHV1SEC8BLK2',
                'dependencyID' => '',
                'name' => 'INDICATE THE STORAGE AND ACCESS TO WATER',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'sectionID' => 'MNHV1SEC8',
                'blockID' => 'MNHV1SEC8BLK3',
                'dependencyID' => '',
                'name' => 'INDICATE THE AVAILABILITY AND STORAGE, SUPPLIER AND SOURCE OF THE FOLLOWING',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'sectionID' => 'MNHV1SEC8',
                'blockID' => 'MNHV1SEC8BLK4',
                'dependencyID' => '',
                'name' => 'PROVISION  FOR WASTE DISPOSAL',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'sectionID' => 'MNHV1SEC9',
                'blockID' => 'MNHV1SEC9BLK1',
                'dependencyID' => '',
                'name' => 'COMMUNITY STRATEGY',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'sectionID' => 'MNHV2SEC1',
                'blockID' => 'MNHV2SEC1BLK1',
                'dependencyID' => '',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'sectionID' => 'MNHV2SEC1',
                'blockID' => 'MNHV2SEC1BLK2',
                'dependencyID' => '',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'sectionID' => 'MNHV2SEC1',
                'blockID' => 'MNHV2SEC1BLK3',
                'dependencyID' => '',
                'name' => 'PROVISION OF SERVICES',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'sectionID' => 'MNHV2SEC1',
                'blockID' => 'MNHV2SEC1BLK4',
                'dependencyID' => '',
                'name' => 'Health Facility Management',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'sectionID' => 'MNHV2SEC2',
                'blockID' => 'MNHV2SEC2BLK1',
                'dependencyID' => '',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'sectionID' => 'MNHV2SEC2',
                'blockID' => 'MNHV2SEC2BLK2',
                'dependencyID' => '',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'sectionID' => 'MNHV2SEC2',
                'blockID' => 'MNHV2SEC2BLK3',
                'dependencyID' => '',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'sectionID' => 'MNHV2SEC2',
                'blockID' => 'MNHV2SEC2BLK4',
                'dependencyID' => '',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'sectionID' => 'MNHV2SEC2',
                'blockID' => 'MNHV2SEC2BLK5',
                'dependencyID' => '',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'sectionID' => 'MNHV2SEC2',
                'blockID' => 'MNHV2SEC2BLK6',
                'dependencyID' => '',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'sectionID' => 'MNHV2SEC2',
                'blockID' => 'MNHV2SEC2BLK7',
                'dependencyID' => '',
                'name' => '',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'sectionID' => 'MNHV2SEC3',
                'blockID' => 'MNHV2SEC3BLK1',
                'dependencyID' => '',
                'name' => 'GUIDELINES AVAILABILITY',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'sectionID' => 'MNHV2SEC3',
                'blockID' => 'MNHV2SEC3BLK2',
                'dependencyID' => '',
                'name' => 'JOB AIDS AVAILABILITY',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'sectionID' => 'MNHV2SEC3',
                'blockID' => 'MNHV2SEC3BLK3',
                'dependencyID' => '',
                'name' => 'TOOLS AVAILABILITY',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'sectionID' => 'MNHV2SEC4',
                'blockID' => 'MNHV2SEC4BLK1',
                'dependencyID' => '',
                'name' => 'HOW MANY STAFF MEMBERS HAVE BEEN TRAINED IN THE FOLLOWING?',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'sectionID' => 'MNHV2SEC5',
                'blockID' => 'MNHV2SEC5BLK1',
                'dependencyID' => '',
                'name' => 'MAIN SUPPLIER',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'sectionID' => 'MNHV2SEC5',
                'blockID' => 'MNHV2SEC5BLK2',
                'dependencyID' => '',
                'name' => 'INDICATE THE AVAILABILITY, MAIN REASON FOR UNAVAILABILITY, DURATION OF UNAVAILABILITY & WHAT HAPPENED WHEN THE COMMODITY WAS NOT AVAILABLE',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'sectionID' => 'MNHV2SEC6',
                'blockID' => 'MNHV2SEC6BLK1',
                'dependencyID' => '',
                'name' => 'Equipment Availability',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'sectionID' => 'MNHV2SEC6',
                'blockID' => 'MNHV2SEC6BLK2',
                'dependencyID' => '',
                'name' => 'Testing Supplies',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'sectionID' => 'MNHV2SEC6',
                'blockID' => 'MNHV2SEC6BLK3',
                'dependencyID' => '',
                'name' => 'Delivery Kit Components',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'sectionID' => 'MNHV2SEC6',
                'blockID' => 'MNHV2SEC6BLK4',
                'dependencyID' => '',
                'name' => 'MAIN SUPPLIER',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'sectionID' => 'MNHV2SEC6',
                'blockID' => 'MNHV2SEC6BLK5',
                'dependencyID' => '',
                'name' => 'INDICATE THE AVAILABILITY AND MAIN REASON FOR UNAVAILABILITY FOR THE FOLLOWING KITS/SETS',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'sectionID' => 'MNHV2SEC7',
                'blockID' => 'MNHV2SEC7BLK1',
                'dependencyID' => '',
                'name' => 'INDICATE THE AVAILABILITY AND LOCATION OF THE FOLLOWING RESOURCES',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'sectionID' => 'MNHV2SEC7',
                'blockID' => 'MNHV2SEC7BLK2',
                'dependencyID' => '',
                'name' => 'INDICATE THE STORAGE AND ACCESS TO WATER',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'sectionID' => 'MNHV2SEC7',
                'blockID' => 'MNHV2SEC7BLK3',
                'dependencyID' => '',
                'name' => 'INDICATE THE AVAILABILITY AND STORAGE, SUPPLIER AND SOURCE OF THE FOLLOWING',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'sectionID' => 'MNHV2SEC7',
                'blockID' => 'MNHV2SEC7BLK4',
                'dependencyID' => '',
                'name' => 'PROVISION  FOR WASTE DISPOSAL',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'sectionID' => 'MNHV2SEC8',
                'blockID' => 'MNHV2SEC8BLK1',
                'dependencyID' => '',
                'name' => 'COMMUNITY STRATEGY',
                'created_at' => '2016-03-04 08:55:17',
                'updated_at' => '2016-03-04 08:55:17',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
