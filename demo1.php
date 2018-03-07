<?php
	
	include_once 'dbconnect.php';
mysql_connect('localhost','root','');
	mysql_select_db('canteen');
	$sql="SELECT * FROM payment";
	$records=mysql_query($sql);
	
	
	$error=false;
	
	if ( isset($_POST['submit']) ) 
	{
		$usn = $_POST['usn'];
		$foodid = $_POST['foodid'];
		$sql1="SELECT * FROM food WHERE food_id='$foodid'";
	    $records1=mysql_query($sql1);
        $food=mysql_fetch_assoc($records1);
		$foodprice1=$food['foodprice'];
		echo $foodprice;
		while($pay=mysql_fetch_assoc($records))
		 {
			if($usn==$pay['usn']) 
			{   
				$balance= $pay['amount'] - $foodprice1;
				echo $balance;
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
        
    </head>

    <body>

        <na

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