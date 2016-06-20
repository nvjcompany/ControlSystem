<?php
class BaseModel {
    private static $connection=null;
    protected $dbConnection = null;
    
    function __construct() {
        if(self::$connection==null)
        {
            self::$connection = new mysqli('localhost','root','','controlsystem');
            if(self::$connection->connect_error)
            {
                die("Database connection error!");
            }
            self::$connection->set_charset("utf8");
        }
        $this->dbConnection = self::$connection;
    }

}

