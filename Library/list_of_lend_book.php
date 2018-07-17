<?php
	session_start();

	require 'server.php';
	if (!(isset($_SESSION['username']))){
    header("location:index.php");
	}
	$query="SELECT * FROM `book_list`";
     $result1=mysqli_query($db,$query);
	//$book_list=mysqli_fetch_array($result1);




?>
<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="style/bootstrap.min.css">
<meta charset="utf-8">
<title>Dash Board</title>
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
	
	
	<table class="table table-striped table-bordered table-condensed">
		
		<tr>
			<th>Book ID</th>
			<th>Book Name</th>
			<th>Author</th>
			<th>ISBN</th>
			<th>Category</th>
			<th>Added Date</th>
			<th>Status</th>
		
		</tr>
			<?php
			while($book_list=mysqli_fetch_array($result1)) {
				$id=$book_list['bookid'];
				$status=$book_list['status'];
				
				if($status!=null){
					echo "<tr>";
				echo "<td>".$book_list['bookid']."</td>";
				echo "<td>".$book_list['book_name']."</td>";
				echo "<td>".$book_list['author']."</td>";
				echo "<td>".$book_list['isbn']."</td>";
				echo "<td>".$book_list['category']."</td>";
				echo "<td>".$book_list['added']."</td>";
				echo "<td>"."Out of Library"."</td>";
			
				}
				
				
			}

			?>

	</table>
	
	
	
	
</body>
</html>