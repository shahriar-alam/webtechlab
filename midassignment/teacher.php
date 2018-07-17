<?php
	session_start();

	if($_SESSION["utype"] != "teacher")
	{
		header('Location: login.php');
	}

	$xml = simplexml_load_file('quiz.xml');

	$i = 0;
	foreach ($xml->quiz as $id) 
	{
		$i++;
	}
	$i++;
	$_SESSION['qid'] = $i;
	$_SESSION['status'] = 'false';
?>
<!DOCTYPE html>
<html>
	<head>
			<title>teacher Portal</title>
	</head>
	<body>
		<div>
			<fieldset>
				<label>Welcome <?php echo $_SESSION["uname"]; ?></label>
			</fieldset>
		</div>
		<div>
			<a href='createquiz.php'>Create Quiz</a>
			<a href='logout.php'>Logout</a>
		</div>
	</body>
</html>