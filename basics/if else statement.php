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
    $payment = true;
    if ($payment)
    {
    echo "Payment Done";
    } 
    else 
    {
        echo "Buy Now";
    }

    echo "<br>";
$user = "teacher";
if($user=="admin")
{
    echo "Welcome admin";
 }
 elseif ($user == "student")
 { 
    echo "Welcome student";
}
elseif($user== "teacher")
{
    echo "welcome teacher!!";
}
else 
{
    echo "welcome anonymous";//annonymous means yar antru theriyathavargal
} 
?>
</body>
</html>