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

setcookie('visitcount', 20, time()+ 31536000);   //name , value , time + seconds 
setcookie('visitcount1', 10, time()+ 31536000); 
//no limit for the cookie
//print_r($_COOKIE); // OR down // print the cookie values at any were we to read

echo $_COOKIE['visitcount'];

?>

</body>
</html>