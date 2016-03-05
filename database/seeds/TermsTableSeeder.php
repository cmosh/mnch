<?php

use Illuminate\Database\Seeder;

class TermsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Terms')->delete();
        
        \DB::table('Terms')->insert(array (
            0 => 
            array (
                'TermId' => 1,
                'Term' => 'Baseline',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'TermId' => 2,
                'Term' => 'Midterm',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'TermId' => 3,
                'Term' => 'Endterm',
                'created_at' => '2016-03-04 08:55:20',
                'updated_at' => '0000-00-00 00:00:00',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
