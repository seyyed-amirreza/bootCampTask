<?php
    namespace models;
    class product extends dataBase
    {
        private $name;
        private $price;
        private $quantity;
        private $producer;

        function __construct($name,$price,$quantity,$producer){
            $this->name=$name;
            $this->price=$price;
            $this->quantity=$quantity;
            $this->producer=$producer;
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
        //باز کردن دیتا بیس
        function OpenConnection(){
            $this->connect2DB();
        }
        //بستن دیتا بیس
        function CloseConnection(){
            $this->closeDB();
        }
        //درج 
        function Insert($name,$price,$quantity,$producer){
            $product = R::dispense('product');
            $product['name'] = $name;
            $product['price'] = $price;
            $product['quantity'] = $quantity;
            $product['producer'] = $producer;
            $id = R::store($product);
            return $id;
        }
        //لود کردن یک ریکورد
        function Load($id){
            $product = R::load('product', $id);
            return $product;
        }
        //بروزرسانی
        function Update($id,$col,$val){
            // $this->connect2DB();
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
            // $this->closeDB();
        }
        //حذف
        function Delete($id){
            $this->connect2DB();
            $product = $this->Load($id);
            R::trash($product);
        }
    }
?>