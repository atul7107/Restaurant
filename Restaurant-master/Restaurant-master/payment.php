<?php
	
	include_once 'dbconnect.php';
mysql_connect('localhost','root','');
	mysql_select_db('canteen');
	$sql1="SELECT * FROM student";
	$records1=mysql_query($sql1);
	$sql="SELECT * FROM payment";
	$records=mysql_query($sql);
	$error = false;
	

	if ( isset($_POST['submit']) ) {
		
		$usn = $_POST['usn'];
		$amount = $_POST['amount'];
		$stud=mysql_fetch_assoc($records1);
		if($usn==$stud['usn'])
			{
		 while($pay=mysql_fetch_assoc($records)){
			 if($usn==$pay['usn']){
		$add = $pay['amount'] + $amount;
		
			$query = "UPDATE `payment` SET `amount`='".$add."' Where `usn`='$usn'";
			$res = mysql_query($query);
				}	
		 else{
			$query1 = "INSERT INTO payment(usn,amount) VALUES('$usn','$amount')";
			$res1 = mysql_query($query1); 
			}}}else{
				echo "register first";
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
                            <li><a class="navactive color_animation" href="studenthome.php">Student Home</a></li>
                           
							
							
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
				<h3><i class="fa fa-shield"></i>Make Payment</h3>
			  <form method="POST">
			  <div class="form-group" >
				  <label class="control-label">Usn</label>
				  <input type="text" name="usn">
				</div>
				<div class="form-group">
				  <label class="control-label">Amount</label>
				  <input type="text" name="amount">
				</div>
				
				
		       <div class="form-group">
			   <label class="control-label"></label>
            	<input type="submit" name="submit" value="submit">
            </div>
				
				
				  </form>
			</div>
			</div>
		
</div>

 



				  
				      
</html>
		<?php ob_end_flush(); ?>