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
    $name="outside";//global variable
    function convert()
    {
        global $name;// in the keyword global change that as the global variable
        $name ="inside";//local  variable
    }
    echo $name;
    echo "<br>";
    convert();
    echo $name;
    ?>
</body>
</html>