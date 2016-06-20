<?php
class RegisterController {

    public function RegisterUser()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST' && $_SESSION['userType']==1)
        {
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);
            $firstName = htmlspecialchars($_POST['firstName']);
            $middleName = htmlspecialchars($_POST['middleName']);
            $lastName = htmlspecialchars($_POST['lastName']);
            $userType = $_POST['userType'];
            $registerModel = new RegisterModel();
            $result = $registerModel->RegisterNewUser($username, $password, $userType, $firstName, $middleName, $lastName);
            if($result)
            {
                $data['succes']=array('Succesfully registered!');
                Views::getInstance()->render('register',$data);
            }
        }
        else
        {
            Views::getInstance()->render('register');
        }
    }

}
