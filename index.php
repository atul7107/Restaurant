<?php
mysql_connect('localhost','root','');
	mysql_select_db('canteen');
	$sql="SELECT * FROM food";
	$records=mysql_query($sql);
	

	
	
?>
<!DOCTYPE html>
<html>
<style>.menu {
    width: 25%;
    float: left;
}
.main {
    width: 75%;
    float: left;
}
</style>
    <head>
        <meta charset="UTF-8">
        <title>Cashless Canteen</title>
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/style.css"/>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="assets/script.js"></script>
<link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
<script src="assets/owl-carousel/owl.carousel.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/custom.css" />
    <script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js"></script>
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
                        <a class="navbar-brand" href="#">Cashless Canteen</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right ">
                            <li><a class="navactive color_animation" href="#top">WELCOME</a></li>
                            <li><a class="color_animation" href="#story">ABOUT</a></li>
                            <li><a class="color_animation" href="#pricing">PRICING</a></li>
                            <li><a class="color_animation" href="#contact">CONTACTTTTTTTTTTTTTTT</a></li>
							<li><a class="color_animation" href="adminlogin.php">ADMIN LOGIN</a></li>
							<li><a class="color_animation" href="studentlogin.php">STUDENT LOGIN</a></li>
							<li><a class="color_animation" href="managerlogin.php">MANAGER LOGIN</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
        </nav>
         
        <div id="top" class="starter_container bg">
            <div class="follow_container">
                <div class="col-md-6 col-md-offset-3">
                    <h2 class="top-title">Cashless Canteen</h2>
                                   <hr>
                </div>
            </div>
        </div>

        <!-- ============ About Us ============= -->

        <section id="story" class="description_content">
            <div class="text-content container">
                <div class="col-md-6">
                    <h1>About us</h1>
                    <div class="fa fa-cutlery fa-2x"></div>
                    <p class="desc-text">Cashless Canteen System is a cost effective solution for schools, colleges or anywhere with a catering function requiring cashless payment. Account balances are held on a central PC which allows cards to be blocked instantly in the event of any loss or damage to the cards. Adding funds to the cards is done in real time so for example cash added is available for use at the POS straight away. The system can be used with magnetic and smart cards. It's easy to implement, easy to use, secure and cost effective.</p>
                </div>
                <div class="col-md-6">
                    <div class="img-section">
                       <img src="images/food11.jpg" width="250" height="220">
                       <img src="images/food12.jpg" width="250" height="220">
                       <div class="img-section-space"></div>
                       <img src="images/food13.jpg"  width="250" height="220">
                       <img src="images/food14.png"  width="250" height="220">
                   </div>
                </div>
            </div>
        </section>


       <!-- ============ Pricing  ============= -->


        <section id ="pricing" class="description_content">
             <div class="pricing background_content">
                <h1><span>Affordable</span> pricing</h1>
             </div>
            <div class="text-content container"> 
                <div class="container">
                    <div class="row">
                        <div id="w">
                   
		   <?php
	   $icount = 1;
		 while($food=mysql_fetch_assoc($records)){
			 ?>
      <div class="properties">
        <div class="image-holder"><?php echo '<img src="'. $food['image']. '" width="250px" height="200px">'; ?>
        </div>
        <h4><a href="login.php"><?php echo $food['foodname'];?></a></h4>
        <p class="price"><?php echo $food['foodprice'];?></p>
        <div class="listing-detail"></div>
        <a class="btn btn-primary" href="login.php">Order Food</a>
      </div>
	  <?php
	  $icount++;
		 }
		 ?>
      
      
    </div>
  </div>
                             <!--<ul id="portfolio">
                                <li class="item breakfast"><img src="images/food_icon01.jpg" alt="Food" >
                                    <h2 class="white">$20</h2>
                                </li>

                                <li class="item breakfast"><img src="Restaurant-master/images/food2.jpg" alt="Food" >
                                    <p style="color:black;">Pulliyogare</p>
									<h2 class="white">Rs.45</h2>
                                </li>
                                <li class="item breakfast"><img src="C:/xampp/htdocs/Restaurant-master/images/food3.jpg" alt="Food" >
                                    <p style="color:black;">Roti Curry</p>
									<h2 class="white">Rs.54</h2>
                                </li>
                                <li class="item breakfast"><img src="C:\xampp\htdocs\Restaurant-master\images\food4.jpg" alt="Food" >
                                    <p style="color:black;">Idly Vada</p>
									<h2 class="white">Rs.35</h2>
                                </li>
                                <li class="item breakfast"><img src="C:\xampp\htdocs\Restaurant-master\images\food5.png" alt="Food" >
                                    <p style="color:black;">Masala Dosa</p>
									<h2 class="white">Rs.56</h2>
                                </li>
                                <li class="item Lunch"><img src="C:\xampp\htdocs\Restaurant-master\images\food6.jpg" alt="Food" >
                                    <p style="color:black;">Bisibellebath</p>
									<h2 class="white">Rs.48</h2>
                                </li>
                                <li class="item Lunch"><img src="C:\xampp\htdocs\Restaurant-master\images\food7.jpg" alt="Food" >
                                    <p style="color:black;">Meals</p>
									<h2 class="white">Rs.55</h2>
                                </li>
                                <li class="item Lunch"><img src="C:\xampp\htdocs\Restaurant-master\images\food8.jpg" alt="Food" >
                                    <p style="color:black;">Curd Rice</p>
									<h2 class="white">Rs.35</h2>
                                </li>
								<li class="item Lunch"><img src="C:\xampp\htdocs\Restaurant-master\images\food9.jpg" alt="Food" >
                                    <p style="color:black;">Pulav</p>
									<h2 class="white">Rs.25</h2>
                                </li>
								<li class="item Lunch"><img src="C:\xampp\htdocs\Restaurant-master\images\food10.jpg" alt="Food" >
                                    <p style="color:black;">Noodles</p>
									<h2 class="white">Rs.55</h2>
                                </li>
								<li class="item Sweet"><img src="C:\xampp\htdocs\Restaurant-master\images\sweet1.jpg" alt="Food" >
                                    <p style="color:black;">Jamoon</p>
									<h2 class="white">Rs.20</h2>
                                </li>
								<li class="item Sweet"><img src="C:\xampp\htdocs\Restaurant-master\images\sweet2.jpg" alt="Food" >
                                    <p style="color:black;">Rasagolla</p>
									<h2 class="white">Rs.25</h2>
                                </li>
								<li class="item Sweet"><img src="C:\xampp\htdocs\Restaurant-master\images\sweet3.jpg" alt="Food" >
                                    <p style="color:black;">Rasamalai</p>
									<h2 class="white">Rs.30</h2>
                                </li>
								<li class="item Sweet"><img src="C:\xampp\htdocs\Restaurant-master\images\sweet4.jpg" alt="Food" >
                                    <p style="color:black;">kaju barfi</p>
									<h2 class="white">Rs.20</h2>
                                </li>
								<li class="item Juice"><img src="C:\xampp\htdocs\Restaurant-master\images\juice1.jpg" alt="Food" >
                                    <p style="color:black;">musambi Juice</p>
									<h2 class="white">Rs.25</h2>
                                </li>
								<li class="item Juice"><img src="C:\xampp\htdocs\Restaurant-master\images\juice2.jpg" alt="Food" >
                                    <p style="color:black;">Apple Juice</p>
									<h2 class="white">Rs.25</h2>
                                </li>
								<li class="item Juice"><img src="C:\xampp\htdocs\Restaurant-master\images\juice3.jpg" alt="Food" >
                                    <p style="color:black;">Muskmelon juice</p>
									<h2 class="white">Rs.20</h2>
                                </li>
								<li class="item Juice"><img src="C:\xampp\htdocs\Restaurant-master\images\juice4.png" alt="Food" >
                                    <p style="color:black;">Watermelon juice</p>
									<h2 class="white">Rs.20</h2>
                                </li>
								<li class="item all"><img src="C:\xampp\htdocs\Restaurant-master\images\coffee.jpg" alt="Food" >
                                    <p style="color:black;">Coffee</p>
									<h2 style="color:white;">Rs.10</h2>
									
                                     </li>
								<li class="item all"><img src="C:\xampp\htdocs\Restaurant-master\images\tea.jpg" alt="Food" >
								    <p style="color:black;">Tea</p>
                                    <h2 style="color:white;">Rs.10</h2>
                                </li> -->
                            </ul><!-- @end #portfolio -->
                        </div>  <!-- @end #w -->
                    </div> 
                </div>
            </div>  
        </section>


        <!-- ============ Our Beer  ============= -->


       <!--<section id ="beer" class="description_content">
            <div  class="beer background_content">
                <h1>Great <span>Place</span> to enjoy</h1>
            </div>
            <div class="text-content container"> 
                <div class="col-md-5">
                   <div class="img-section">
                       <img src="images/beer_spec.jpg" width="100%">
                   </div>
                </div>
                <br>
                <div class="col-md-6 col-md-offset-1">
                    <h1>OUR BEER</h1>
                    <div class="icon-beer fa-2x"></div>
                    <p class="desc-text">Here at Restaurant we’re all about the love of beer. New and bold flavors enter our doors every week, and we can’t help but show them off. While we enjoy the classics, we’re always passionate about discovering something new, so stop by and experience our craft at its best.</p>
                </div>
            </div>
        </section>
-->

       <!-- ============ Our Bread  ============= -->


       <!-- <section id="bread" class=" description_content">
            <div  class="bread background_content">
                <h1>Our Breakfast <span>Menu</span></h1>
            </div>
            <div class="text-content container"> 
                <div class="col-md-6">
                    <h1>OUR BREAD</h1>
                    <div class="icon-bread fa-2x"></div>
                    <p class="desc-text">We love the smell of fresh baked bread. Each loaf is handmade at the crack of dawn, using only the simplest of ingredients to bring out smells and flavors that beckon the whole block. Stop by anytime and experience simplicity at its finest.</p>
                </div>
                <div class="col-md-6">
                    <img src="images/bread1.jpg" width="260" alt="Bread">
                    <img src="images/bread1.jpg" width="260" alt="Bread">
                </div>
            </div>
        </section>

-->
        
        <!-- ============ Featured Dish  ============= -->
<!--
        <section id="featured" class="description_content">
            <div  class="featured background_content">
                <h1>Our Featured Dishes <span>Menu</span></h1>
            </div>
            <div class="text-content container"> 
                <div class="col-md-6">
                    <h1>Have a look to our dishes!</h1>
                    <div class="icon-hotdog fa-2x"></div>
                    <p class="desc-text">Each food is handmade at the crack of dawn, using only the simplest of ingredients to bring out smells and flavors that beckon the whole block. Stop by anytime and experience simplicity at its finest.</p>
                </div>
                <div class="col-md-6">
                    <ul class="image_box_story2">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
<!--                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides 
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="images/slider1.jpg"  alt="...">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="images/slider2.jpg" alt="...">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="images/slider3.JPG" alt="...">
                                    <div class="carousel-caption">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </section>
-->
        <!-- ============ Reservation  ============= 

        <section  id="reservation"  class="description_content">
            <div class="featured background_content">
                <h1>Reserve a Table!</h1>
            </div>
            <div class="text-content container"> 
                <div class="inner contact">
                    <!-- Form Area 
                    <div class="contact-form">
                        <!-- Form 
                        <form id="contact-us" method="post" action="reserve.php">
                            <!-- Left Inputs 
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 col-md-6 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-xs-6">
                                                <!-- Name 
                                                <input type="text" name="first_name" id="first_name" required="required" class="form" placeholder="First Name" />
                                                <input type="text" name="last_name" id="last_name" required="required" class="form" placeholder="Last Name" />
                                                <input type="text" name="state" id="state" required="required" class="form" placeholder="State" />
                                                <input type="text" name="datepicker" id="datepicker" required="required" class="form" placeholder="Reservation Date" />
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-xs-6">
                                                <!-- Name 
                                                <input type="text" name="phone" id="phone" required="required" class="form" placeholder="Phone" />
                                                <input type="text" name="guest" id="guest" required="required" class="form" placeholder="Guest Number" />
                                                <input type="email" name="email" id="email" required="required" class="form" placeholder="Email" />
                                                <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Subject" />
                                            </div>

                                            <div class="col-xs-6 ">
                                                <!-- Send Button 
                                                <button type="submit" id="submit" name="submit" class="text-center form-btn form-btn">Reserve</button> 
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-6 col-xs-12">
                                        <!-- Message 
                                        <div class="right-text">
                                            <h2>Hours</h2><hr>
                                            <p>Monday to Friday: 7:30 AM - 11:30 AM</p>
                                            <p>Saturday & Sunday: 8:00 AM - 9:00 AM</p>
                                            <p>Monday to Friday: 12:00 PM - 5:00 PM</p>
                                            <p>Monday to Saturday: 6:00 PM - 1:00 AM</p>
                                            <p>Sunday to Monday: 5:30 PM - 12:00 AM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Clear 
                            <div class="clear"></div>
                        </form>
                    </div><!-- End Contact Form Area 
                </div><!-- End Inner
            </div>
        </section>
-->
        <!-- ============ Social Section  ============= -->
      
        <section class="social_connect">
            <div class="text-content container"> 
                <div class="col-md-6">
                    <span class="social_heading">FOLLOW</span>
                    <ul class="social_icons">
                        <li><a class="icon-twitter color_animation" href="#" target="_blank"></a></li>
                        <li><a class="icon-github color_animation" href="#" target="_blank"></a></li>
                        <li><a class="icon-linkedin color_animation" href="#" target="_blank"></a></li>
                        <li><a class="icon-mail color_animation" href="#"></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <span class="social_heading">OR DIAL</span>
                    <span class="social_info"><a class="color_animation" href="tel:883-335-6524">(941) 883-335-6524</a></span>
                </div>
            </div>
        </section>

        <!-- ============ Contact Section  ============= -->

        <section id="contact">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.664063989472!2d91.8316103150038!3d24.909437984030877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37505558dd0be6a1%3A0x65c7e47c94b6dc45!2sTechnext!5e0!3m2!1sen!2sbd!4v1444461079802" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="inner contact">
                            <!-- Form Area -->
                            <div class="contact-form">
                                <!-- Form -->
                                <form id="contact-us" method="post" action="contact.php">
                                    <!-- Left Inputs -->
                                    <div class="col-md-6 ">
                                        <!-- Name -->
                                        <input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
                                        <!-- Email -->
                                        <input type="email" name="email" id="email" required="required" class="form" placeholder="Email" />
                                        <!-- Subject -->
                                        <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Subject" />
                                    </div><!-- End Left Inputs -->
                                    <!-- Right Inputs -->
                                    <div class="col-md-6">
                                        <!-- Message -->
                                        <textarea name="message" id="message" class="form textarea"  placeholder="Message"></textarea>
                                    </div><!-- End Right Inputs -->
                                    <!-- Bottom Submit -->
                                    <div class="relative fullwidth col-xs-12">
                                        <!-- Send Button -->
                                        <button type="submit" id="submit" name="submit" class="form-btn">Send Message</button> 
                                    </div><!-- End Bottom Submit -->
                                    <!-- Clear -->
                                    <div class="clear"></div>
                                </form>
                            </div><!-- End Contact Form Area -->
                        </div><!-- End Inner -->
                    </div>
                </div>
            </div>
        </section>

        <!-- ============ Footer Section  ============= -->

        <footer class="sub_footer">
            <div class="container">
                <div class="col-md-4"><p class="sub-footer-text text-center">&copy; Restaurant 2014, Theme by <a href="https://themewagon.com/">ThemeWagon</a></p></div>
                <div class="col-md-4"><p class="sub-footer-text text-center">Back to <a href="#top">TOP</a></p>
                </div>
                <div class="col-md-4"><p class="sub-footer-text text-center">Built With Care By <a href="#" target="_blank">Us</a></p></div>
            </div>
        </footer>


        <script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
        <script type="text/javascript" src="js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="js/jquery-1.10.2.js"></script>     
        <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
        <script type="text/javascript" src="js/main.js" ></script>

    </body>
</html>
