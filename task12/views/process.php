<?php
$product = new models\product($_POST["name"],$_POST["price"],$_POST["quantity"],$_POST["producer"]);
$product->OpenConnection();
$id = $product->Insert($_POST["name"],$_POST["price"],$_POST["quantity"],$_POST["producer"]);
$product->CloseConnection();
echo "OK";
//هر عملی که بخوایم با دیتابیس انجام بدیم باید بین دو تابع اوپن کانکشن و کلوز کانکشن انجام بشه
//با اینکار میشه چند بار از توابع دیتا بیس استفاده کرد
?>