<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<a href="index.php" class="navbar-brand"><strong>Ct₹l Budget</strong></a>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<?php
					if(isset($_SESSION['email'])){
				?>
					<li>
						<a href="cart.php" class="navbar-link">
							<strong><span class="glyphicon glyphicon-shopping-cart"></span>	Cart</strong>
						</a>
					</li>
					<li>
						<a href="settings.php" class="navbar-link">
							<strong><span class="glyphicon glyphicon-user"></span>	Settings</strong>
						</a>
					</li>
					<li>
						<a href="logout.php" class="navbar-link">
							<strong><span class="glyphicon glyphicon-log-in"></span>	Logout</strong>
						</a>
					</li>
				<?php } else { ?>
					<li>
						<a href="about.php" class="navbar-link">
							<strong><span class="glyphicon glyphicon-info-sign"></span>	About Us</strong>
						</a>
					</li>
					<li>
						<a href="signup.php" class="navbar-link">
							<strong><span class="glyphicon glyphicon-user"></span>	Sign Up</strong>
						</a>
					</li>
					<li>
						<a href="login.php" class="navbar-link">
							<strong><span class="glyphicon glyphicon-log-in"></span>	Login</strong>
						</a>
					</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>