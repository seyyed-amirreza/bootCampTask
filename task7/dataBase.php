<?php
    include("class.php");

    $servername = "localhost";
    $username = "pma";
    $password = "";
    $dbname = "mydatab";
    $mahsool = new Mahsool($_POST["name"],$_POST["price"],$_POST["quantity"],$_POST["producer"]);
    $name = $mahsool->getName()."<br>";
    $price = $mahsool->getPrice()."<br>";
    $quantity = $mahsool->getQuantity()."<br>";
    $producer = $mahsool->getProducer()."<br>";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("INSERT INTO Product (name, price, quantity, producer)
        VALUES (:name, :price, :quantity, :producer)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':quantity', $quantity);
        $stmt->bindParam(':producer', $producer);
        $stmt->execute();

        echo "New records created successfully";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;

?>