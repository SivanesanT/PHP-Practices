<!DOCTYPE html>
<html lang="en">
<head>
<h1>
        <?php
        echo "siva";
        echo $bag; // in here we use only in the variable of upper of the we using them 
        ?>
    </h1>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <button>
  <?php
  $bag= "click";// in one page la oru edathulla variable use pannuna atha full page laium use pannalam
  echo $bag ;//php code kulla only use the php coding only ok va like as <?php;
  
  
  echo '</br>';//small space given by this
   ?>
  </button>
  <button>
    <?php
    echo $bag;// in a chage the name of button means we change the variable meanse all are change 
 
    echo "<h1> siva </h1>"; //we  use like this also echo kulla kudukalam html tags aa use panna lam
    ?>
  </button>
</body>
</html> 