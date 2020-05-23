<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<?php
	error_reporting(E_ERROR);
	session_start();

        // put your code here
         $id = $Password = "" ;
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $id = $_POST['id'];
            $pass = $_POST['pass'];
            
          $con = mysqli_connect("localhost:8080","","","lbrary_management"); 

        if (mysqli_connect_errno())
                    {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }
                       
        }
        
		$query = "select user_id,password from `user` where user_id = '$id' and password ='$pass'";
                      $result = mysqli_query($con,$query);
                
                      $count = mysqli_num_rows($result);
                        if($count == 1){
			 echo ("<SCRIPT LANGUAGE='JavaScript'>
  		  		 window.alert('You are login successfully');
				 window.location.href='index.php';
  				 </SCRIPT>");
			  		$_SESSION['user_id']=$id;
                        }
                       else{
                       	echo("<SCRIPT LANGUAGE='JavaScript'>
  		  		 window.alert('login unsuccessfully');</SCRIPT>");
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

<div class="container">
	<div class="row">
		<h1 style="text-align:center">
	 Log-In Page
</h1>
 <div style="width:30%;margin:0 auto;">
 	<form role="form" id="templatemo-preferences-form" name="login" action="" method="post">
 	<div class = "form-group">
	<p>User_ID: </p>
		<input class="form-control" type="text" name="id" placehoder="id_number">
	</div>
	<div class = "form-group">
	<p>Password: </p>
		<input class="form-control" type="Password" name="pass" placehoder="Password">
	</div>
	<button class="btn btn-lg btn-primary btn-block" type="submit"  name="submit" value="Register">
	 	Login
	</button>



 	</form>
 	<br>
 	<a href="sign.html">Sign_Up</a>

	</div>	
	</div>
	
</div>

</body>
</html>