<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> 
<?php
echo "arrays using buttons ";
?>
    <button>
    <?php

    echo "<br>";
    $list=[123,5,6,7,8,"karambakkudi","neiveli"]; 
    //echo $list;  // in here this not use so it is array so we use the print_r
    print_r($list);// total arrry use meanse use this 
 
    //somename(); its a function
    ?>
    </button>
    <?php
    echo $list[0]; // we want meanse only one mease use this
    echo "<br>";
    echo $list[5];
    ?>
    <?php
    echo "<br>";
    echo "Associative Arrays:-";
    echo "<br>";
    $somearray=["sivanesan","selvakumar","sabariganesh"];
    print_r($somearray);
    echo "<br>";
    echo $somearray[1];
    echo "<br>";
    $somearray=["sivanesan","myfriend name1 is"=>"selvakumar","myfriend name2 is"=>"sabariganesh"];
    //echo $somearray[my];
    //"myfriend name is"=>
    print_r($somearray);
    echo "<br>";
    echo $somearray["myfriend name1 is"];
    echo "<br>";
    echo $somearray["myfriend name1 is"]." ".$somearray["myfriend name2 is"];
    ?>
</h3>
</body>
</html>