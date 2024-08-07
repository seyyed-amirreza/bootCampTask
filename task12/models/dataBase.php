<?php
    namespace models;
    class dataBase{
        protected function connect2DB(){
            $connection = R::setup("mysql:host=localhost;dbname=mydatab", "root", "");
        }
        protected function closeDB(){
            R::close();
        }
    }
?>
