<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		
	    $this->call('BlocksTableSeeder');
        $this->call('BlockRowsTableSeeder');
        $this->call('SectionsTableSeeder');
        $this->call('SurveysTableSeeder');
        $this->call('FieldsTableSeeder');
        $this->call('ColumnSetsTableSeeder');
        $this->call('FacilitiesTableSeeder');
        $this->call('FacilityGroupsTableSeeder');
        $this->call('FacilityOwnersTableSeeder');
        $this->call('FieldSetsTableSeeder');
        $this->call('ParticipantsTableSeeder');
        $this->call('CountiesTableSeeder');      
        $this->call('TermsTableSeeder');
    }

}
