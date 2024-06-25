<?php
    class Mahsool
    {
        public $name;
        public $price;
        public $quantity;
        public $producer;

        public function __construct($name,$price,$quantity,$producer){
            $this->name=$name;
            $this->price=$price;
            $this->quantity=$quantity;
            $this->producer=$producer;
        }
        public function getName(){
            return $this->name;
        }
        public function getPrice(){
            return $this->price;
        }
        public function getQuantity(){
            return $this->quantity;
        }
        public function getProducer(){
            return $this->producer;
        }
    }
?>