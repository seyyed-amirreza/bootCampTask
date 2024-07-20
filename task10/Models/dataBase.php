<?php
    include_once("../Models/orm/rb.php");
    class ConnectToDB{
        protected function connect2DB(){
            $connection = R::setup("mysql:host=localhost;dbname=mydatab", "root", "");
        }
        protected function closeDB(){
            R::close();
        }
    }
?>
