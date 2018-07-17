<?php 
    session_start();
	$username='';
    $password='';
    $error=0;
	$errmsg=array();


    include 'server.php';

// when register button is clicked
    if(isset($_POST['ssubmit'])){

        $username=$_POST['username'];
        $password=$_POST['password'];

	


        if(empty($username)){
            array_push($errmsg,"* username is required");
            $error++;
        }


        if(empty($password)){
            array_push($errmsg,"* password is required");
            $error++;
        }

  

        if($error==0){
       		$query="SELECT * FROM `user_table` WHERE `username`='$username' and `password`='$password'";
			$result1=mysqli_query($db,$query);
			//echo "hello";

			if (mysqli_num_rows($result1) == 1) {
				$_SESSION['username']=$username;
				header('location:dashboard.php');
				
			  
			  }

            }
    }

?>


<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="style/bootstrap.min.css">
	
	
<meta charset="utf-8">
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
	
	
	
	<div id="content"  style="background: url(body.jpg); background-size: 100%;  background-repeat: no-repeat" > 
			
			<div class="container" style="padding-top: 20px">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-4">
						<form method="POST" action="index.php">
						  <div class="panel panel-success">

							<div class="panel-body">
							  
							  
							  
							   <div class="form-group">
								<label>USER NAME</label>
								<input type="text" name="username" class="form-control">
							  </div>

							   <div class="form-group">
								<label>PASSWORD</label>
								<input type="password" name="password" class="form-control">
							  </div>
							 
							  
							  <div class="form-group">
								<input type="submit" name="ssubmit" class="form-control btn btn-success" value="Login">
							  </div>

							</div>
						  </div>
						</form>
					  </div>
					  <div class="col-md-4"> <?php if(count($errmsg)>0)print_r($errmsg)?></div>
					</div>
				</div>
		
		
		</div>
	
	
</body>
</html>