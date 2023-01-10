<?php
include '../includes/dp.php';

if(isset($_POST{'register'})){
$username = mysqli_real_escape_string($connection , $_POST['user_name']);
$userage =mysqli_real_escape_string($connection , $_POST['user_age']);
$usergender = mysqli_real_escape_string($connection ,$_POST['user_gender']);
$userreason = mysqli_real_escape_string($connection ,$_POST['user_reason']);
$userno = mysqli_real_escape_string($connection ,$_POST['user_pnumber']);
$datetime= date('d-m-y h-i-s');
if(!empty($username) &&  !empty($userage)  &&  !empty($usergender) && !empty($userreason) && !empty($userno) ){
$sql= "INSERT INTO hospital(name, age, gender,reason,number,datetime) VALUES ('$username', '$userage', '$usergender','$userreason','$userno','$datetime')";
 $insert_query = mysqli_query($connection, $sql);
$result = $insert_query; 
if(!$result){
    echo 'query failed'. mysqli_error();
    }

else{
     echo '<br> 
	<br><h1>Successfully registered</h1> ';}
}
}?>
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
	<div class="main">
		<div class="card">
			<div class="card-title">
				<h3><i class="fa fa-user-circle-o" aria-hidden="true"></i> Admin <span id="action_title"> login</span></h3>
			</div>
			<div class="card-body">
				<div class="card-body-top">
					<button id="login" class="btn" name="login" onclick="login()">admin only</button>
					<button id="register" class="btn" name="register" onclick="register()"> token for appoinment</button>
					<div id="pointer-btn"></div>
				</div>
				<div class="card-body-login">
					<form id="login-form" action="hospital.php" method="post">
						<input class="input-form" type="email" name="email" placeholder="Enter your email id" required><br><br>
						<input class="input-form" type="password" name="password" placeholder="Enter your password" required><br><br><br>
						<input class="submit-form" type="submit" value="Login" name="login">
					</form>
					<form id="register-form" action="index.php" method="post">
						<input class="input-form" type="username" name="user_name" placeholder=" Enter your name" required><br><br>
						<input class="input-form" type="number" name="user_age" placeholder="age" required><br><br>
                        <input class="input-form" type="text" name="user_reason" placeholder="For appoinment reason" required><br><br>
                        <input class="input-form" type="number" name="user_pnumber" placeholder="phone number" required><br><br>
                        <select name="user_gender" id="">
                        <option value="male" name="male">Male</option>
                        <option value="female" name= "value">Female</option>
                      </select>
						<input class="submit-form" type="submit" name="register" value="Register">
					</form>
				</div>
			</div>
		</div>
	</div>             

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