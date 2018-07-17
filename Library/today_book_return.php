<?php
	session_start();
	require 'server.php';
	if (!(isset($_SESSION['username']))){
    header("location:index.php");
	}
	$query="SELECT * FROM `lend` ";
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
			<th>Lended By</th>
			<th>Lend Date</th>
			<th>Return Date</th>
			<th>Returned</th>
			<th>Status</th>
			<th>Contact Lender </th>
		</tr>
			<?php
			while($book_list=mysqli_fetch_array($result1)) {
				
				$user=$book_list['person_name'];
				$query="SELECT * FROM `user_table` WHERE `username`='$user' ";
     			$result3=mysqli_query($db,$query);
				$re=mysqli_fetch_array($result3);
				$email=$re['email'];
				
				$status='';
				$status=$book_list['status'];
				if($status==0){
					$status="Out Of Store";
					
				}
				else
				{
					$status="Returened to store";
					
				}
	
				echo "<tr>";
				echo "<td>".$book_list['bookid']."</td>";
				echo "<td>".$book_list['book_name']."</td>";
				echo "<td>".$book_list['person_name']."</td>";
				echo "<td>".$book_list['lend_date']."</td>";
				echo "<td>".$book_list['return_date']."</td>";
				echo "<td>".$book_list['actual_return']."</td>";
				echo "<td>". $status."</td>";
				echo "<td> <a href='#'>$email</a> </td>";
				
				
				
			}

			?>

	</table>
	
	
	
	
</body>
</html>