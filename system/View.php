<?php
class Views {

    private static $instance = null;
    private $data = array();
    
    function __construct() {
        
    }
    
    public function render($template, $data=array()) {
        if(is_array($data))
        {
            extract($data);
        }
        include './views/' . $template . '.php';
    }
    
    public static function getInstance()
    {
        if(self::$instance ==null)
        {
            self::$instance= new Views();
        }
        return self::$instance;
    }

}