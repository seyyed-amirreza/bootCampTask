<?php
    include_once("dataBase.php");
    class Product extends ConnectToDB
    {
        private $name;
        private $price;
        private $quantity;
        private $producer;

        function __construct($servername,$username,$password,$dbname,$name,$price,$quantity,$producer){
            $this->name=$name;
            $this->price=$price;
            $this->quantity=$quantity;
            $this->producer=$producer;
            $this->servername = $servername;
            $this->username = $username;
            $this->password = $password;
            $this->dbname = $dbname;
        }
        function getName(){
            return $this->name;
        }
        function getPrice(){
            return $this->price;
        }
        function getQuantity(){
            return $this->quantity;
        }
        function getProducer(){
            return $this->producer;
        }
        //درج 
        function Insert($name,$price,$quantity,$producer){
            $this->connect2DB();
            $product = R::dispense('product');
            $product['name'] = $name;
            $product['price'] = $price;
            $product['quantity'] = $quantity;
            $product['producer'] = $producer;
            $id = R::store($product);
            $this->closeDB();
            return $id;
        }
        //لود کردن یک ریکورد
        function Load($id){
            $this->connect2DB();
            $product = R::load('product', $id);
            return $product;
        }
        //بروزرسانی
        function Update($id,$col,$val){
            $this->connect2DB();
            $product = $this->Load($id);
            switch($col){
                case $col == 'name':
                    $product['name'] = $val;
                    $id = R::store($product);
                    break;
                case $col == 'price':
                    $product['price'] = $val;
                    $id = R::store($product);
                    break;
                case $col == 'quantity':
                    $product['quantity'] = $val;
                    $id = R::store($product);
                    break;
                case $col == 'producer':
                    $product['producer'] = $val;
                    $id = R::store($product);
                    break;
            }
        }
        //حذف
        function Delete($id){
            $this->connect2DB();
            $product = $this->Load($id);
            R::trash($product);
        }
    }
?>