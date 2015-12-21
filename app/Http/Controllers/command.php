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
			case 'production':
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
				array_unshift($clist,'cd ~/'.env("LOCAL_FOLDER").'/mnch');

				break;
			case 'test':
				array_unshift($clist,'cd ~/mnch_bak');

				break;
			case 'production':
				array_unshift($clist,'cd ~/mnch');
				# code...
				break;
			default:
				# code...
				break;
		}


		return $clist;
	}

		public static function environmentG($clist,$envs){

		switch ($envs) {
			
			case 'test':
				array_unshift($clist,'cd ~/mnch_bak');

				break;

			case 'production':
				array_unshift($clist,'cd ~/mnch');
				# code...
				break;

			default:
				# code...
				break;
		}



		

		return $clist;

	}



	public static function thelist($theip)
	{
		
		$theport = env('APP_REDISMANAGE');
		 $theurl = str_replace(env('APP_PORT'), '', str_replace("http://",'',url('')));
		 $thefile = $theurl.':'.$theport;
		 $thefolder = env('LOCAL_FOLDER');

				 $thelist=array('eip'=>array('sudo grep -v "adminip=\"'.$theip.'\"" .env > .envtemp; sudo mv .envtemp .env','sudo echo "adminip=\"'.$theip.'\"" >> .env'),
				 			'dip'=>array('sudo grep -v "adminip=\"'.$theip.'\"" .env > .envtemp; sudo mv .envtemp .env'),
				 			'shutdown'=>array('php artisan down','sudo grep -v "adminip=" .env > .envtemp; sudo mv .envtemp .env','sudo echo "adminip=\"'.$theip.'\"" >> .env','sudo echo Please remeber to turn off maintainence mode when finished if not in a home network.'),
							'optimise'=>array('php artisan optimize'),
							'clearcache'=>array('php artisan cache:clear'),
							'clearresets'=>array('php artisan auth:clear-resets'),
							'cacheconfig'=>array('php artisan config:cache'),
							'clearconfig'=>array('php artisan config:clear'),
							'routecache'=>array('php artisan route:cache'),
							'routeclear'=>array('php artisan route:clear'),
							'MemcachedFlush'=>array('sudo service memcached restart'),
							'shutup'=>array('php artisan up','sudo grep -v "adminip=" .env > .envtemp; sudo mv .envtemp .env'),
							'composerupdate'=>array('sudo composer update'),
							'composerinstall'=>array('sudo composer install'),
							'localrootfolder'=>array('sudo chown -R :www-data /home/vagrant/'.$thefolder.'/mnch','ls -ld /home/vagrant/'.$thefolder.'/mnch'),
							'localstorage'=>array('sudo chmod -R 775 /home/vagrant/'.$thefolder.'/mnch/storage','ls -ld /home/vagrant/'.$thefolder.'/mnch/storage'),
							'localuploads'=>array('sudo chmod -R 775 /home/vagrant/'.$thefolder.'/mnch/public/uploads','ls -ld /home/vagrant/'.$thefolder.'/mnch/public/uploads'),
							'localmemcache'=>array('cd /home/vagrant/'.$thefolder.'/mnch/public/cache','sudo chmod +rx *','sudo chmod 0777 Config/Memcache.php','sudo chmod 0777 Temp/','ls -ld /home/vagrant/'.$thefolder.'/mnch/public/cache'),
							'localredmin'=>array('sudo chmod -R 775 /home/vagrant/'.$thefolder.'/mnch/public/phpredmin','ls -ld /home/vagrant/'.$thefolder.'/mnch/public/phpredmin'),
							'localmysqldump'=>array(''),
							'localcron'=>array('cd /home/vagrant/'.$thefolder.'/mnch/public/phpredmin/public && sudo php index.php cron/index'),
							'localndown'=>array('sudo nginx_dissite '.$theurl,'sudo service nginx reload'),
							'localnup'=>array('sudo nginx_ensite '.$theurl,'sudo service nginx reload'),
							'testrootfolder'=>array('sudo chown -R :www-data /var/www/mnch_bak','ls -ld /var/www/mnch_bak'),
							'teststorage'=>array('sudo chmod -R 775 /var/www/mnch_bak/storage','ls -ld /var/www/mnch_bak/storage'),
							'testuploads'=>array('sudo chmod -R 775 /var/www/mnch_bak/public/uploads','ls -ld /var/www/mnch_bak/public/uploads'),
							'testmemcache'=>array('cd /var/www/mnch_bak/public/cache','sudo chmod +rx *','sudo chmod 0777 Config/Memcache.php','sudo chmod 0777 Temp/','ls -ld /var/www/mnch_bak/public/cache'),
							'testredmin'=>array('sudo chmod -R 775 /var/www/mnch_bak/public/phpredmin','ls -ld /var/www/mnch_bak/public/phpredmin'),
							'testupdate'=>array('git pull','git merge --commit --no-edit origin/master','git push -u origin test'),
							'testreset'=>array('git reset --hard origin/test'),
							'testbranch'=>array('git rev-parse --abbrev-ref HEAD'),
							'testpush'=>array('git push -u origin test'),
							'testtestgit'=>array('ssh -T git@github.com'),
							'testndown'=>array('sudo nginx_dissite test','sudo service nginx reload'),
							'testnup'=>array('sudo nginx_ensite test','sudo service nginx reload'),
							'testmysqldump'=>array(''),
							'testcron'=>array('cd /var/www/mnch_bak/public/phpredmin/public','sudo php index.php cron/index'),
							'productionrootfolder'=>array('sudo chown -R :www-data /var/www/mnch','ls -ld /var/www/mnch'),
							'productionstorage'=>array('sudo chmod -R 775 /var/www/mnch/storage','ls -ld /var/www/mnch/storage'),
							'productionuploads'=>array('sudo chmod -R 775 /var/www/mnch/public/uploads','ls -ld /var/www/mnch/public/uploads'),
							'productionmemcache'=>array('cd /var/www/mnch/public/cache','sudo chmod +rx *','sudo chmod 0777 Config/Memcache.php','sudo chmod 0777 Temp/','ls -ld /var/www/mnch/public/cache'),
							'productionredmin'=>array('sudo chmod -R 775 /var/www/mnch/public/phpredmin','ls -ld /var/www/mnch/public/phpredmin'),
							'productionupdate'=>array('git pull','git merge --commit --no-edit origin/test','git push -u origin live'),
							'productionreset'=>array('git reset --hard origin/live'),
							'productionbranch'=>array('git rev-parse --abbrev-ref HEAD'),
							'productionpush'=>array('git push -u origin live'),
							'productiontestgit'=>array('ssh -T git@github.com'),
							'productionmysqldump'=>array(''),
							'productionndown'=>array('sudo nginx_dissite live','sudo service nginx reload'),
							'productionnup'=>array('sudo nginx_ensite live','sudo service nginx reload'),
							'productioncron'=>array('cd /var/www/mnch/public/phpredmin/public','sudo php index.php cron/index'),
							'redisremove'=>array('sudo nginx_dissite redis','sudo service nginx reload'),
							'redisreset'=>array('sudo nginx_ensite redis','sudo service nginx reload'),
							'nginxreload'=>array('sudo service nginx reload'),
							'nginxrestart'=>array('sudo service nginx restart'),
							'nginxtools'=>array('cd ~/','git clone https://github.com/perusio/nginx_ensite.git','cd nginx_ensite','sudo make install')

							
			);

return $thelist;
		
		
	}


	



}
