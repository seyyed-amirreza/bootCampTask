<?php
    include("class.php");
    $mahsool = new Mahsool($_POST["name"],$_POST["price"],$_POST["quantity"],$_POST["producer"]);
    echo $mahsool->getName()."<br>";
    echo $mahsool->getPrice()."<br>";
    echo $mahsool->getQuantity()."<br>";
    echo $mahsool->getProducer()."<br>";
?>