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
?>

<!-- function showTable(){
            $connection = $this->connect2DB();
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
        } -->
