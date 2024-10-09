<?php
    namespace models;
    use RedBeanPHP as RedBean;
    class user extends dataBase{
        private $userName;
        private $password;
        private $logInTime;
        private $logOutTime;
        function __construct($userName,$password,$logInTime,$logOutTime){
            $this->userName = $userName;
            $this->password = $password;
            $this->logInTime = $logInTime;
            $this->logOutTime = $logOutTime;
            $this->connect2DB();
        }
        function __destruct(){
            $this->closeDB();
        }
        function Register(){
            $user = R::dispense('user');
            $user['userName'] = $this->userName;
            $user['password'] = $this->password;
            $user['logInTime'] = $this->logInTime;
            $user['logOutTime'] = $this->logOutTime;
            $id = RedBean\R::store($user);
            return $id;
        }
        function LogIn(){

        }
    }
?>