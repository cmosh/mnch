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
				array_unshift($clist,'cd ~/'.env("LOCAL_FOLDER").'/mnch');

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

		public static function environmentG($clist,$envs){

		switch ($envs) {
			
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



	public static function thelist($theip)
	{
		
		$theport = env('APP_REDISMANAGE');
		 $theurl = str_replace(env('APP_PORT'), '', str_replace("http://",'',url('')));
		 $thefile = $theurl.':'.$theport;
		 $thefolder = env('LOCAL_FOLDER');

				 $thelist=array('shutdown'=>array('sudo php artisan down','echo "adminip=\"'.$theip.'\"" >> .env'),
							'optimise'=>array('php artisan optimize'),
							'clearcache'=>array('php artisan cache:clear'),
							'clearresets'=>array('php artisan auth:clear-resets'),
							'cacheconfig'=>array('php artisan config:cache'),
							'clearconfig'=>array('php artisan config:clear'),
							'routecache'=>array('php artisan route:cache'),
							'routeclear'=>array('php artisan route:clear'),
							'MemcachedFlush'=>array('sudo service memcached restart'),
							'shutup'=>array('sudo php artisan up','grep -v "adminip=" .env > .envtemp; mv .envtemp .env'),
							'composerupdate'=>array('sudo composer update'),
							'composerinstall'=>array('sudo composer install'),
							'localrootfolder'=>array('sudo chown -R :www-data /home/vagrant/'.$thefolder.'/mnch','ls -ld /home/vagrant/'.$thefolder.'/mnch'),
							'localstorage'=>array('sudo chmod -R 775 /home/vagrant/'.$thefolder.'/mnch/storage','ls -ld /home/vagrant/'.$thefolder.'/mnch/storage'),
							'localuploads'=>array('sudo chmod -R 775 /home/vagrant/'.$thefolder.'/mnch/public/uploads','ls -ld /home/vagrant/'.$thefolder.'/mnch/public/uploads'),
							'localmemcache'=>array('cd /home/vagrant/'.$thefolder.'/mnch/public/cache','sudo chmod +rx *','sudo chmod 0777 Config/Memcache.php','sudo chmod 0777 Temp/','ls -ld /home/vagrant/'.$thefolder.'/mnch/public/cache'),
							'localredmin'=>array('sudo chmod -R 775 /home/vagrant/'.$thefolder.'/mnch/public/phpredmin','ls -ld /home/vagrant/'.$thefolder.'/mnch/public/phpredmin'),
							'localmysqldump'=>array(''),
							'localredis'=>array('sudo cp redis /etc/nginx/sites-available/redis',"sudo sed -i 's/listenporthhh/".$theport."/g' /etc/nginx/sites-available/redis","sudo sed -i 's/broadurlhhh/".$theurl."/g' /etc/nginx/sites-available/redis","sudo sed -i 's/LOCAL_FOLDER/".$thefolder."/g' /etc/nginx/sites-available/redis",'sudo mv /etc/nginx/sites-available/redis /etc/nginx/sites-available/redislocal','sudo nginx_ensite redislocal','sudo service nginx reload'),
							'localredisremove'=>array('sudo nginx_dissite redislocal','sudo service nginx reload'),
							'localredisreset'=>array('sudo nginx_ensite redislocal','sudo service nginx reload'),
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
							'testredis'=>array('sudo cp redisU /etc/nginx/sites-available/redis',"sudo sed -i 's/listenporthhh/".$theport."/g' /etc/nginx/sites-available/redis","sudo sed -i 's/livetestr/mnch_bak/g' /etc/nginx/sites-available/redis",'sudo mv /etc/nginx/sites-available/redis /etc/nginx/sites-available/redistest','sudo nginx_ensite redistest','sudo service nginx reload'),
							'testredisremove'=>array('sudo nginx_dissite redistest','sudo service nginx reload'),
							'testredisreset'=>array('sudo nginx_ensite redistest','sudo service nginx reload'),
							'testcron'=>array('cd /var/www/mnch_bak/public/phpredmin/public','sudo php index.php cron/index'),
							'liverootfolder'=>array('sudo chown -R :www-data /var/www/mnch','ls -ld /var/www/mnch'),
							'livestorage'=>array('sudo chmod -R 775 /var/www/mnch/storage','ls -ld /var/www/mnch/storage'),
							'liveuploads'=>array('sudo chmod -R 775 /var/www/mnch/public/uploads','ls -ld /var/www/mnch/public/uploads'),
							'livememcache'=>array('cd /var/www/mnch/public/cache','sudo chmod +rx *','sudo chmod 0777 Config/Memcache.php','sudo chmod 0777 Temp/','ls -ld /var/www/mnch/public/cache'),
							'liveredmin'=>array('sudo chmod -R 775 /var/www/mnch/public/phpredmin','ls -ld /var/www/mnch/public/phpredmin'),
							'liveupdate'=>array('git pull','git merge --commit --no-edit origin/test','git push -u origin live'),
							'livereset'=>array('git reset --hard origin/live'),
							'livebranch'=>array('git rev-parse --abbrev-ref HEAD'),
							'livepush'=>array('git push -u origin live'),
							'livetestgit'=>array('ssh -T git@github.com'),
							'livemysqldump'=>array(''),
							'livendown'=>array('sudo nginx_dissite live','sudo service nginx reload'),
							'livenup'=>array('sudo nginx_ensite live','sudo service nginx reload'),
							'livecron'=>array('cd /var/www/mnch/public/phpredmin/public','sudo php index.php cron/index'),
							'liveredis'=>array('sudo cp redisU /etc/nginx/sites-available/redis',"sudo sed -i 's/listenporthhh/".$theport."/g' /etc/nginx/sites-available/redis","sudo sed -i 's/livetestr/mnch/g' /etc/nginx/sites-available/redis",'sudo mv /etc/nginx/sites-available/redis /etc/nginx/sites-available/redislive','sudo nginx_ensite redislive','sudo service nginx reload'),
							'liveredisremove'=>array('sudo nginx_dissite redislive','sudo service nginx reload'),
							'liveredisreset'=>array('sudo nginx_ensite redislive','sudo service nginx reload'),
							'nginxreload'=>array('sudo service nginx reload'),
							'nginxrestart'=>array('sudo service nginx restart'),
							'nginxtools'=>array('cd ~/','git clone https://github.com/perusio/nginx_ensite.git','cd nginx_ensite','sudo make install')

							
			);

return $thelist;
		
		
	}


	



}
