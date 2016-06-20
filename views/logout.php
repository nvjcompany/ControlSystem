<?php
session_destroy();
$URL = Config::getInstance()->GetSiteURL();
Views::getInstance()->render('homePage');