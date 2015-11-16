<?php
if ( ! function_exists('is_admin_ip'))
{
    /**
     * Checks whether an IP address exists in a given array of IP addresses
     *
     * @return boolean
     */
    function is_admin_ip($ip)
    {
        $allowedIps = Config::get('maintenance.allowed_ips');
        foreach ($allowedIps as $allowedIp) 
        {
            if (strpos($allowedIp, '*')) 
            {
                $range = [ 
                    str_replace('*', '0', $allowedIp),
                    str_replace('*', '255', $allowedIp)
                ];
                if(ip_exists_in_range($range, $ip)) return true;
            } 
            else if(strpos($allowedIp, '-'))
            {
                $range = explode('-', str_replace(' ', '', $allowedIp));
                if(ip_exists_in_range($range, $ip)) return true;
            }
            else 
            {
                if (ip2long($allowedIp) === ip2long($ip)) return true;
            }
        }
        return false;
    }
}
if ( ! function_exists('ip_exists_in_range'))
{
    /**
     * Checks whether an IP address exists within a range of IP addresses
     *
     * @return boolean
     */
    function ip_exists_in_range(array $range, $ip)
    {
        if (ip2long($ip) >= ip2long($range[0]) && ip2long($ip) <= ip2long($range[1])) 
        {
            return true;
        }
        return false;
    }
}