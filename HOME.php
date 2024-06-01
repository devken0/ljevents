<?php 
  
include 'COMPONENTS/CONNECT.php';

if (isset($_COOKIE['user_id'])){
	$user_id = $_COOKIE['user_id'];
}else{
	$user_id='';
}

//          include 'components/add_wishlist.php';
//          include 'components/add_cart.php';

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name= "viewport" content="width=device-width, initial-scale=1">
	<!-- box icon cdn link -->
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="CSS/USER_STYLE.css?v=<?php echo time(); ?>">
	<title>L & J Events Tagaytay - Home page</title>
</head>
<body>
	<?php include 'COMPONENTS/USER_HEADER.php'; ?>

    <!------------home slider section start-------->
    <div class="slider-container">
    	<div class="container">
    		<div class="slider-item active">
    			<img src="IMAGE/BG1.jpg">
    		</div>
    		<div class="slider-item">
    			<img src="IMAGE/BG2.jpg">
    		</div>
    		<div class="slider-item">
    			<img src="IMAGE/BG3.jpg">
    		</div>
    		<div class="slider-item">
    			<img src="IMAGE/BG4.jpg">
    		</div>
    		<div class="slider-item">
    			<img src="IMAGE/BG5.jpg">
    		</div>
    	</div>
    	<div class="left-arrow" onclick="nextSlide()"><i class="bx bx-left-arrow-alt"></i>
    	</div>
    	<div class="right-arrow" onclick="prevSlide()"><i class="bx bx-right-arrow-alt"></i>
    	</div>
    </div>

 

    <div class="about-us">
    	<div class="box-container">
    		<div class="img-box">
    			<img src="IMAGE/ABOUT0.jpg" class="img">
    			<img src="IMAGE/ABOUT1.jpg" class="img1">
    			<div class="play"><i class="bx bx-play"></i></div>
    		</div>
    		<div class="box">
    			<div class="heading">
    				<h1>ABOUT US</h1>
    				<img src="IMAGE/SEPERATOR.png">
    				<p>Here at L & J Country Estate, you can relax and unwind with your family and friends close to nature. Our spacious gardens and outdoors will give you the "Probinsya Feels" that you need.   You may stay indoors in our rooms, beat the heat in our pool area, or relax on our hammock and have a bonfire + camp in Kanluran Open Grounds.</p>

    				<a href="BOOK.php" class="btn">Book Now!</a>
    			</div>
    		</div>
    	</div>
    </div>

    <!------------about section end-------->

    <div class="sub-banner">
    	<div class="box-container">
    		<img src="IMAGE/1.jpg">
    		<img src="IMAGE/2.jpg">
    	</div>
    </div>

    <!------------sub-banner section end-------->

    <div class="slider-container">
        <div class="container">
                <h1>REVIEWS</h1>
                <img src="IMAGE/SEPERATOR.png" width="900px">
                <h3></h3>
                <img src="IMAGE/R1.jpg" width="1500px">
                <img src="IMAGE/R2.jpg" width="1500px">
                <img src="IMAGE/R3.jpg" width="1500px">
                <img src="IMAGE/R4.jpg" width="1500px">
            </div>
        </div>

    <!------------gurantee section end-------->









<?php include 'COMPONENTS/USER_FOOTER.php'; ?>



	<!-- sweetalert cdn link -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	<!-- custom js link -->
	<script type="text/javascript" src="JS/USER_SCRIPT.js"></script>
	<!-- alert -->
	<?php include 'COMPONENTS/ALERT.php'; ?>
</body>
</html>