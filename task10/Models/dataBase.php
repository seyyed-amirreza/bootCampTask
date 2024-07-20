<?php
    require("../Models/orm/rb.php");
    class DataBase{
        protected $servername;
        protected $username;
        protected $password;
        protected $dbname;

        function __construct($servername,$username,$password,$dbname){
            $this->servername = $servername;
            $this->username = $username;
            $this->password = $password;
            $this->dbname = $dbname;
        }
    }
    class ConnectToDB extends DataBase{
        protected function connect2DB(){
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            return $conn;
        }
    }
?>
