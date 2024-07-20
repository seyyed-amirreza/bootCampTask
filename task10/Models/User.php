<?php
    class User
    {
        private $userName;
        private $password;
        private $email;

        function __construct($userName,$password,$email){
            $this->userName = $userName;
            $this->password = $password;
            $this->email = $email;
        }
        function getUserName(){
            return $this->userName;
        }
        function getPassword(){
            return $this->password;
        }
        function getEmail(){
            return $this->email;
        }
        //سلکت عادی
        function Select($tableName, $col){
            $connection = $this->connect2DB();
            $stmt = $connection->prepare("SELECT $col FROM $tableName");
            $stmt->execute();
        }
        //سلکت با شرط
        function SelectWhere($tableName,$cond,$col){
            $connection = $this->connect2DB();
            $stmt = $connection->prepare("SELECT $col FROM $tableName WHERE $cond");
            $stmt->execute();
        }
        //سلکت با ترتیب
        function SelectOrderBy($tableName,$cond,$colCondition,$type,$col){
            $connection = $this->connect2DB();
            $stmt = $connection->prepare("SELECT $col FROM $tableName WHERE $cond ORDER BY $colCondition $type");
            $stmt->execute();
        }
        //الحاق   
        function Join($table1,$table2,$type,$colJoin1,$coljoin2,$col){
            $connection = $this->connect2DB();
            switch ($type){
                case "JOIN":        
                    $stmt = $connection->prepare("SELECT $col FROM $table1 JOIN $table2 ON ($colJoin1 = $coljoin2)");
                    $stmt->execute();
                    break;
                case "LEFT JOIN":
                    $stmt = $connection->prepare("SELECT $col FROM $table1 LEFT JOIN $table2 ON ($colJoin1 = $coljoin2)");
                    $stmt->execute();
                    break;
                case "RIGHT JOIN":
                    $stmt = $connection->prepare("SELECT $col FROM $table1 RIGHT JOIN $table2 ON ($colJoin1 = $coljoin2)");
                    $stmt->execute();
                    break;
                case "FULL JOIN":
                    $stmt = $connection->prepare("SELECT $col FROM $table1 FULL JOIN $table2 ON ($colJoin1 = $coljoin2)");
                    $stmt->execute();
                    break;
            }
        }
        //بروزرسانی
        function Update($tableName,$cond1,$cond2){
            $connection = $this->connect2DB();
            $stmt = $connection->prepare("UPDATE $tableName SET $cond1 WHERE $cond2");
            $stmt->execute();
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
        //ترکیب آپدیت و درج
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

