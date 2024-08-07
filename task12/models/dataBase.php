<?php
    namespace App\dataBase;
    // include_once("../Models/orm/RedBeanPHP.php");
    class ConnectToDB{
        protected function connect2DB(){
            $connection = R::setup("mysql:host=localhost;dbname=mydatab", "root", "");
        }
        protected function closeDB(){
            R::close();
        }
    }
?>
