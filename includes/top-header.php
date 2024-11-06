<?php 
//session_start();
?>

<div class="top-bar animate-dropdown" style="background-color: #2d2d2d; padding: 10px 0; color: #F5F5F5;">
	<div class="container">
		<div class="header-top-inner">
			<div class="cnt-account">
				<ul class="list-unstyled">

					<?php if(strlen($_SESSION['login'])) { ?>
						<li><a href="#" style="color: #F5F5F5;"><i class="icon fa fa-user" style="color: #F5F5F5;"></i> Welcome - <?php echo htmlentities($_SESSION['username']); ?></a></li>
					<?php } ?>

					<li><a href="my-account.php" style="color: #F5F5F5;"><i class="icon fa fa-user" style="color: #F5F5F5;"></i> My Account</a></li>
					<li><a href="my-wishlist.php" style="color: #F5F5F5;"><i class="icon fa fa-heart" style="color: #F5F5F5;"></i> Wishlist</a></li>
					<li><a href="my-cart.php" style="color: #F5F5F5;"><i class="icon fa fa-shopping-cart" style="color: #F5F5F5;"></i> My Cart</a></li>
					
					<?php if(strlen($_SESSION['login']) == 0) { ?>
						<li><a href="login.php" style="color: #F5F5F5;"><i class="icon fa fa-sign-in" style="color: #F5F5F5;"></i> Login</a></li>
					<?php } else { ?>
						<li><a href="logout.php" style="color: #F5F5F5;"><i class="icon fa fa-sign-out" style="color: #F5F5F5;"></i> Logout</a></li>
					<?php } ?>	
				</ul>
			</div>

			<div class="cnt-block">
				<ul class="list-unstyled list-inline">
					<li class="dropdown dropdown-small">
						<a href="track-orders.php" class="dropdown-toggle" style="color: #F5F5F5;"><span class="key">Track Order</span></a>
					</li>
				</ul>
			</div>
			
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<style>
	/* Top Bar Styling */
	.top-bar {
		background-color: #2d2d2d; /* Dark Gray Background */
		padding: 10px 0;
		color: #F5F5F5; /* Light gray text for readability */
		font-size: 14px;
	}

	/* Account Links */
	.cnt-account ul {
		display: flex;
		align-items: center;
		gap: 15px;
		margin: 0;
		padding: 0;
		list-style: none;
	}

	.cnt-account ul li a {
		color: #F5F5F5; /* Light gray text for readability */
		text-decoration: none;
		padding: 5px 10px;
		border-radius: 5px;
		transition: background-color 0.3s;
	}

	.cnt-account ul li a:hover {
		background-color: #4B5563; /* Darker gray on hover */
		color: #FFFFFF;
	}

	/* Track Order Link */
	.cnt-block ul {
		margin: 0;
		padding: 0;
		list-style: none;
		text-align: right;
	}

	.cnt-block ul li a {
		color: #F5F5F5; /* Light gray text for readability */
		text-decoration: none;
		font-weight: bold;
	}

	/* Icon Styling */
	.cnt-account ul li a i.icon,
	.cnt-block ul li a i.icon {
		margin-right: 5px;
	}

	/* Responsive Layout for Small Screens */
	@media (max-width: 768px) {
		.cnt-account, .cnt-block {
			text-align: center;
		}
		.cnt-account ul, .cnt-block ul {
			flex-direction: column;
			gap: 8px;
		}
	}
</style>
