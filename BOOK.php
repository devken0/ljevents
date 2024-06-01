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

 


<div class="heading">
                    <h1> ROOM AVAILABILITY  </h1>
                    <img src="IMAGE/SEPERATOR.png" width="900px">
                </div>


    <div class="who">

        <div class="box-container">
            <div class="box">
                

                <h3> Standard Room </h3>
                <p>Where comport meets elegance: our standard room, your cozy sanctuary </p>
                <div class="flex-btn">
                    <a href="ROOM.php" class="btn">SEE MORE INFO</a>
                </div>
            </div>
            <div class="img-box">
                <img src="IMAGE/Bed.jpg" class="img">
            </div>
        </div>

        <div class="box-container">
            <div class="box">
                

                <h3> Standard Room </h3>
                <p>Where comport meets elegance: our standard room, your cozy sanctuary </p>
                <div class="flex-btn">
                    <a href="ROOM.php" class="btn">SEE MORE INFO</a>
                </div>
            </div>
            <div class="img-box">
                <img src="IMAGE/Bed3.jpg" class="img">
            </div>
        </div>

        <div class="box-container">
            <div class="box">
                

                <h3> Standard Room </h3>
                <p>Where comport meets elegance: our standard room, your cozy sanctuary </p>
                <div class="flex-btn">
                    <a href="ROOM.php" class="btn">SEE MORE INFO</a>
                </div>
            </div>
            <div class="img-box">
                <img src="IMAGE/Bed.jpg" class="img">
            </div>
        </div>

        <div class="box-container">
            <div class="box">
                

                <h3> Standard Room </h3>
                <p>Where comport meets elegance: our standard room, your cozy sanctuary </p>
                <div class="flex-btn">
                    <a href="ROOM.php" class="btn">SEE MORE INFO</a>
                </div>
            </div>
            <div class="img-box">
                <img src="IMAGE/Bed2.jpg" class="img">
            </div>
        </div>

    </div>






    	<div class="heading">
   
    <div class="feedback">
    			<h1>GALLERY</h1>
                <img src="IMAGE/SEPERATOR.png">
                <h3></h3>
                <img src="IMAGE/0.jpg" >
                <img src="IMAGE/P4.jpg">
                <img src="IMAGE/P5.jpg">
                <img src="IMAGE/P6.jpg">
                <img src="IMAGE/play.jpg" >
                <img src="IMAGE/P1.jpg">
                <img src="IMAGE/P2.jpg">
                <img src="IMAGE/P3.jpg">
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