<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = $lname = $gender = $email ="";
    $nameErr = $lnameErr = $emailErr = "";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["fname"])){
                $nameErr = "Name is required";
            }else{
                if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST["fname"])) {
                    $nameErr = "Only letters and white space allowed";
                }else{
                    $name = Validation($_POST["fname"]);
                }
            }
            if(empty($_POST["lname"])){
                $lnameErr = "Last name is required";
            }else{
                if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST["lname"])) {
                    $lnameErr = "Only letters and white space allowed";
                }else{
                    $lname = Validation($_POST["lname"]);
                }
            }
            if(empty($_POST["email"])){
                $emailErr = "Email is required";
            }else{
                if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }else{
                    $email = Validation($_POST["email"]);
                }
            }
            $gender = Validation($_POST["gender"]);
        }
        function Validation($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname">
        <span>* <?php echo $nameErr?></span>
        <br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname">
        <span>* <?php echo $lnameErr?></span>
        <br>
        <label for="gender">Gender:</label><br>
        <input type="radio" name="gender" value="Female">Female
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Other">Other<br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email">
        <span>* <?php echo $emailErr?></span>
        <br><br>
        <input type="submit">
    </form>
    <?php
        if($name != "" && $lname != "" && $email != ""){
            $saved = fopen("save.txt","a");
            $txt = "<br>Name : " . $name . "\n" .
            "Last Name : " . $lname . "\n" .
            "Gender : " . $gender . "\n" .
            "Email : " . $email . "\n".
            "---------------";
            fwrite($saved,$txt);
            fclose($saved);
            $read = fopen("save.txt","r");
            while(!feof($read)){
                echo fgets($read) . "<br>";
            }
            fclose($read);
        }
        
?>
</body>
</html>
