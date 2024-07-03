<?php
    class Product
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
    }
?>