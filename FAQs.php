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
	<title>L & J Events Tagaytay - Home page</title>
</head>
<body>
	<?php include 'COMPONENTS/USER_HEADER.php'; ?>

    <!------------home slider section start-------->
    <div class="slider-container">
    	<div class="container">
    			<img src="IMAGE/FAQs.jpg" width="1500px">
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