<?php
session_start();
$_SESSION["username"]="Olorcar The Barbarian";

if (isset($SESSION["visits"])){
  $_SESSION["visits"]++; 
}else{ 
  $_SESSION["visits"]=1;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p>Welcome, <?=$_SESSION["username"]?></p>
    <p>Congrats! You've visited us <?=$_SESSION["visits"]?> times

</body>
</html>