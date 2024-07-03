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
        //سلکت عادی
        function Select($tableName, ...$col){
            $connection = $this->connect2DB();
            for($i = 0; $i < count($col); $i++){
                $temp = $col[$i];
                $stmt = $connection->prepare("SELECT $temp FROM $tableName");
                $stmt->execute();
            }
        }
        //سلکت با شرط
        function SelectWhere($tableName,$cond, ...$col){
            $connection = $this->connect2DB();
            for($i = 0; $i < count($col); $i++){
                $temp = $col[$i];
                $stmt = $connection->prepare("SELECT $temp FROM $tableName WHERE $cond");
                $stmt->execute();
            }
        }
        //سلکت با ترتیب
        function SelectOrderBy($tableName,$condWhere,$colOB,$condOB,...$col){
            $connection = $this->connect2DB();
            for($i = 0; $i < count($col); $i++){
                $temp = $col[$i];
                $stmt = $connection->prepare("SELECT $temp FROM $tableName WHERE producer = '$condWhere' ORDER BY $colOB $condOB");
                $stmt->execute();
            }
        }
        //الحاق   
        function Join($table1,$table2,$type,$colJoin1,$coljoin2,...$col){
            $connection = $this->connect2DB();
            switch ($type){
                case "JOIN":
                    for($i = 0; $i < count($col); $i++){
                        $temp = $col[$i];
                        $stmt = $connection->prepare("SELECT $temp FROM $table1 JOIN $table2 ON ($colJoin1 = $coljoin2)");
                        $stmt->execute();
                    }
                    break;
                case "LEFT JOIN":
                    for($i = 0; $i < count($col); $i++){
                        $temp = $col[$i];
                        $stmt = $connection->prepare("SELECT $temp FROM $table1 LEFT JOIN $table2 ON ($colJoin1 = $coljoin2)");
                        $stmt->execute();
                    }
                    break;
                case "RIGHT JOIN":
                    for($i = 0; $i < count($col); $i++){
                        $temp = $col[$i];
                        $stmt = $connection->prepare("SELECT $temp FROM $table1 RIGHT JOIN $table2 ON ($colJoin1 = $coljoin2)");
                        $stmt->execute();
                    }
                    break;
                case "FULL JOIN":
                    for($i = 0; $i < count($col); $i++){
                        $temp = $col[$i];
                        $stmt = $connection->prepare("SELECT $temp FROM $table1 FULL JOIN $table2 ON ($colJoin1 = $coljoin2)");
                        $stmt->execute();
                    }
                    break;
            }
        }
        //درج محصول
        function InsertProduct($tableName,$name,$price,$quantity,$producer){
            $connection = $this->connect2DB();
            $stmt = $connection->prepare("INSERT INTO $tableName
            VALUES (:name, :price, :quantity, :producer)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':quantity', $quantity);
            $stmt->bindParam(':producer', $producer);
            $stmt->execute();
            echo "New records created successfully";
        }
        //درج کاربر
        function InsertUser($tableName,$userName,$password,$email){
            $connection = $this->connect2DB();
            $stmt = $connection->prepare("INSERT INTO $tableName
            VALUES (:userName, :password, :email)");
            $stmt->bindParam(':userName', $userName);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            echo "New records created successfully";
        }
        //بروزرسانی
        function Update($tableName,$cond1,$cond2){
            $connection = $this->connect2DB();
            $stmt = $connection->prepare("UPDATE $tableName SET $cond1 WHERE $cond2");
            $stmt->execute();
        }
        //ترکیب بروزرسانی و درج
        function UpsertProduct($tableName,$name,$price,$quantity,$producer,$cond){
            $connection = $this->connect2DB();
            $stmt = $connection->prepare("INSERT INTO $tableName
            VALUES (:name, :price, :quantity, :producer)
            ON DUPLICATE KEY UPDATE $cond");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':quantity', $quantity);
            $stmt->bindParam(':producer', $producer);
            $stmt->execute();
            echo "New records created successfully";
        }
        function UpsertUser($tableName,$userName,$password,$email,$cond){
            $connection = $this->connect2DB();
            $stmt = $connection->prepare("INSERT INTO $tableName
            VALUES (:userName, :password, :email)
            ON DUPLICATE KEY UPDATE $cond");
            $stmt->bindParam(':userName', $userName);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            echo "New records created successfully";
        }
        //حذف ستون
        function Delete($tableName,$cond){
            $connection = $this->connect2DB();
            $stmt = $connection->prepare("DELETE FROM $tableName WHERE $cond");
            $stmt->execute();
        }
        //ساخت جدول
        function CreateTable($name,$colName,$dataType){
            $connection = $this->connect2DB();
            $stmt = $connection->prepare("CREATE TABLE $name(
                $colName $dataType
            )");
            $stmt->execute();
        }
        //تغییر جدول
        function AlterTable($tableName,$funcType,$col,$dataType){
            $connection = $this->connect2DB();
            switch($funcType){
                case "ADD":
                    $stmt = $connection->prepare("ALTER TABLE $tableName ADD $col $dataType");
                    break;
                case "DROP COLUMN":
                    $stmt = $connection->prepare("ALTER TABLE $tableName DROP COLUMN $col");
                    break;
                case "MODIFY COLUMN":
                    $stmt = $connection->prepare("ALTER TABLE $tableName MODIFY COLUMN $col $dataType");
                    break;
            }
            
        }
        //حذف جدول
        function DropTable($tableName){
            $connection = $this->connect2DB();
            $stmt = $connection->prepare("DROP TABLE $tableName");
            $stmt->execute();
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
