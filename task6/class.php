<?php
    class Mahsool
    {
        public $name;
        public $price;
        public $quantity;
        public $producer;

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
            return $this->pricer;
        }
        function getQuantity(){
            return $this->quantity;
        }
        function getProducer(){
            return $this->producer;
        }
    }
?>