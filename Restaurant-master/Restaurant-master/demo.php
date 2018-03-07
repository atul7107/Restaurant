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
		 $pay=mysql_fetch_assoc($records);
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
		 
		 
	
	
	
	
		 

	
		
		
	
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Cashless Canteen</title>
       
    </head>

    <body>

      

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
			  
				 Usn
				  <input type="text" name="usn">
				
				
				Amount  <input type="text" name="amount">
				
				
				
		     
            	<input type="submit" name="submit" value="submit">
				
				
				  </form>
			</div>
			</div>
		
</div>

 



				  
				      
</html>
		<?php ob_end_flush(); ?>