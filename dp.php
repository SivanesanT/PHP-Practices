<?php
$host= 'localhost';
$password='';
$username='root';
$db='hospital';
$connection = mysqli_connect($host , $username , $password, $db);
if(!$connection){
    echo 'not connected db'. mysqli_error();
}
?>