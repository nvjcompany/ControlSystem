<?php
require 'app/App.php';
$app = new App();
$siteURI=array('homePage',);
if($_GET && $_GET['url'])
{
    $siteURI=explode('/',$_GET['url']);
}
switch($siteURI[0])
{
    case 'homePage':
        if(isset($_SESSION['userType']) && isset($_SESSION['username']))
        {
            $mainPageController = new MainPageController();
            $mainPageController->RedirectToMainPage();
        }
        else if($_POST && $_POST['username'] && $_POST['password'])
        {
            $loginController = new LoginController();
            $loginController->Login();
        }
        else
        {
            $indexController = new Index();
        }
        break;
    case 'Register':
        if(isset($_SESSION['userType']) && $_SESSION['userType']==1)
        {
            $registerController = new RegisterController();
            $registerController->RegisterUser();
        }
        else {
            die("NO ACCES!");
        }
        break;
    case 'Users' : 
        
        break;
    case 'logout':
        include 'views/logout.php';
    break;
    default:
        echo 'Error!';
        break;
}
?>