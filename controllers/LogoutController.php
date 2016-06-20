<?php
class LogoutController {

    function __construct() {
        session_destroy();
        Views::getInstance()->render('homePage');
    }
}

