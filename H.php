<?php 
  
include 'COMPONENTS/CONNECT.php';

if (isset($_COOKIE['user_id'])){
	$user_id = $_COOKIE['user_id'];
}else{
	$user_id='';
}




?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name= "viewport" content="width=device-width, initial-scale=1">
	<!-- box icon cdn link -->
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="CSS/USER_STYLE.css?v=<?php echo time(); ?>">
	<title>L & J Events Tagaytay - Hotels page</title>
</head>
<body>
	<?php include 'COMPONENTS/USER_HEADER.php'; ?>



    <!------------who we are section end-------->

    <div class="heading">
                    <h1> HOTEL ROOMS  </h1>
                    <h3> Help yourself with the Rooms you deserve  </h3>
                </div>

    <div class="who">

        <div class="box-container">
            <div class="box">
                

                <h3> Standard Room </h3>
                <p>Where comport meets elegance: our standard room, your cozy sanctuary </p>
                <div class="flex-btn">
                    <a href="BOOK.php" class="btn">Book Now!</a>
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
                    <a href="BOOK.php" class="btn">Book Now!</a>
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
                    <a href="BOOK.php" class="btn">Book Now!</a>
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
                    <a href="BOOK.php" class="btn">Book Now!</a>
                </div>
            </div>
            <div class="img-box">
                <img src="IMAGE/Bed2.jpg" class="img">
            </div>
        </div>

    </div>

   


<?php include 'COMPONENTS/USER_FOOTER.php'; ?>



	<!-- sweetalert cdn link -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	<!-- custom js link -->
	<script type="text/javascript" src="JS/USER_SCRIPT.js"></script>
	<!-- alert -->
	<?php include 'COMPONENTS/ALERT.php'; ?>
</body>
</html>