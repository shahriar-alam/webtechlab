<?php

  $username = $password = "";

  $usernameErr = $passwordErr = "";

  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    //check empty data
    if(empty($_POST["uName"]))
    {
      $usernameErr = "insert userid";
	  echo $usernameErr."<br>";
    }
    else
    {
      $username = test_input($_POST["uName"]);
	  echo $username."<br>";
    }
    if(empty($_POST["uPass"]))
    {
      $passwordErr = "insert password";
	  echo $passwordErr."<br>";
    }
    else
    {
      $password = test_input($_POST["uPass"]);
	  echo $password."<br>";
    }

  // database check
    if ($username != "" && $password != "")
    {
      $xml = simplexml_load_file('credential.xml');
	    $found = 0;
        foreach ($xml->person as $user)
        {    
         if ((string)$user->username == $username)
          {
            if ((string)$user->password == $password)
            {
              $found = 1;
              $name = (string)$user->name;
		          $utype = (string)$user->type;
		          $uid = (string)$user->id;
            }
            else
            {
              header('Location: login.php');
            }
          }
        }
        if ($found == 0)
        {
          header('Location: login.php');
        }
	    else
	    {
        session_start();

        $_SESSION["username"] = $username;
        $_SESSION["uname"] = $name;
		    $_SESSION["uid"] = $uid;
		    $_SESSION["utype"] = $utype;
        if($utype == 'teacher')
        {
			    header('Location: teacher.php');
		    }
        else
        {
		      header('Location: student.php');
		    }
	    }
    }
    else
    {
      header('Location: login.php');
    }
  }
 

  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
