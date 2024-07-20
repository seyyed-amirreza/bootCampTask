<?php
    include_once("../Models/orm/rb.php");
    class DataBase{
        protected $servername;
        protected $username;
        protected $password;
        protected $dbname;

        // function __construct($servername,$username,$password,$dbname){
        //     $this->servername = $servername;
        //     $this->username = $username;
        //     $this->password = $password;
        //     $this->dbname = $dbname;
        // }
    }
    class ConnectToDB extends DataBase{
        protected function connect2DB(){
            $connection = R::setup("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
        }
        protected function closeDB(){
            R::close();
        }
    }
?>
