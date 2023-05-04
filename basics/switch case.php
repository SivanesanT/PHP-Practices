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
    
    
    $user="teacher";
    switch($user)
    {
case "admin":
    echo "hi admin";
    break;// kandippa break use panna num illana aduthaum exiqute agum

    case"teacher":
        echo "hii teacher";
        break;

        case "student":
        echo "hii student";
        break;

    }
    echo "<br>";
    
    $star_rating =3;
    switch($star_rating)
    {
case 1:
    echo "One star";
    break;// kandippa break  use panna num illana aduthaum exiqute agum

    case 2:
        echo "two star ";
        break;

        case 3:
        echo "three star";
        break;
        }
    
    ?>
</body>
</html>