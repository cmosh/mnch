<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
           0 => 
            array (
                'id' => 1,
                'name' => 'Clive Makamara',
                'email' => 'cmosh@live.com',
                'password' => '$2y$10$3wc96VTjfoGyo1lGJN0gHus80634I1AY9E2kcdsaxIddKJGO3nDVS',
                'remember_token' => 'kWeM5WinsuqsVY9Zc205XXJjz27RU584CV7my2P3fQYNjNm5b4pdPhGtek9E',
                'created_at' => '2015-07-14 11:38:59',
                'updated_at' => '2015-12-23 22:00:56',
                'county' => NULL,
                'PhoneNumber' => '',
                'IDNumber' => NULL,
                'role' => 4,
                'status' => 1,
            ),
        ));
        
        
    }
}
