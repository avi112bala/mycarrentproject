<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" href="style3.css">
</head>

<body>
	<div class="container">
		<form action="connection2.php" method="POST">
			<h1>Register</h1>
			<div class="input-field">
				<input type="text" placeholder="Full Name" name="name" required>
			</div>
			<div class="input-field">
				<input type="text" placeholder="Email" name="email" required>
			</div>
			<div class="input-field">
				<input type="password" placeholder="Password" name="password" required>
			</div>
			<div class="input-field">
				<input type="password" placeholder="Confirm Password" name="confirm-password" required>
			</div>
			<button type="submit" onclick="window.location.href='index.php'">
			 Register
			</button>
			<div class="login-link">
				<p>Already have an account? <a href="signin.php">signin</a></p>
			</div>
		</form>
	</div>
</body>

</html>