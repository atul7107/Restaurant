
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
                           
			<div class="row">
				<div class="col-sm-5">
				<form method="POST" id="login">
					  <div class="form-group">
					    <input type="button" name="loginid" class="form-control" placeholder="Email Address">
					    <div class="login-bottom-text checkbox hidden-sm">
						   
						  </div>
					  </div>
				</div>	
				<div class="col-sm-5">
					 <div class="form-group">
					    <input type="password"  name="pass" class="form-control" placeholder="Password">
					    <div class="login-bottom-text hidden-sm">  </div>
					   
					  </div>
				</div>
				<div class="col-sm-2">
					 <div class="form-group">
					    <input type="submit" name="submit" value="login" class="btn btn-default btn-header-login">
					  </div>
			</form>

				</div>
			</div>	
		
							
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
			</div>
        </nav>

<header>
	<div class="row">
		
		<div class="col-sm-6 hidden-xs">
			<div class="row">
				<div class="col-sm-5">
				<form method="POST" id="login">
					  <div class="form-group">
					   
					    <div class="login-bottom-text checkbox hidden-sm">
						    <input type="submit" name="admin" value="login" class="btn btn-default btn-header-login">
						    </div>
					  </div>
				</div>	
				<div class="col-sm-5">
					 <div class="form-group">
					     <input type="submit" name="student" value="login" class="btn btn-default btn-header-login">
					    <div class="login-bottom-text hidden-sm">  </div>
					  
					  </div>
				</div>
				<div class="col-sm-2">
					 <div class="form-group">
					    <input type="submit" name="submit" value="login" class="btn btn-default btn-header-login">
					  </div>
				</form>

				</div>
			</div>	
		</div>
	</div>
	
</header>
<article class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="login-main">
					
				</div>
			</div>
			<div class="col-sm-4">
				<div class="">
				<h3><i class="fa fa-shield"></i> Register now</h3>
			  <form method="POST" id="login">
			  <div class="form-group" >
				  <label class="control-label" for="">USN</label>
				  <input type="text" name="usn" id="usn" required class="form-control" placeholder="">
				</div>
				<div class="form-group">
				  <label class="control-label" for="">First Name</label>
				  <input type="text" name="fname" id="fname" required class="form-control" placeholder="">
				</div>
				<div class="form-group">
				  <label class="control-label" for="">Last Name</label>
				  <input type="text" name="lname" id="lname" required class="form-control" placeholder="">
				</div>
				<div class="form-group">
				  <label class="control-label" for="">Email Address</label>
				  <input type="text" name="email" required id="email" onBlur="checkAvailability()" class="form-control" placeholder="">
				  <span id="user-availability-status"></span> 
				</div>
				
				<div class="form-group">
				  <label class="control-label" for="">Sex</label>
				  <input type="text" name="sex" id="sex" required class="form-control" placeholder="">
				</div>
				
				 <div class="form-group">
  <label class="control-label"  for="Sem">Select Branch</label>
    <select id="batch" name="year" class="form-control" required>
      <option value=""> Select a Option</option>
     
		</select>
  </div>


				<div class="form-group">
				  <label class="control-label" for="">Phone Num</label>
				  <input type="number" name="mobile" id="mobile" required class="form-control" placeholder="">
				</div>
				
				
				<div class="form-group">
				  <label class="control-label" for="">Password</label>
				  <input type="password" name="passwd" id="passwd" required class="form-control" placeholder="">
				</div>

				<div class="form-group">
				  <label class="control-label" for="">Repeat Password</label>
				  <input type="password" name="cnfrmpasswd" id="cnfrmpasswd" required class="form-control" placeholder="">
				</div>

				
		      
				
				<div style="height:10px;"></div>
				<div class="form-group">
				  <label class="control-label" for=""></label>
				  <input type="submit" name="submit1" class="btn btn-primary">
				</div>	 

				  </div>
				  </form>
			</div>
			</div>
		
</article>
<footer class="container">
<hr>


</footer>


 <script src="js/jquery-1.11.1.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
		<!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
		<!-- Google Map API -->
		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<!-- Owl Carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
        <!-- Fullscreen slider -->
        <script src="js/jquery.slitslider.js"></script>
        <script src="js/jquery.ba-cond.min.js"></script>
		<!-- onscroll animation -->
        <script src="js/wow.min.js"></script>
		<!-- Custom Functions -->
        <script src="js/main.js"></script>



				  
				      
</html>
				