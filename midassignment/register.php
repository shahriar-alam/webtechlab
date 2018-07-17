<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
			<div id="header">
				<h1>Registration</h1>
			</div>
			<div id="main-content">
				<form action="registeruser.php" method="POST">
					<fieldset>
						<label>Username</label>
						<input type="text" name="uName">
					</fieldset>
					<fieldset>
						<label>Password</label>
						<input type="password" name="uPass">
					</fieldset>
					<fieldset>
						<label>Confirm Password</label>
						<input type="password" name="Confirm_uPass">
					</fieldset>
					<fieldset>
						<label>Full Name</label>
						<input type="text" name="uFullName">
					</fieldset>
          <fieldset>
						<label>Type</label><br>
						<input type="radio" name="utype" value="teacher" checked>teacher<br>
            <input type="radio" name="utype" value="student">student<br>
					</fieldset>
					<fieldset id="btn-fieldset">
						<input type="reset" name="" value="Reset">
						<input type="submit" name="" value="Register">
            <a href="login.php" >Home</a>
					</fieldset>
				</form>
			</div>
</body>
</html>
