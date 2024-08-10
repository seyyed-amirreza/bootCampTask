<?php
    namespace models;
    use RedBeanPHP as RedBean;
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
            $this->connect2DB();
        }
        function __destruct(){
            $this->closeDB();
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
        function Insert(){
            $product = RedBean\R::dispense('product');
            $product['name'] = $this->name;
            $product['price'] = $this->price;
            $product['quantity'] = $this->quantity;
            $product['producer'] = $this->producer;
            $id = RedBean\R::store($product);
            return $id;
        }
        //لود کردن یک ریکورد
        function Load($id){
            $product = RedBean\R::load('product', $id);
            return $product;
        }
        //بروزرسانی
        function Update($id,$col,$val){
            $product = $this->Load($id);
            switch($col){
                case $col == 'name':
                    $product['name'] = $val;
                    $id = RedBean\R::store($product);
                    break;
                case $col == 'price':
                    $product['price'] = $val;
                    $id = RedBean\R::store($product);
                    break;
                case $col == 'quantity':
                    $product['quantity'] = $val;
                    $id = RedBean\R::store($product);
                    break;
                case $col == 'producer':
                    $product['producer'] = $val;
                    $id = RedBean\R::store($product);
                    break;
            }
        }
        //حذف
        function Delete($id){
            $this->connect2DB();
            $product = $this->Load($id);
            RedBean\R::trash($product);
        }
    }
?>