<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Sign In</title>
	<link rel="stylesheet" href="style2.css">
</head>

<body>
	<div class="container">
		<form action="connection1.php" method="POST">
			<h1>Sign In</h1>
			<div class="input-field">
				<input type="text" placeholder="Username" name="username" required>
			</div>
			<div class="input-field">
				<input type="password" placeholder="Password" name="password" required>
			</div>
		<button type="button" onclick="window.location.href='index.php'">
			signin
		</button>

			<div class="forgot-password">
				<a href="#">Have you not register yet?</a>
				<button type="button" onclick="window.location.href='register.php'">
					Please Register
				</button>

			</div>
		</form>
	</div>
</body>

</html>