<?php

    session_start();

    if($_SESSION["utype"] != "student")
	{
		header('Location: login.php');
	}

    if($_SESSION['ans'] == $_POST['ans'])
    {
        $_SESSION['mark'] = $_SESSION['mark'] + 1;
        $_SESSION['correct'] = $_SESSION['correct'] + 1;
        $_SESSION['i'] = $_SESSION['i'] + 1;
    }
    else
    {
        $_SESSION['wrong'] = $_SESSION['wrong'] + 1;
        $_SESSION['i'] = $_SESSION['i'] + 1;
    }
    header('Location: questions.php');

?>