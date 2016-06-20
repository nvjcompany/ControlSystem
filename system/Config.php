<?php
class Config {
    public $siteURL = 'http://localhost/ControlSystem/';
    public static $instance= null;
    public function GetSiteURL()
    {
        return $this->siteURL;
    }
    public static function getInstance()
    {
        if(self::$instance ==null)
        {
            self::$instance= new Config();
        }
        return self::$instance;
    }
}
