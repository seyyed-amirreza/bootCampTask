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
    //تابعی که به عدد ورودی نگاه میکنه و جواب درست رو میده
    function IfElse($number){
        if($number < 10){
            echo "input is < 10 <br>";
        }elseif($number > 10){
            echo 'input is > 10 <br>';
        }else{
            echo 'input is = 10 <br>';
        }
    }
    //تابعی که با توجه به مقدار ورودی جواب مناسب میده
    function SwitchCase($month){
        switch($month){
            case "January":
                echo "First month <br>";
                break;
            case "February" :
                echo "Second month <br>";
                break;
            case "March":
                echo "Third month <br>";
                break;
            case "April":
                echo "Fourth month <br>";
                break;
            case "May":
                echo "Fifth month <br>";
                break;
            case "June":
                echo "Sixth month <br>";
                break;
            case "July":
                echo "Seventh month <br>";
                break;
            case "August":
                echo "Eighth month <br>";
                break;
            case "September":
                echo "Ninth month <br>";
                break;
            case "October":
                echo "Tenth month <br>";
                break;
            case "November":
                echo "Eleventh month <br>";
                break;
            case "December":
                echo "Twelfth month <br>";
                break;
            default:
                echo "Invalid Input <br>";
        }
    }
    //تابعی که با گرفتن دو مقدار عددی یه شکل ایجاد میکنه
    function ForLoop($width,$height){
        for($i = 0; $i < $width; $i++){
            for($j = 0; $j < $height; $j++){
                echo " * ";
            }
            echo "<br>";
        }
    }
    // تست تابع ها
    ForLoop(5,5);
    IfElse(11);
    SwitchCase("Farvardin");
    ?>
</body>
</html>