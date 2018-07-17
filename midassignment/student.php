<?php
	session_start();

	if($_SESSION["utype"] != "student")
	{
		header('Location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Portal</title>
</head>
<body>
    <div>
		<fieldset>
			<label>Welcome <?php echo $_SESSION["uname"]; ?></label>
		</fieldset>
		</div>
		<div>
			<a href='givequiz.php'>Give Quiz</a>
            <a href='marks.php'>See Marks</a>
			<a href='logout.php'>Logout</a>
		</div>
</body>
</html>