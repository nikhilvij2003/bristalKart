<!-- Navigation-->
<nav class="navbar navbar-expand-lg" style="background-color: #003366;">
	<div class="container px-4 px-lg-5">
		<a class="navbar-brand" href="index.php" style="color: #FFFFFF; font-family: Arial, sans-serif; font-weight: bold;">Bristal-Kart</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
				<li class="nav-item"><a class="nav-link" href="index.php" style="color: #FFFFFF; font-family: Arial, sans-serif;">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="about-us.php" style="color: #FFFFFF;">About</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #FFFFFF;">Shop</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="index.php">All Products</a></li>
						<li><hr class="dropdown-divider" /></li>
						<li><a class="dropdown-item" href="shop-categories.php">Category Wise</a></li>
					</ul>
				</li>

				<?php if($_SESSION['id']==0){ ?>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #FFFFFF;">Users</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="login.php">Login</a></li>
							<li><hr class="dropdown-divider" /></li>
							<li><a class="dropdown-item" href="signup.php">Sign Up</a></li>
						</ul>
					</li>
					<li class="nav-item"><a class="nav-link" href="admin/" style="color: #FFFFFF;">Admin</a></li>
				<?php } else { ?>
					<li class="nav-item"><a class="nav-link" href="my-wishlist.php" style="color: #FFFFFF;">My Wishlist</a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #FFFFFF;">My Account</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="my-orders.php">Orders</a></li>
							<li><hr class="dropdown-divider" /></li>
							<li><a class="dropdown-item" href="my-profile.php">Profile</a></li>
							<li><hr class="dropdown-divider" /></li>
							<li><a class="dropdown-item" href="change-password.php">Change Password</a></li>
							<li><hr class="dropdown-divider" /></li>
							<li><a class="dropdown-item" href="manage-addresses.php">Addresses</a></li>
							<li><hr class="dropdown-divider" /></li>
							<li><a class="dropdown-item" href="logout.php">Logout</a></li>
						</ul>
					</li>
				<?php } ?>
				<li class="nav-item"><a class="nav-link" href="contact-us.php" style="color: #FFFFFF;">Contact Us</a></li>
			</ul>

			<?php if($_SESSION['id'] != 0): ?>
				<strong style="color: #FFD700;">Welcome, <?php echo $_SESSION['username']; ?></strong>
			<?php endif; ?>

			<form class="d-flex">
				<?php 
				$uid = $_SESSION['id'];
				$ret = mysqli_query($con, "select sum(productQty) as qtyy from cart where userId='$uid'");
				$result = mysqli_fetch_array($ret);
				$cartcount = $result['qtyy'];
				?>
				<a class="btn btn-outline-light" href="my-cart.php" style="border-radius: 50px; padding: 8px 20px;">
					<i class="bi-cart-fill me-1"></i>
					Cart
					<span class="badge bg-dark text-white ms-1 rounded-pill"><?php echo $cartcount ? $cartcount : '0'; ?></span>
				</a>
			</form>
		</div>
	</div>
</nav>

<style>
	.navbar {
		background-color: #003366;
	}

	.navbar-brand, .nav-link {
		color: #FFFFFF !important;
		font-family: 'Arial', sans-serif;
		font-weight: bold;
	}

	.navbar .dropdown-menu {
		background-color: #FFFFFF;
		border-radius: 5px;
	}

	.dropdown-item {
		font-family: 'Arial', sans-serif;
		padding: 10px 20px;
		border-radius: 5px;
	}

	.dropdown-item:hover {
		background-color: #1E3A8A;
		color: #FFFFFF;
	}

	.btn-outline-light {
		color: #FFFFFF;
		border-color: #FFFFFF;
	}

	.btn-outline-light:hover {
		background-color: #FFD700;
		color: #003366;
		border-color: #FFD700;
	}

	.navbar-toggler {
		border-color: #FFD700;
	}

	.navbar-toggler-icon {
		background-color: #FFD700;
	}
</style>
