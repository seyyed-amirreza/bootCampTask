<?php
    class DataBase{
        protected $servername;
        protected $username;
        protected $password;
        protected $dbname;

        function __construct($servername,$username,$password,$dbname){
            $this->servername = $servername;
            $this->username = $username;
            $this->password = $password;
            $this->dbname = $dbname;
        }
    }
    class ConnectToDB extends DataBase{
        protected function connect2DB(){
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            return $conn;
        }
    }
    class DataBaseFunctions extends ConnectToDB{
        function fetchAll($tableName){
            $connection = $this->connect2DB();
            $stmt = $connection->prepare("SELECT * FROM $tableName");
            $stmt->execute();
            echo "<table border=1 cellpadding=3  align=center  cellspacing=0 style='border: solid 3px black;'>";
            echo "<tr><th>Name</th><th>Price</th><th>Quantity</th><th>Producer</th></tr>";
            foreach ($stmt->fetchAll() as $value) {
                echo "<tr>";  
                $constVal = $value['name'];
                echo"<td> $constVal</td>";      
                $constVal = $value['price'];
                echo"<td> $constVal</td>";      
                $constVal = $value['quantity'];
                echo"<td> $constVal</td>";      
                $constVal = $value['producer'];
                echo"<td> $constVal</td>";
                echo "</tr><br>";
            }
        }
        function fetchOneByName($tableName,$cond){
            $connection = $this->connect2DB();
            $stmt = $connection->prepare("SELECT * FROM $tableName WHERE name = '$cond'");
            $stmt->execute();
            echo "<table border=1 cellpadding=3  align=center  cellspacing=0 style='border: solid 3px black;'>";
            echo "<tr><th>Name</th><th>Price</th><th>Quantity</th><th>Producer</th></tr>";
            foreach ($stmt->fetchAll() as $value) {
                echo "<tr>";  
                $constVal = $value['name'];
                echo"<td> $constVal</td>";      
                $constVal = $value['price'];
                echo"<td> $constVal</td>";      
                $constVal = $value['quantity'];
                echo"<td> $constVal</td>";      
                $constVal = $value['producer'];
                echo"<td> $constVal</td>";
                echo "</tr><br>";
            }
        }
        function fetchOneByProducer($tableName,$cond){
            $connection = $this->connect2DB();
            $stmt = $connection->prepare("SELECT * FROM $tableName WHERE producer = '$cond'");
            $stmt->execute();
            echo "<table border=1 cellpadding=3  align=center  cellspacing=0 style='border: solid 3px black;'>";
            echo "<tr><th>Name</th><th>Price</th><th>Quantity</th><th>Producer</th></tr>";
            foreach ($stmt->fetchAll() as $value) {
                echo "<tr>";  
                $constVal = $value['name'];
                echo"<td> $constVal</td>";      
                $constVal = $value['price'];
                echo"<td> $constVal</td>";      
                $constVal = $value['quantity'];
                echo"<td> $constVal</td>";      
                $constVal = $value['producer'];
                echo"<td> $constVal</td>";
                echo "</tr><br>";
            }
        }
        function insertToDataBase($tableName,$name,$price,$quantity,$producer){
            $connection = $this->connect2DB();
            $stmt = $connection->prepare("INSERT INTO $tableName (name, price, quantity, producer)
            VALUES (:name, :price, :quantity, :producer)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':quantity', $quantity);
            $stmt->bindParam(':producer', $producer);
            $stmt->execute();
            echo "New records created successfully";
        }
    }
?>




