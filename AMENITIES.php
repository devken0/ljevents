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
                    <h1> AMENITIES  </h1>
                    <h3> Help yourself with the amenities you deserve  </h3>
                </div>

    <div class="who">

        <div class="box-container">
            <div class="box">
                

                <h3> SWIMMING POOL </h3>
                <p>Happiness is a day with pool, L&J offers you a high - quality clean pool that we surely you'll enjoy.</p>
                <div class="flex-btn">
                    <a href="BOOK.php" class="btn">Book Now!</a>
                </div>
            </div>
            <div class="img-box">
                <img src="IMAGE/SWIMMING.jpg" class="img">
            </div>
        </div>
    </div>

   <div class="who">

        <div class="box-container">
            <div class="box">
                

                <h3> AIR CONDITIONED ROOMS </h3>
                <p>Happiness is a day with pool, L&J offers you a high - quality clean pool that we surely you'll enjoy. </p>
                <div class="flex-btn">
                    <a href="BOOK.php" class="btn">Book Now!</a>
                </div>
            </div>
            <div class="img-box">
                <img src="IMAGE/ROOM.jpg" class="img">
            </div>
        </div>
    </div>

<div class="who">

        <div class="box-container">
            <div class="box">
                

                <h3> GARDEN </h3>
                <p>Nature's embrace: explore tranquility in our lush garden oasis. </p>
                <div class="flex-btn">
                    <a href="BOOK.php" class="btn">Book Now!</a>
                </div>
            </div>
            <div class="img-box">
                <img src="IMAGE/GARDEN.jpg" class="img">
            </div>
        </div>
    </div>

<div class="who">

        <div class="box-container">
            <div class="box">
                

                <h3> PLAYGROUND </h3>
                <p>Boundless joy awaits: Let imaginations soar in our vibrant playground. </p>
                <div class="flex-btn">
                    <a href="BOOK.php" class="btn">Book Now!</a>
                </div>
            </div>
            <div class="img-box">
                <img src="IMAGE/PLAYGROUND.jpg" class="img">
            </div>
        </div>
    </div>


<div class="who">

        <div class="box-container">
            <div class="box">
                

                <h3> BONFIRE </h3>
                <p>Gather' round: Embrace warmth camaraderie by the bonfire.  </p>
                <div class="flex-btn">
                    <a href="BOOK.php" class="btn">Book Now!</a>
                </div>
            </div>
            <div class="img-box">
                <img src="IMAGE/BONFIRE.jpg" class="img">
            </div>
        </div>
    </div>


<div class="who">

        <div class="box-container">
            <div class="box">
                

                <h3> BREATHTAKING VIEW </h3>
                <p>Captivating panorama: Experience the breathtaking view. </p>
                <div class="flex-btn">
                    <a href="BOOK.php" class="btn">Book Now!</a>
                </div>
            </div>
            <div class="img-box">
                <img src="IMAGE/VIEW.jpg" class="img">
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