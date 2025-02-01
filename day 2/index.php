<?php
    
$num = 5;
if($num < 0){
     echo "$num is less than 0";
}else{
    echo "$num is bigger than 0 <br>";
    }

if($num < 0){
    echo "the value of the number is negative <br>";
    }elseif($num == 0){
        echo "the value of the number is zero <br>";
     } else {
        echo "the value of the number is positive <br>";
    }

$age = 15;
if(($age > 12) && ($age <20)){
    echo "You are a teenager <br>";
}

$a = 20;
$b = 10;
if($a == $b){
    echo "they are equal <br>";
    } else {
         echo "they are not equal <br>";
    }

    $day = "Monday";
    switch($day){
        case "Monday":
        echo "start of the week <br>";
        break;
        case "Tuesday":
        echo "lets get thru the week <br>";
        break;
        case "Wednesday":
        echo "the middle of the week <br>";
        break;
        case "Thursday":
        echo "Almost there <br>";
        break;
        case "Friday":
        echo "weekend is here <br>";
        break;
        default:
        echo "Invaid day <br>";
        break;
    }

    #while loop
    $x = 1; // 2, 3, 4, 5
    while($x <= 5){
        echo "the number is: $x <br>";

        $x++;
    }

    $y = 0;
    do{
        echo "the number is: $y <br> ";
        $y++;
    }while($y <= 5);
?>