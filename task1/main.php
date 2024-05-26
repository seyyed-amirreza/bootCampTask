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
    $num = 10;
    $temp = 0;
    if($num < 10){
        echo "input is < 10";
    }elseif($num > 10){
        echo 'input is > 10';
    }
    //اگر عدد برابر 10 بود،آن عدد را 10 بار در خودش جمع کن
    else{
        for($i = 0;$i <= 9;$i++){
            $temp += $num;  
        }
        echo "$temp";
    }
    echo "<br>";
    //ماه های میلادی
    $month = "February";
    switch($month){
        case "January":
            echo "First month";
            break;
        case "February" :
            echo "Second month";
            break;
        case "March":
            echo "Third month";
            break;
        case "April":
            echo "Fourth month";
            break;
        case "May":
            echo "Fifth month";
            break;
        case "June":
            echo "Sixth month";
            break;
        case "July":
            echo "Seventh month";
            break;
        case "August":
            echo "Eighth month";
            break;
        case "September":
            echo "Ninth month";
            break;
        case "October":
            echo "Tenth month";
            break;
        case "November":
            echo "Eleventh month";
            break;
        case "December":
            echo "Twelfth month";
            break;
        default:
            echo "Invalid Input";
    }
    ?>
</body>
</html>