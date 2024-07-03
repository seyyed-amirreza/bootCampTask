<?php
include("dataBase.php");
include("Product.php");
include("User.php");
$product = new Product($_POST["name"],$_POST["price"],$_POST["quantity"],$_POST["producer"]);
$db = new DataBaseFunctions("localhost","pma","","mydatab");
$name = $product->getName();
$price = $product->getPrice();
$quantity = $product->getQuantity();
$producer = $product->getProducer();
$db -> insertToDataBase("product",$name,$price,$quantity,$producer);
$db->fetchAll("product");
$db -> fetchOneByName("product","VOLVO");
$db -> fetchOneByProducer("product","BMW");
?>