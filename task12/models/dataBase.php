<?php
    namespace models;
    use RedBeanPHP as O;
    class dataBase{
        protected function connect2DB(){
            $connection = O\R::setup("mysql:host=localhost;dbname=mydatab", "root", "");
        }
        protected function closeDB(){
            O\R::close();
        }
    }
?>
