<?php
final class app
{
    protected static $_instance = null;

    protected $_data = array();

    protected function __construct()
    {
        $this->_data['config']  = include_once(__DIR__.'/../config.php');
        $this->_data['drivers'] = __DIR__.'/drivers/';
    }

    public static function instance()
    {
        if (!self::$_instance) {
            self::$_instance = new self;
        }

        return self::$_instance;
    }

    public function __get($key)
    {
        return isset($this->_data[$key]) ? $this->_data[$key] : null;
    }
    
    public function __set($key, $value)
    {
        $this->_data[$key] = $value;
    }
}
