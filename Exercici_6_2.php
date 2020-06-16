<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

function discount1($a,$b=0.10){
    return $a-($a*$b);
}
function discount2($a,$b=0.15){
    return $a-($a*$b);     
}

$total=0;
    $item=$_GET["item"];
    $item_name=$_GET["item_name"];
    $item_quantity=$_GET["item_quantity"];
    
    for($i=0;$i<6;$i++){
        if (isset($item[$i])){
            if (isset($item_quantity[$i])){
                $total=$total+($item[$i]*$item_quantity[$i]);
            }else{
                $total=$total+$item[$i];
            }
            echo "You have choosen one ".$item_name[$i] ."<br>";
        }
    }

    if ($total<=1000){
        echo "You are an scrooge an miserable person... Spent more money, you idiot!<br>
        I won't apply any discount to this mean price... YOU OWE ME $total!";
    }elseif ($total>1000 and $total<=5000){
        echo "I'm applying a 10% discount, because you're a good client. You've spent $total Gold pieces!<br>
        Your amazing total amount, discount aplied is:"; 
        echo discount1($total) ."Gold Pieces"; 
    }else{
        echo "I'm calling you 'The Spendaholic'!!! You're my greatest client, so you deserve the gratest discount ever!!!<br>
        You've spent $total, but I'm giving you a 15% discount, so you only have to pay:";
        echo discount2($total) ."Gold Pieces."; 
    }

?> 
</body>
</html>