<?php
session_start();
require_once './system/BaseModel.php';
require_once './system/View.php';
require_once './system/Config.php';
class App {

    private static $instance = null;
    public $siteURL ='http://localhost/ControlSystem/';
    function __construct() {
        foreach (glob("./controllers/*.php") as $filename)
        {
            require $filename;
        }
        foreach (glob("./models/*.php") as $filename)
        {
            require $filename;
        }
    }
    
}
