<?php

class LoginController {
    public function Login()
    {
     
            $loginModel = new LoginModel();
            $isLoginSucceed = $loginModel->CheckLoginDetails();
            if($isLoginSucceed)
            {
                Views::getInstance()->render('mainPage');
            }
            else {
                $userData['errorMessage'] = 'error';
                Views::getInstance()->render('homePage',$userData);
            }
       
    }
}
