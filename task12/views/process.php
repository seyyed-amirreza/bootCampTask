<?php
$product = new models\product($_POST["name"],$_POST["price"],$_POST["quantity"],$_POST["producer"]);
$id = $product->Insert();
echo "OK";
?>