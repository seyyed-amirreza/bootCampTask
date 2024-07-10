<?php
include("dataBase.php");
include("Product.php");
include("User.php");
$product = new Product($_POST["name"],$_POST["price"],$_POST["quantity"],$_POST["producer"]);
$name = $product->getName();
$price = $product->getPrice();
$quantity = $product->getQuantity();
$producer = $product->getProducer();
$product -> insertToDataBase("product",$name,$price,$quantity,$producer);
$product->fetchAll("product");
$product -> fetchOneByName("product","VOLVO");
$product -> fetchOneByProducer("product","BMW");
?>