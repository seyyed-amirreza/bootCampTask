<?php
    namespace models;
    use RedBeanPHP as RedBean;
    class dataBase{
        protected function connect2DB(){
            $connection = RedBean\R::setup("mysql:host=localhost;dbname=mydatab", "root", "");
        }
        protected function closeDB(){
            RedBean\R::close();
        }
    }
?>
