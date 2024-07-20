<?php
include_once("../Models/dataBase.php");
include_once("../Models/Product.php");
$product = new Product("localhost","root","","mydatab",$_POST["name"],$_POST["price"],$_POST["quantity"],$_POST["producer"]);
$name = $product->getName();
$price = $product->getPrice();
$quantity = $product->getQuantity();
$producer = $product->getProducer();
$product->Insert($_POST["name"],$_POST["price"],$_POST["quantity"],$_POST["producer"]);
$temp = $producer->Select("product","*");
$producer->showTable($temp);
?>