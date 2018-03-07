
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
            </div><!-- /.container-fluid -->
        </nav>
		</body>
		</html>
		<?php include('../config/config.php');?>

<?php
if (!empty($_POST['activate']))
	{		echo"hello";

		echo "hello";
		$tempc=$_POST['ac'];
		$qu=$db->query("update student SET appv=1 WHERE usn='$tempc'");
		if($qu)
		{
			header('Location:'.$_SERVER['PHP_SELF']);
		}		
	}
	else if (!empty($_POST['deactivate']))
	{		echo"hello";
 
		$tempv=$_POST['dac'];
		$qu=$db->query("update student SET appv=0 WHERE usn='$tempv'");
		if($qu)
		{
			header('Location:'.$_SERVER['PHP_SELF']);
		}		
	}
	else if (!empty($_POST['delete']))
	{
		$delete=$_POST['dac'];
		$delete1=$_POST['ac'];
		
		$qu=$db->query("DELETE FROM student WHERE usn='$delete' or usn='$delete1' ");
		if($qu)
		{
			header('Location:'.$_SERVER['PHP_SELF']);
		}
		
	}
	?>
<script type="text/javascript">
$(document).ready(function(){
    $('#batch').on('change',function(){

        var data = $(this).val();
        if(data){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'id5='+data,
                success:function(html){
                    $('#selectsem').html(html);
                    $('#details').html('<option value="">Select sem first</option>'); 
                }
            }); 
        }else{
            $('#suject').html('<option value="">Select Sem </option>');
        }
    });




    $('#selectsem').on('change',function(){

        var detail_info = $(this).val();
        var detail_info2 = $('#batch').val();
		
        if(detail_info){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:"id="+detail_info + "&id2="+detail_info2 ,
				
                success:function(html){
                    $('#details').html(html);
                }
            }); 
        }
    });
    
   
});
</script>