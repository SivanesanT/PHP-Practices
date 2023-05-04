<?php

if(isset($_POST["submit"]))
{ 
 // print_r($_POST);
//echo $_POST ["email"]."<br>";
$email= $_POST ["email"];
$pass =  $_POST["password"];
echo "your Email id is :". $email . "<br>";
echo strtoupper($email);
//echo "Hii it is post request";
}
 ?>
