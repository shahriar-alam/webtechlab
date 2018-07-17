<?php

	$book_id='';
	$book_name='';
	$author='';
	$isbn='';
	$category='';
	$datetime='';
	$error=0;
	$errmsg=array();
	$book_id_auto='';

	include 'server.php';

		$query="SELECT * FROM `book_list` WHERE `id`=(SELECT MAX(id) FROM `book_list`)";
        $result1=mysqli_query($db,$query);
		$book_id=mysqli_fetch_array($result1);
		$book_id_auto=$book_id['bookid']+1;

	if(isset($_POST['ssubmit'])){
				$book_id=$_POST['book_id'];
				$book_name=$_POST['book_name'];
        $author=$_POST['author'];
        $isbn=$_POST['isbn'];
        $category=$_POST['category'];
        $datetime=$_POST['datetime'];
	

        if(empty($book_id)){
           array_push($errmsg,"* book_id  is required");
            $error++;
				}
		if(empty($book_name)){
			array_push($errmsg,"*  book_name is required");
			$error++;
			}
        if(empty($author)){
            array_push($errmsg,"* author is required");
            $error++;
        }
		
		   if(empty($category)){
            array_push($errmsg,"* category is required");
            $error++;
        }
		   if(empty($datetime)){
            array_push($errmsg,"* datetime is required");
            $error++;
        }



        if($error==0){
            $sql="INSERT INTO `book_list`(`bookid`, `book_name`, `author`, `isbn`, `category`, `added`) 
                    VALUES ('$book_id','$book_name','$author','$isbn','$category','$datetime')";
        mysqli_query($db,$sql);
        array_push($errmsg,"Added Up Successful!!!!");
			header('location:addbook.php');

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
		  <a class="nav-link" href="dashboard.php">DashBoard</a>
		</li>
		  <li class="nav-item">
		  <a class="nav-link" href="addbook.php">Add Book</a>
		</li>

		<li class="nav-item">
		  <a class="nav-link" href="list_of_lend_book.php">List Of Lend Book</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="today_book_return.php">Detail's of Lend</a>
		</li>
		    <li class="nav-item">
		  <a class="nav-link" href="my_lend.php">My Lend</a>
		</li>
		    <li class="nav-item">
		  <a class="nav-link" href="logout.php">Log Out</a>
		</li>
	  </ul>

	</nav> 
	
	
	
	<div id="content"  style="background: url(body.jpg); background-size: 100%;  background-repeat: no-repeat" > 
			
			<div class="container" style="padding-top: 20px">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-4">
						<form method="POST" action="addbook.php">
						  <div class="panel panel-success">

							<div class="panel-body">
							  <div class="form-group">
								<label>Book ID</label>
								<input type="text" name="book_id" class="form-control" value="<?php echo $book_id_auto; ?>" readonly >
							  </div>
							  <div class="form-group">
								<label>Book Name</label>
								<input type="text" name="book_name" class="form-control" >
							  </div>
							  <div class="form-group">
								<label>Author</label>
								<input type="text" name="author" class="form-control">
							  </div>
							   <div class="form-group">
								<label>ISBN</label>
								<input type="text" name="isbn" class="form-control">
							  </div>

							   <div class="form-group">
								<label>CATEGORY</label>
								<input type="text" name="category" class="form-control">
							  </div>
							  <div class="form-group">
								<label>ADDING TIME</label>
								  
								<input type="text" name="datetime" class="form-control" value="<?php echo (new DateTime())->format('Y-m-d H:i:s');?>" readonly>
							  </div>
							  
							  <div class="form-group">
								<input type="submit" name="ssubmit" class="form-control btn btn-success" value="Add Book">
							  </div>

							</div>
						  </div>
						</form>
					  </div>
					  <div class="col-md-4"> <?php if(count($errmsg)>0){print_r($errmsg);} ; ?></div>
					</div>
				</div>
		
		
		</div>
		<div id="footer"  style="border: 2px black dotted; height:50px; text-align: center">
			<footer>&copy; Copyright 2018 <a href="#">Faisal,Milon,Shatu &amp; Kaiyum</a></footer>

		</div>
	
	
</body>
</html>