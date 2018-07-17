<?php
  $usernameErr = $passwordErr = $passwordConfirmErr = $fullNameErr = $sameUserName = $typeErr = "";
  $username = $password = $type = $fullName = "";

  if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		// Name Data check
		if(empty($_POST["uName"]))
		{
			$usernameErr = "username can not be empty.";
		}
		else
		{
			// same username check
			$xml1 = simplexml_load_file('credential.xml');
			$i=1;
			foreach ($xml1->person as $user) {
				$i++;
				if ($user->username == $_POST["uName"]) {
					$sameUserName = "same user name exist.";
				}
				else
				{
					$username = test_input($_POST["uName"]);
				}
			}
			//end same username check
		}

		//Password Data check
		if(empty($_POST["uPass"]))
		{
			$passwordErr = "Password can not be empty.";
		}
		else
		{
			if ($_POST["uPass"] != $_POST["Confirm_uPass"]) {
				$passwordConformErr = "Password not matched.";
			}
			else
			{
				$password = test_input($_POST["uPass"]);
			}
		}



		//Full Name Data check
		if(empty($_POST["uFullName"]))
		{
			$fullNameErr = "Fullname can not be empty.";
		}
		else
		{
			$fullName = test_input($_POST["uFullName"]);
		}

    $type = $_POST["utype"];

		// Data insert if any field is not empty
		if($usernameErr== "" && $passwordErr== "" && $passwordConfirmErr== "" &&  $fullNameErr=="" && $sameUserName=="")
		{

			$xml1 = simplexml_load_file('credential.xml');
			$user1 = $xml1->addChild('person');
      		$user1->addChild('id',$i);
      		$user1->addChild('name',$fullName);
			$user1->addChild('type',$type);
			$user1->addChild('username',$username);
			$user1->addChild('password',$password);

			file_put_contents('credential.xml', $xml1->asXML());

      		header('Location: login.php');

		}
		else
		{
      		header('Location: register.php');
		}
	}


	// Function
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
?>
