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
function Validation($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

