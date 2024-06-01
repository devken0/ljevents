<header class="header">
	<section class="flex">
		<a href="HOME.php"><img src="IMAGE/LJ_LOGO.jpg" width="100px"></a>
		<nav class="navbar">
			<a href="HOME.php">home</a>
			<a href="H.php">Hotels</a>
			<a href="AMENITIES.php">Amenities</a>
			<a href="BOOK.php">Book now!</a>

		</nav>
		
		<div class="icons">
			<div id="menu-btn" class="bx bx-list-plus"></div>

			<div class="bx bxs-user" id="user-btn"></div>
		</div>
		<div class="profile">
			<?php
			$select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
			$select_profile ->execute([$user_id]);

			if ($select_profile->rowCount() >0){
				$fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);

			?>
			<img src="UPLOADED_FILES/<?= $fetch_profile['image']; ?>">
			<h3 style=" margin-bottom: 1rem"><?= $fetch_profile['name']; ?></h3>

			<div class="flex-btn">
				<a href="PROFILE.php" class="btn">view profile</a>
				<a href="COMPONENTS/USER_LOGOUT.php" onclick="return confirm('logout from this website');" class="btn">logout</a>
			</div>
		    <?php }else{ ?>
		    	<img src="IMAGE/user.png" alt="">
			<h3 style=" margin-bottom: 1rem">please login or register</h3>
			<div class="flex-btn">
				<a href="LOGIN.php" class="btn">login</a>
				<a href="REGISTER.php" class="btn">register</a>
			</div>
		    <?php } ?>
		</div>
	</section>
</header>