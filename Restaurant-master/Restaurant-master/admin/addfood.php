
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
                        <a class="navbar-brand" href="student.php">Cashless Canteen</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right ">
                            <li><a class="navactive color_animation" href="view.php">View Student</a></li>
                            <li><a class="color_animation" href="addfood.php">Add Food</a></li>
                            <li><a class="color_animation" href="pricing.php">Change Pricing</a></li>
                           
							<li><a class="color_animation" href="logout.php">Logout</a></li>
							
                        </ul>
                    </div><!-- /.navbar-collapse -->
                
				</div>
				<div class="container a">
<form class="form-horizontal"  id="signupForm"  method="POST">
<fieldset>
<br><br><br><br><br><br><br><br>
<!-- Form Name -->
<legend>Add Food</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >Food ID</label>  
  <div class="col-md-4">
  <input id="fname" name="fname" type="text" placeholder="food id" class="form-control input-md" minlength="3" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="lname">Food Name</label>  
  <div class="col-md-4">
  <input id="lname" name="lname" type="text" placeholder="food name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="phone">Food price</label>  
  <div class="col-md-4">
  <input id="phone" name="phone" type="number" placeholder="food price" minlength="2" class="form-control input-md" required="">
    
  </div>
</div>
</div>
            </div><!-- /.container-fluid -->
			
        </nav>
		</body>
		</html>
		
