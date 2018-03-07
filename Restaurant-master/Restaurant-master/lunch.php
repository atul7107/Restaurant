<?php
	
	include_once 'dbconnect.php';
mysql_connect('localhost','root','');
	mysql_select_db('canteen');
	$sql="SELECT * FROM payment";
	$records=mysql_query($sql);
	$sql2="SELECT * FROM student where usn = '$usn'";
	$records2=mysql_query($sql2);
	
	$error=false;
	
	if ( isset($_POST['submit']) ) 
	{
		$usn = $_POST['usn'];
		$foodid = $_POST['foodid'];
		$sql1="SELECT * FROM food WHERE food_id='$foodid'";
	    $records1=mysql_query($sql1);
        $food=mysql_fetch_assoc($records1);
		$foodprice1=$food['foodprice'];
		while($pay=mysql_fetch_assoc($records))
		 {
			if($usn==$pay['usn']) 
			{   
				$balance= $pay['amount'] - $foodprice1;
		$query = "UPDATE payment SET amount='".$balance."' WHERE usn='$usn'";
			$res = mysql_query($query);
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
				<h3><i class="fa fa-shield"></i>make Selection</h3>
			  <form method="POST" enctype="multipart/form-data">
			  <div class="form-group" >
				  <label class="control-label">Usn</label>
				  <input type="text" name="usn">
				</div><br>
				<div class="form-group">
				  Food_id:<input type="text" name="foodid">
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