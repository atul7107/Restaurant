<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	if ( isset($_SESSION['student'])!="" ) {
		header("Location: studenthome.php");
		exit;
	}
	
	$error = false;
	
	if( isset($_POST['submit']) ) {	
		$username = $_POST['username'];
		
		$password = $_POST['password'];	
		if(empty($username)){
			$error = true;
			$emailError = "Please enter your email address.";
		} 
		
		if(empty($password)){
			$error = true;
			$passError = "Please enter your password.";
		}
		
		
		if (!$error) {
			
		
			$res=mysql_query("SELECT usn,firstname,lastname,email,sex,branch,Phoneno,password FROM student WHERE email='$username'");
			$row=mysql_fetch_array($res);
			$count = mysql_num_rows($res); 
			
			if( $count == 1 && $row['password']==$password ) {
				$_SESSION['student'] = $row['usn'];
				header("Location: studenthome.php");
			} else {
				$errMSG = "Incorrect Credentials, Try again...";
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
			
		
							
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
			</div>
        </nav><br>
		<br><br><br><br><br>
		<br><br>

<article class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="login-main">
					
				</div>
			</div>
			<div class="col-sm-4">
				<div class="">
				<h3><i class="fa fa-shield"></i>Student Login</h3>
			  <form method="POST">
			  <div class="form-group" >
				  <label class="control-label" for="">Username</label>
				  <input type="text" name="username" required class="form-control" placeholder="">
				</div>
				<div class="form-group" >
				  <label class="control-label" for="">Password</label>
				  <input type="password" name="password" required class="form-control" placeholder="">
				</div>
            
            <div class="form-group">
            	<hr />
            </div>
            
				<div class="form-group">
				  <label class="control-label" for=""></label>
				  <input type="submit" name="submit" class="btn btn-primary">
				</div>	 
				<div class="form-group">
            	<a href="login.php">Sign up Here...</a>
            </div>
            
            <div class="form-group">
            	<hr />
            </div>
            
            <div class="form-group">
            </div>
        
        </div>
   
    </form>
    </div>	

</div>

</body>
</html>
<?php ob_end_flush(); ?>