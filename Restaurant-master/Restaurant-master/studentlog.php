<?php
mysql_connect('localhost','root','');
	mysql_select_db('canteen');
	$sql="SELECT * FROM student";
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
            
           <h1 style="color:green;">STUDENT DETAILS</h1>
            <div class="form-group">
            	<table width="800" border="1" cellpaddin="2" cellspacing="2">
				<tr>
				<th>USN</th>
				<th>FIRSTNAME</th>
				<th>LASTNAME</th>
				<th>USERNAME</th>
				<th>SEX</th>
				<th>BRANCH</th>
				<th>PHONENNUMBER</th>
				<tr>
				
						
            </div>
         <?php
		 while($student=mysql_fetch_assoc($records)){
			 echo "<tr>";
			 echo "<td>" .$student['usn']."</td>";
			 echo "<td>" .$student['firstname']."</td>";
			 echo "<td>" .$student['lastname']."</td>";
			 echo "<td>" .$student['email']."</td>";
			 echo "<td>" .$student['sex']."</td>";
			 echo "<td>" .$student['branch']."</td>";
			 echo "<td>" .$student['Phoneno']."</td>";
			 echo "</tr>";
		 
		 }
		
?>	

  
	 
        </table>    
          
        
        </div>
   
    </form>
    </div>	


</body>
</html>
<?php ob_end_flush(); ?>