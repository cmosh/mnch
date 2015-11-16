<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Routing\Middleware;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

class CheckForMaintenanceMode implements Middleware {

    protected $request;
    protected $app;

    public function __construct(Application $app, Request $request)
    {
        $this->app = $app;
        $this->request = $request;
    }

    public function handle($request, Closure $next)
    {
    	
        if ($this->app->isDownForMaintenance() &&
            ! $this->is_admin_ip($this->request->getClientIp()))
        {
            throw new HttpException(503);
        }

        return $next($request);
    }


    private function is_admin_ip($ip)
    {
        $allowedIps = config('whitelist.admin_ips');
        foreach ($allowedIps as $allowedIp) 
        {
            if (strpos($allowedIp, '*')) 
            {
                $range = [ 
                    str_replace('*', '0', $allowedIp),
                    str_replace('*', '255', $allowedIp)
                ];
                if($this->ip_exists_in_range($range, $ip)) return true;
            } 
            else if(strpos($allowedIp, '-'))
            {
                $range = explode('-', str_replace(' ', '', $allowedIp));
                if($this->ip_exists_in_range($range, $ip)) return true;
            }
            else 
            {
                if (ip2long($allowedIp) === ip2long($ip)) return true;
            }
        }
        return false;
    }



    private function ip_exists_in_range(array $range, $ip)
    {
        if (ip2long($ip) >= ip2long($range[0]) && ip2long($ip) <= ip2long($range[1])) 
        {
            return true;
        }
        return false;
    }


}
