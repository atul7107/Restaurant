<?php
	ob_start();
	session_start();
	if( isset($_SESSION['student'])!="" ){
		header("Location: studenthome.php");
	}
	include_once 'dbconnect.php';

	$error = false;

	if ( isset($_POST['submit']) ) {
		
		
		$usn = $_POST['usn'];
		
		$firstname = $_POST['firstname'];
		
		$lastname = $_POST['lastname'];
		
		$email = $_POST['email'];
		
		$sex = $_POST['sex'];
		
		$branch = $_POST['branch'];
		
		$phonenumber = $_POST['phonenumber'];
		
		$password = $_POST['password'];
		
		
		
		
		
		if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
			$error = true;
			$emailError = "Please enter valid email address.";
		} else {
			
			$query = "SELECT email FROM student WHERE email='$email'";
			$result = mysql_query($query);
			$count = mysql_num_rows($result);
			if($count!=0){
				$error = true;
				$emailError = "Provided Email is already in use.";
			}
		}
		
		if (empty($password)){
			$error = true;
			$passError = "Please enter password.";
		} else if(strlen($password) < 6) {
			$error = true;
			$passError = "Password must have atleast 6 characters.";
		}
		
		             
			 if(strlen($phonenumber)<10 || strlen($phonenumber)>10)
			 {
				 echo "<br> mobile number entered is incorrect";
			 }


		
		
		if( !$error ) {
			
			$query = "INSERT INTO student(usn,firstname,lastname,email,sex,branch,Phoneno,password) VALUES('$usn','$firstname','$lastname','$email','$sex','$branch','$phonenumber','$password')";
			$res = mysql_query($query);
				
			if ($res) {
				$errTyp = "success";
				$errMSG = "Successfully registered, you may login now";
				unset($firstname);
				unset($lastname);
				unset($email);
				unset($password);
				unset($sex);
				unset($phonenumber);
				unset($branch);
			} else {
				$errTyp = "danger";
				$errMSG = "Something went wrong, try again later...";	
			}	
				
		}
		
		
	}
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Cashless Canteen</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css" media="screen" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style-portfolio.css">
        <link rel="stylesheet" href="css/picto-foundry-food.css" />
        <link rel="stylesheet" href="css/jquery-ui.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link rel="icon" href="favicon-1.ico" type="image/x-icon">
    </head>

    <body>

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="row">
                                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">Cashless Canteen</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right ">
                           <div class="col-sm-6 hidden-xs">
			<div class="row">
				<div class="col-sm-5">
				
				</div>
			</div>	
		
							
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
			</div>
        </nav>


<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="login-main">
					
				</div>
			</div>
			<br><br><br><br><br>
			<div class="col-sm-4">
				<div class="">
				<h3><i class="fa fa-shield"></i> Register now</h3>
			<table border="0.5">  
			 <form method="POST" enctype="multipart/form-data">
			 <br> <div class="form-group" >
				 <tr><td><b>USN</b>
				  <input type="text" name="usn"></td></tr>
				</div><br>
				<div class="form-group">
				  <tr><td>First Name
				  <input type="text" name="firstname"></td></tr>
				</div>
				<div class="form-group">
				  <tr><td>Last Name
				  <input type="text" name="lastname"></td></tr>
				</div>
				<div class="form-group">
				  <tr><td>Email Address
				  <input type="text" name="email"  onBlur="checkAvailability()" class="form-control"></td></tr>
				</div>
				
				<div class="form-group"><tr><td>
				  Sex
				  <input type="text" name="sex"></td></tr>
				</div>
				
				<div class="form-group"><tr><td>
				  Branch
				  <input type="text" name="branch"></tr></td>
				</div>
				
				 

				<div class="form-group"><tr><td>
				  Phone Number
				  <input type="text" name="phonenumber"></td></tr>
				</div>
				
				
				<div class="form-group"><tr><td>
				  Password
				  <input type="password" name="password"></td></tr>
				</div>

				

		       <tr><td>
            	<input type="submit" name="submit" value="submit"></td></tr>
            
				
				
				  </form>
			</div>
			</div>
		
</div>

 



				  
				      
</html>
		<?php ob_end_flush(); ?>		