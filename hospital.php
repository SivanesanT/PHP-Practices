<?php
include '../includes/dp.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale:1.0">
	<title>Login or Register</title>

	

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

     <link rel="stylesheet" href="../includes/CSS/loginstyle.css">
	 
</head>
<body>
	
	

<?php
if(isset($_POST['login']))
{
$email = mysqli_real_escape_string($connection , $_POST['email']);
$pass = mysqli_real_escape_string($connection , $_POST['password']);
$pass= md5($pass);
$query= "SELECT * FROM user WHERE user_email = '$email' ";
 $log_users = mysqli_query($connection, $query);
 while($row= mysqli_fetch_assoc($log_users)){
	
	$db_useremail = $row['user_email'];
	$db_userpass = $row['user_password'];
	$db_userrole = $row['user_role'];
	// echo $pass. $email;
 }?>
 <div class="main">
<h1>WELCOME ADMIN</h1><br>
      <h2> Medical Token System </h2><br>

<?php
 if($email == $db_useremail && $pass == $db_userpass )
 {
     if($db_userrole === 'admin')
 { 
    $query1= "SELECT * FROM hospital ";
    $log_users1 = mysqli_query($connection, $query1);
    while($row= mysqli_fetch_assoc($log_users1))
    {
        $name = $row['name'];
        $age = $row['age'];
        $gender = $row['gender'];
        $reason = $row['reason'];
        $datetime = $row['datetime'];
        $number = $row['number'];
        $id = $row['id'];
		?>
	
	<div class="main">

		 <!-- <div class="card"> -->
			<!-- <div class="card-title">  -->
<?php
        echo "<h5>TOKEN NO:      $id</h5>
              <h5>NAME:          $name</h5>
              <h5>GENDER:        $gender</h5>
              <h5>CASES :        $reason</h5>
              <h5>DATE AND TIME: $datetime</h5>
              <h5>PHONE NUMBER : $number</h5>
        ---------------------------------------------------</br>";
        
	}
}
else{echo 'non of admin';}
}
}
?>
    </div>
			 </div>
		<!-- </div>  -->

	<script>
		var x = document.getElementById("login-form");
		var y = document.getElementById("register-form");
		var z = document.getElementById("pointer-btn");
		var l = document.getElementById("login");
		var r = document.getElementById("register");
		var ac = document.getElementById("action_title");

		function register(){
			x.style.left = "-450px";
			y.style.left = "25px";
			z.style.left = "215px";
			l.style.color = "#848484";
			r.style.color = "#00ffc3";
			ac.textContent = "Register";
		}

		function login(){
			x.style.left = "25px";
			y.style.left = "450px";
			z.style.left = "30px";
			l.style.color = "#00ffc3";
			r.style.color = "#848484";
			ac.textContent = "Login";
		}		
	</script>
</body>
</html>
