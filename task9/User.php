<?php
    class User
    {
        private $userName;
        private $password;
        private $email;

        function __construct($userName,$password,$email){
            $this->userName = $userName;
            $this->password = $password;
            $this->email = $email;
        }
        function getUserName(){
            return $this->userName;
        }
        function getPassword(){
            return $this->password;
        }
        function getEmail(){
            return $this->email;
        }
    }
?>