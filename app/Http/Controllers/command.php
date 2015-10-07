<?php namespace App\Http\Controllers;



class command  {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public static function ssh_connection(){

		switch (env('APP_ENV')) {
			case 'local':
				return 'local_homestead';

				break;
			case 'test':
				return 'SiteGuban';

				break;
			case 'live':
				return 'SiteGuban';
				# code...
				break;
			default:
				# code...
				break;
		}



	}


	public static function environment($clist){

		switch (env('APP_ENV')) {
			case 'local':
				array_unshift($clist,'cd ~/php/mnch');

				break;
			case 'test':
				array_unshift($clist,'cd ~/mnch_bak');

				break;
			case 'live':
				array_unshift($clist,'cd ~/mnch');
				# code...
				break;
			default:
				# code...
				break;
		}


		

		return $clist;

	}
	public static function thelist()
	{



				 $thelist=array('shutdown'=>array('php artisan down'),
							'optimise'=>array('php artisan optimize'),
							'clearcache'=>array('php artisan cache:clear'),
							'clearresets'=>array('php artisan auth:clear-resets'),
							'cacheconfig'=>array('php artisan config:cache'),
							'clearconfig'=>array('php artisan config:clear'),
							'routecache'=>array('php artisan route:cache'),
							'routeclear'=>array('php artisan route:clear'),
							'rootfolder'=>array(''),
							'localstorage'=>array(''),
							'localuploads'=>array(''),
							'localmemcache'=>array(''),
							'localredmin'=>array(''),
							'localupdate'=>array(''),
							'localreset'=>array(''),
							'localbranch'=>array(''),
							'localpush'=>array(''),
							'localtestgit'=>array(''),
							'localmysqldump'=>array(''),
							'testrootfolder'=>array(''),
							'teststorage'=>array(''),
							'testuploads'=>array(''),
							'testmemcache'=>array(''),
							'testredmin'=>array(''),
							'testupdate'=>array(''),
							'testreset'=>array(''),
							'testbranch'=>array(''),
							'testpush'=>array(''),
							'testgit'=>array(''),
							'testmysqldump'=>array(''),
							'liverootfolder'=>array(''),
							'livestorage'=>array(''),
							'liveuploads'=>array(''),
							'livememcache'=>array(''),
							'liveredmin'=>array(''),
							'liveupdate'=>array(''),
							'livereset'=>array(''),
							'livebranch'=>array(''),
							'livepush'=>array(''),
							'livetestgit'=>array(''),
							'livemysqldump'=>array('')

							
			);

return $thelist;
		
		
	}


	



}
