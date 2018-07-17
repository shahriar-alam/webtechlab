<?php
	 session_start();
	require 'server.php';
	$rs_result=''; 
	if (!(isset($_SESSION['username']))){
    header("location:index.php");
	}

	if(isset($_GET['submit'])){
		$input=$_GET['search'];
	
		$sql = "SELECT * FROM `book_list` WHERE `book_name` LIKE  '%$input%' OR `bookid` Like '%$input%' OR `author` Like '%$input%'"; 
		$rs_result = mysqli_query ($db,$sql);
		//$result1=mysqli_fetch_array($rs_result);

	}

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
		  <a class="nav-link" href="today_book_return.php">Today's Return Book</a>
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
			<td colspan="8">
			<form method="get" action="search.php" style="float:right">
			<input type="text" name="search" placeholder="Book Name or Author" class="input-sm"/>
			<input type="submit" name="submit" value="Search" class="btn btn-success"/>
			</form>
			</td>
		</tr>
		<tr>
			<th>Book ID</th>
			<th>Book Name</th>
			<th>Author</th>
			<th>ISBN</th>
			<th>Category</th>
			<th>Added Date</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
		
			<?php
		//echo $_SESSION['un'];
			while($book_list=mysqli_fetch_array($rs_result)) {
				$id=$book_list['bookid'];
				$status=$book_list['status'];
				
				if($status==null){
					$status='Available at Store';	
					echo "<tr>";
				echo "<td>".$book_list['bookid']."</td>";
				echo "<td>".$book_list['book_name']."</td>";
				echo "<td>".$book_list['author']."</td>";
				echo "<td>".$book_list['isbn']."</td>";
				echo "<td>".$book_list['category']."</td>";
				echo "<td>".$book_list['added']."</td>";
				echo "<td>".$status."</td>";
				echo "<td> <a href='lend.php?id=$id'>Lend This Book</a> </td>";
				}				
			}
			?>
		
		

	</table>
	
</body>
</html>