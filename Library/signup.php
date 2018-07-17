<?php 
   
    $fname='';
    $lname='';
	$username='';
    $email='';
    $password='';
    $error=0;
	$errmsg=array();


    include 'server.php';

// when register button is clicked
    if(isset($_POST['ssubmit'])){
				$fname=$_POST['fname'];
				$lname=$_POST['lname'];
        $email=$_POST['email'];
        $username=$_POST['username'];
        $password1=$_POST['pass1'];
        $password2=$_POST['pass2'];
	

        if(empty($fname)){
           array_push($errmsg,"* First name is required");
            $error++;
				}
		if(empty($lname)){
			array_push($errmsg,"* Last name is required");
			$error++;
			}
        if(empty($username)){
            array_push($errmsg,"* username is required");
            $error++;
        }
		//email syntax check
		if($email){
			$v = "/[a-zA-z0-9.-]+\@[a-zA-z0-9.-]+.[a-zA-Z]+/";
			if(!(preg_match($v, $email))){
				array_push($errmsg, "* not a valid e mail address");
            	$error++;
			}
			
		}
		
		// duplicate username check
		$query="SELECT * FROM `user_table` WHERE `username`='$username'";
        $result1=mysqli_query($db,$query);
         
        if (mysqli_num_rows($result1) == 1) {
           array_push($errmsg,"username already Exist");
			$error++;
          }

        if(empty($password1)){
            array_push($errmsg,"* password is required");
            $error++;
        }

        if($password1 != $password2){
            array_push($errmsg,"* password didn\'t match");
            $error++;
        }

        if($error==0){
            $sql="INSERT INTO `user_table`(`firstname`, `lastname`, `email`, `username`, `password`) 
                    VALUES ('$fname','$lname','$email','$username','$password1')";
        mysqli_query($db,$sql);
        array_push($errmsg,"Sign Up Successful!!!!");

            }
    }

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" href="style/bootstrap.min.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Index</title>
</head>

<body>
	
	<nav class="navbar navbar-expand-sm bg-light">
		
	  <ul class="navbar-nav">
		<li class="nav-item">
		  <a class="nav-link" href="Index.php">Home</a>
		</li>
		
		
		<li class="nav-item">
		  <a class="nav-link" href="signup.php">Signup</a>
		</li>
	  </ul>

	</nav> 
	
	<div id="main-parent" height="100%">
		
		
		<div id="content"  style="background: url(body.jpg); background-size: 100%;  background-repeat: no-repeat " > 
			
			<div class="container" style="padding-top: 20px">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-4">
						<form method="POST" action="signup.php">
						  <div class="panel panel-success">

							<div class="panel-body">
							  <div class="form-group">
								<label>First Name</label>
								<input type="text" name="fname" class="form-control">
							  </div>
							  <div class="form-group">
								<label>Last Name</label>
								<input type="text" name="lname" class="form-control">
							  </div>
							  <div class="form-group">
								<label>Email</label>
								<input type="text" name="email" class="form-control">
							  </div>
							   <div class="form-group">
								<label>User Name</label>
								<input type="text" name="username" class="form-control">
							  </div>

							   <div class="form-group">
								<label>Password</label>
								<input type="password" name="pass1" class="form-control">
							  </div>
							  <div class="form-group">
								<label>Retype Password</label>
								<input type="password" name="pass2" class="form-control">
							  </div>
							  
							  <div class="form-group">
								<input type="submit" name="ssubmit" class="form-control btn btn-success" value="signup">
							  </div>

							</div>
						  </div>
						</form>
					  </div>
					  <div class="col-md-4"> <?php if(count($errmsg)>0)print_r($errmsg)?></div>
					</div>
				</div>
		
		
		</div>
		<div id="footer"  style="border: 2px black dotted; height:50px; text-align: center">
			<footer>&copy; Copyright 2018 <a href="#">Faisal,Milon,Shatu &amp; Kaiyum</a></footer>

		</div>
	</div>
</body>
</html>
