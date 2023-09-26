<?php
	require("includes/common.php");
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ct₹l Budget</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
</head>

<body style="background-color: #D8D8D8;">
	<?php
		include("includes/navbar.php");
	?>
	
	<div class="container">
		<form method="post" action="signup_script.php" class="signup-style media-middle">		
			<div class="panel panel-default">
				<div class="panel-heading">
					<center><h3>Sign Up</h3></center>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label>Name :</label>
						<input type="text" name="name" placeholder="Name" class="form-control">
					</div>
					<div class="form-group">
						<label>E-Mail :</label>
						<input type="text" name="mail" placeholder="Enter Valid E-mail" class="form-control">
					</div>
					<div class="form-group">
						<label>Password :</label>
						<input type="password" name="pswd" placeholder="Password (Min. 6 Characters)" class="form-control">
					</div>
					<div class="form-group">
						<label>Phone Number :</label>
						<input type="tel" name="phone" placeholder="Enter Valid Phone Number (Ex. 844844853)" class="form-control">
					</div>
					<div class="form-group">
						<button class="btn btn-custom form-control">Sign Up</button>
					</div>
				</div>
			</div>
		</form>
	</div>
			
	
	<?php
		include("includes/footer.php");
	?>
</body>
</html>