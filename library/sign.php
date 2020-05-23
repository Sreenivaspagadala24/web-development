<!DOCTYPE html>
<html>
<head>
	
		<title>Library Management System</title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	
<body>
	<?php
	error_reporting(E_ERROR);
	session_start();

        // put your code here
     $Name = $Age = $Contact = $Password = "" ;
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $phone_number = $_POST['phone_number'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            
          $con = mysqli_connect("localhost:8080","","","lbrary_management"); 

        if (mysqli_connect_errno())
                    {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }
                       
        }

		
		
			$query = "INSERT into `user` (user_id,name,phone_number,email, password) VALUES ('$id', '$name', '$phone_number',
						'$email','$pass')";
                      $result = mysqli_query($con,$query);
                      $count = mysqli_num_rows($result) ;
                        if($count == 1){
			 echo ("<SCRIPT LANGUAGE='JavaScript'>
  		  		 window.alert('You are registered successfully');
				 window.location.href='index.php';
  				 </SCRIPT>");


                        }
               
        ?>
	<nav class="navbar navbar-inverse">
	<div class = "conatiner-fluid">
		<div class ="navbar-header">
			<a class="navbar-brand"
			 href="/">Library Management System</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="login.php">Login</a></li>
				<li><a href="signup.php">Signup</a></li>
				<li><a href="login.php">Logout</a></li>
				
			</ul>
			
		</div>
	</div>
</nav>

<div class = "container">
	
<div class ="row">
	<h1 style="text-align:center">
	 Sign-Up Page
</h1>

<div style="width:30%;margin:0 auto;">
	
	<form role="form" id="templatemo-preferences-form" name="registration" action="" method="post">
	<div class = "form-group">
		<p>Name: </p>
	<input class="form-control" type="text" name="name" placehoder="name">
	</div>
	<div class = "form-group">
	<p>User_ID: </p>
		<input class="form-control" type="text" name="id" placehoder="id_number">
	</div>
	<div class = "form-group">
	<p>Email: </p>
		<input class="form-control" type="text" name="email" placehoder="id_number">
	</div>
	<div class = "form-group">
	<p>Password: </p>
		<input class="form-control" type="text" name="pass" placehoder="Password">
	</div>
	<!-- <div class = "form-group">
	<p> Confirm Password: </p>
		<input class="form-control" type="text" name="pass" placehoder="Password">
	</div> -->
	<div class = "form-group">
	<p>Phone Number: </p>
		<input class="form-control" type="text" name="phone_number" placehoder="phone_number">
	</div>

	<div class = "form-group">

	<input type="checkbox" name="remember_me" >Remember Me<br>
	<br>
	<button class="btn btn-lg btn-primary btn-block" type="submit"  name="submit" value="Register">
		Sign Up
	</button>
	</div>
	
</form>
	<a href="login.html">Go Back!</a>
	</div>



</div>

	
</div>






</body>
</html>