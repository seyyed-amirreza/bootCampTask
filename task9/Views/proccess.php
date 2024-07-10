<?php
include_once("../Models/dataBase.php");
include_once("../Models/Product.php");
include("../Models/User.php");
$product = new Product("localhost","pma","","mydatab",$_POST["name"],$_POST["price"],$_POST["quantity"],$_POST["producer"]);
$name = $product->getName();
$price = $product->getPrice();
$quantity = $product->getQuantity();
$producer = $product->getProducer();
$temp = $producer->Select("product","*");
$producer = $producer->showTable($temp);
?>