<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title></title> 
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<header>
			<nav class="">
				<div class="">
					<ul class="">
						<li class=""><a href="index.php">Home</a></li>
						<li class=""><a href="http://216.24.181.167/">LeapEngine</a></li>
						<li class=""><a href="https://www.liujingming.site/projects/StereoBM/index.html">StereoBM</a></li>
						<li class=""><a href="https://youtu.be/njzsyzRcvrE">Video</a></li>
						<li class=""><a href="https://drive.google.com/file/d/1yya-2Vn3X7igl8RDRAnWyYIw_IWhqZSk/view?usp=sharing">Poster</a></li>
				</div>
			</nav>

			<div>
			<?php
				if (isset($_SESSION['userId'])) {
					//logged in 
					echo '<form action="includes/logout.inc.php" method="post">
					<button type="submit" name="logout-submit">Logout</button>
					</form>';
				}
				else {
					echo '<form action="includes/login.inc.php" method="post">
					<label>User Name</label>
					<input type="text" name="mailuid" placeholder="Username/Email...">
					<label>Password</label>
					<input type="password" name="pwd" placeholder="Password...">
					<button type="submit" name="login-submit">Login</button>					
					</form>
					<label id="account"> Do not have an account?</label>
					<a class="su" href="signup.php">Signup here!</a>';
				}
			?>
			</div>

			
		</header>






















