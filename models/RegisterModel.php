<?php
class RegisterModel extends BaseModel {
    public function RegisterNewUser($username, $password, $userType, $firstName, $middleName, $lastName)
    {
        $con = $this->dbConnection->query("INSERT INTO `users` (`username`, `password`, `userType`, `firstName`, `middleName`, `lastName`) VALUES ('$username', '$password', '$userType', '$firstName', '$middleName', '$lastName')");
        if(!$con)
        {
            die("Something went wrong contact administrator");
        }
        else
        {
            return true;
        }
    }
}