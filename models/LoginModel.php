<?php
class LoginModel extends BaseModel {
    
    public function CheckLoginDetails()
    {
        $baseClass = new BaseModel();
        if($_POST || $this->NoAcces())
        {
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);
            $result = $baseClass->dbConnection->query("SELECT * FROM users WHERE username='$username' && password='$password'");
            if(mysqli_num_rows($result)>0)
            {
                $userLoginDetails = array();
                while($row = $result->fetch_assoc())
                {
                    $_SESSION['userType'] = $row['userType'];
                    $_SESSION['username'] =$row['username'];
                    $_SESSION['firstName'] = $row['firstName'];
                    $_SESSION['middleName'] = $row['middleName'];
                    $_SESSION['lastName'] = $row['lastName'];
                }
                return true;
            }
            else
            {
                $userLoginDetails = array('emptyArray','error');
                return false; 
            }
        }
    }
    private static function NoAcces()
    {
        $mainPageController = new MainPageController();
        $checkAuth = $mainPageController->checkForLoginData();
        if($checkAuth)
        {
             return true;
        }
        else
        {
            die('<div style="font-size:200px;color:red;text-align:center;font-family:Verdana;">NO ACCES!</div>');
        }
    }
}