<?php
class MainPageController {

    function __construct() {
       
    }
    public function RedirectToMainPage()
    {
        Views::getInstance()->render('mainPage');
    }
}
