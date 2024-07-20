<?php
include_once("../Models/dataBase.php");
include_once("../Models/Product.php");
$product = new Product("localhost","pma","","mydatab",$_POST["name"],$_POST["price"],$_POST["quantity"],$_POST["producer"]);
$id = $product->Insert($_POST["name"],$_POST["price"],$_POST["quantity"],$_POST["producer"]);
?>