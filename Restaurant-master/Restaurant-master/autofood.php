<?php
mysql_connect('localhost','root','');
	mysql_select_db('canteen');
	$sql="SELECT * FROM `food`";
	$records=mysql_query($sql);
	

	
	
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
				<h3><i class="fa fa-shield"></i>select your food</h3>
			  <section id ="pricing" class="description_content">
             
            <div class="text-content container"> 
                <div class="container">
                    <div class="row">
                        <div id="w">
                            <ul id="filter-list" class="clearfix">
                                <li class="filter" data-filter="all">All</li>
                                <li class="filter" data-filter="breakfast">Breakfast</li>
                                <li class="filter" data-filter="Lunch">Lunch</li>
								<li class="filter" data-filter="Sweet">Sweet</li>
                                <li class="filter" data-filter="Juice">Juice</li>
                                <li class="filter" data-filter="dinner">Dinner</li>
                            </ul>
							<div id="owl-example" class="owl-carousel">
		    
                             <ul id="portfolio">
							 <?php
	   $icount = 1;
		 while($food=mysql_fetch_assoc($records)){
			 
		 
		 ?>
      <div class="properties">
        <div class="image-holder"><?php echo '<img src="'. $food['image']. '" width="100px" height="100px">'; ?>
          
        </div>
        <h4><a href="<?php echo $food['link'];?>"><?php echo $food['foodname'];?></a></h4>
        <p class="price"><?php echo $food['foodprice'];?></p>
        <div class="listing-detail"><span data-toggle="tooltip"></span> </div>
        <a class="btn btn-primary" href="<?php echo $food['link'];?>">View Details</a>
      </div>
	  <?php
	  $icount++;
		 }
		 ?>
		      <h2 style="color:white;">Rs.10</h2>
                                </li>
                            </ul><!-- @end #portfolio -->
                        </div> --> <!-- @end #w -->
                    </div>
                </div>
            </div>  
        </section>
<?php ob_end_flush(); ?>