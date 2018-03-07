<?php
	ob_start();
	session_start();
	if( isset($_SESSION['manager'])!="" ){
		header("Location: managerhome.php");
	}
	include_once 'dbconnect.php';

	$error = false;
	Global $filenm;
	if(isset($_FILES['file'])){
		$errors= array();
		$filepath=pathinfo($_FILES["file"]["name"]);
		$extn=$filepath['extension'];

	$randfn=uniqid();

	$movepic=move_uploaded_file($_FILES["file"]["tmp_name"],"img/". $randfn .".".$extn);
	if($movepic)
	{
		$filenm="img/". $randfn .".". $extn;
	}
	}


	if ( isset($_POST['submit']) ) {
		
		
		$food_id = $_POST['food_id'];
		
		$foodname = $_POST['foodname'];
		
		$foodprice = $_POST['foodprice'];
		
		
		
		if( !$error ) {
			
			$query = "INSERT INTO food(food_id,foodname,foodprice,image) VALUES('$food_id','$foodname','$foodprice','$filenm')";
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
                    <div class="col-md-12">
                        <div class="inner contact">
                            <!-- Form Area -->
                            <div class="contact-form">
                                <!-- Form -->
                                <form id="contact-us" method="post" action="contact.php">
                                    <!-- Left Inputs -->
                                    <div class="col-md-6 ">
                                        <!-- Name -->
                                        Food id:<input type="text" name="food_id"  class="form" placeholder="Food_id" />
                                        <!-- Email -->
                                        Food Name:<input type="text" name="foodname"  class="form" placeholder="foodname" />
                                        <!-- Subject -->
                                        Food Price:<input type="text" name="foodprice"  class="form" placeholder="foodprice" />
										
										Food image:<input type="file" name="file" class="form-control" maxlength="40" />
                                    </div><!-- End Left Inputs -->
                                    <!-- Right Inputs -->
                                    
                                    <!-- Bottom Submit -->
                                    <div class="relative fullwidth col-xs-12">
                                        <!-- Send Button -->
                                        <button type="submit"  name="submit" class="form-btn"></button> 
                                    </div><!-- End Bottom Submit -->
                                    <!-- Clear -->
                                    <div class="clear"></div>
                                </form>
                            </div><!-- End Contact Form Area -->
                        </div><!-- End Inner -->
		
</div>

 



				  
				      
</html>
		<?php ob_end_flush(); ?>		