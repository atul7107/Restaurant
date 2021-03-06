<?php
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

	if ( isset($_POST['btn-update']) ) {
		
		// clean user inputs to prevent sql injections
		$foodid = $_POST['foodid'];
		$foodname = $_POST['foodname'];
		$foodprice = $_POST['foodprice'];
		$foodlink = $_POST['foodlink'];
		if( !$error ) {
			
			$query = "UPDATE `food` SET `foodname`='".$foodname."',`foodprice`='".$foodprice."',`image`='".$filenm."',`foodlink`='".$foodlink."' WHERE `foodid`=$foodid";
			$res = mysql_query($query);
				
				}
			if ($res) {
				$errTyp = "success";
				$errMSG = "Successfully done, It will updated soon";
				unset($foodid);
				unset($foodname);
				unset($foodprice);
				unset($filenm);
				
			} else {
				$errTyp = "danger";
				$errMSG = "Something went wrong, try again later...";	
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
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right ">
                            <li><a class="navactive color_animation" href="adminhome.php">Admin Home</a></li>
                           
							
							
                        </ul>
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
				<h3><i class="fa fa-shield"></i>Add Food</h3>
			  <form method="POST">
			  <div class="form-group" >
				  <label class="control-label">Food Id</label>
				  <input type="text" name="foodid">
				</div>
				<div class="form-group">
				  <label class="control-label">Food Name</label>
				  <input type="text" name="foodname">
				</div>
				
				<div class="form-group">
				  <label class="control-label">Food Image</label>
				  <input type="file" name="file" class="form-control">
				</div>
				<div class="form-group">
				  <label class="control-label">Food Price</label>
				  <input type="price" name="foodprice" class="form-control">
				</div>
				<div class="form-group">
				  <label class="control-label">Food Link</label>
				  <input type="text" name="foodlink" class="form-control">
				</div>
				
		       <div class="form-group">
			   <label class="control-label"></label>
            	<button type="submit" name="btn-update">update</button>
            </div>
				
				
				  </form>
			</div>
			</div>
		
</div>

 



				  
				      
</html>
		<?php ob_end_flush(); ?>