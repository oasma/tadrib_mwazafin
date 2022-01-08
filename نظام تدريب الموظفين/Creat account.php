
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>ORANGE MARKET</title>
 <link rel="icon" href="../images/icon2.jpg" />
 <link rel='stylesheet'href ='../css/bootstrap.css'/>
        <link rel='stylesheet'href ='../css/font-awesome.min.css'/>
        <link rel='stylesheet'href ='../css/style.css'/>
        <link rel='stylesheet'href='../css/media.css'/>
        <link rel='stylesheet'href='../css/animate.css'/>

</head>

<body>

<!-- start nav bar  -->


    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
        
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navtest" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
      
            <!--  logo  -->
            <a class="navbar-brand" href="#"> Orange<span>Market</span></a>
          </div>
      
         
          <div class="collapse navbar-collapse" id="navtest">
                    <ul class="nav navbar-nav navbar-right">
                      <li ><a href="../PHP/Home.php?coustmer_id=<?php echo number_format($_GET['coustmer_id']);?>">Home </a></li>
                      
                      <li ><a href="../HTML/Shoppingcart.php?coustmer_id=<?php echo number_format($_GET['coustmer_id']);?>">Shoping Cart </a></li>
                      <li  class=""><a href="../HTML/Shoppingcheckout.php?coustmer_id=<?php echo number_format($_GET['coustmer_id']);?>">Checkout <span class="sr-only">(current)</span></a></li>
                      <li class="dropdown">
                        <a href="../HTML/#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="../HTML/Mobiles.php?coustmer_id=<?php echo number_format($_GET['coustmer_id']);?>">Mobiles</a></li>
                          <li><a href="../HTML/Accessories.php?coustmer_id=<?php echo number_format($_GET['coustmer_id']);?>">Accessories</a></li>
                          <li><a href="../HTML/Routers.php?coustmer_id=<?php echo number_format($_GET['coustmer_id']);?>">Routers</a></li>
      
      
                        </ul>
                    </li>
                     <li><a href="../HTML/Find us.php?coustmer_id=<?php echo number_format($_GET['coustmer_id']);?>">Find Us</a></li>
                        <li class=""><a href="../HTML/Log in.php">Login <span class="sr-only">(current)</span></a></a></li>
                        
                      
                    </ul>
            
          </div>
        </div>
      </nav>
      
      <!-- end navbar -->

<!-- start login page -->
<!-- start section contact us -->
<section class="register text-center">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-12 wow fadeInDown"data-wow-duration="1s" data-wow-offset="300" >
        <i class="fa fa-user fa-5x"></i>
        <h1>Make a New Account</h1>
        <p class="lead">Welcome to our Shop</p>

    </div>
<div class="col-md-12 wow fadeInUp"data-wow-duration="1s" data-wow-offset="300" >
        <form action="../PHP/PHP.php" method="POST" role="role">

        <div class="form-group">
            <input type="email" class="form-control input-lg"  placeholder="Email" name="Email">
        </div>
        <div class="form-group">
            <input type="text" class="form-control input-lg"  placeholder="First Name" name="First_Name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control input-lg"  placeholder="Last Name" name="Last_Name">
        </div>
        <div class="form-group">
            <input type="password" class="form-control input-lg" placeholder="password" name="My_Password">
        </div>
        <div class="form-group">
            <input type="password" class="form-control input-lg" placeholder="Confirm password" name="Confirm_Password">
        </div>
        

        <button type="submit" value="submit" class="btn-lg btn-block">Register</button>
                <a href="../HTML/Log in.php"> already have an account</a>

    
        </form>
    </div>
    
</div>
    </div>
</section>

<!-- End section contact us -->
<!-- end login page -->

<!-- start Footer -->
<section class="footer">
	<div class="container">
		<div class="row ">
			<div class="col-lg-6">
				<h2>Site Map</h2>
				<ul class="list-unstyled threecol ">
					<li>Home</li>
					<li>Shoping cart</li>
					<li>categories</li>
					<li>Mobiles & Devices</li>
					<li>Tariff Plans</li>
					<li>Internet</li>
					<li>Offers and promotions</li>
					<li>Handsets and Devices</li>
					<li>Entertainment</li>
					<li>Find Us</li>
					<li>Contact Us</li>

				</ul>
			</div>
			<div class="col-lg-6">
				<h2>Follow us </h2>
				<ul class="list-unstyled icons">
					<li> <i class="fa fa-facebook fa-5x " aria-hidden="true"></i></li>
					 <li><i class="fa fa-instagram fa-5x" aria-hidden="true"></i></li>
					<li> <i class="fa fa-pinterest fa-5x" aria-hidden="true"></i></li>
					<li><i class="fa fa-youtube-play fa-5x" aria-hidden="true"></i></li>
				</ul>
			</div>
			
		</div>
		
	</div>

	<div class="copyright text-center">
                   Copyright&copy;2019 <span>Orange Market</span>.Egypt
            </div>
        </section>
        <!-- End Footer -->





      
         <!--End Loading Screen-->

 <script src="../js/jquery-3.3.1.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/plugins.js"></script>
        <script src="../js/wow.min.js"></script>
        <script>new WOW().init();</script>

</body>
</html>�

