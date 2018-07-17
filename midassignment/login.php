<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <div id="main-content">
		<form action="logincheck.php" method="POST">
			<fieldset>
				<label>Username</label>
				<input type="text" name="uName">
			</fieldset>
			<fieldset>
		    	<label>Password</label>
				<input type="password" name="uPass">
			</fieldset>
			<div id="submit_div">
				<input type="submit" name="" value="Log In">
			</div>
			<div id="reg_div">
				<a href="register.php">Register</a>
			</div>
		</form>
	</div>
</body>
</html>
