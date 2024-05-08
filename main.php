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
    $num = 5;
    if($num < 10){
        echo "input is < 10<br>";
    } elseif($num > 10){
        echo 'input is > 10<br>';
    }else{
        echo " your input is 10<br>";
    }
    switch($num){
        case 10:
            echo "Mid";
            break;
        case 20 :
            echo "Big";
            break;
        case 5:
            echo "Small";
            break;
        default:
            echo "None";
    }
    ?>
</body>
</html>