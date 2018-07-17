<?php
	session_start();
	$book_id='';
	$book_name='';
	$author='';
	$isbn='';
	$category='';
	$datetime='';
	$status='';
	$username=$_SESSION['username'];
	include 'server.php';
	
	$id=$_GET['id'];
	$query="SELECT * FROM `book_list` WHERE `bookid`=$id";
	$result1=mysqli_query($db,$query);
	$book_list=mysqli_fetch_array($result1);

	$book_id=$book_list['bookid'];
	$book_name=$book_list['book_name'];
	$author=$book_list['author'];
	$isbn=$book_list['isbn'];
	$category=$book_list['category'];
	$datetime=$book_list['added'];
	$status=$book_list['status'];
	$date=(new DateTime())->format('YmdHis');
	$return_date='';

	if($status==null){
		$lend_date=(new DateTime())->format('YmdHis');
		$startDate = time();
		$return_date=date('Y-m-d H:i:s', strtotime('+3 day', $startDate));
        
     $sql="INSERT INTO `lend`(`bookid`, `book_name`,`person_name`, `lend_date`, `return_date`) 
            VALUES ('$book_id','$book_name','$username','$lend_date','$return_date')";
     mysqli_query($db,$sql);
	header('location:dashboard.php');
		
	}
	else{
		echo "Book is not available at store";
		
	}
	
	$sql2="UPDATE `book_list` SET `status`='1' WHERE `bookid`=$book_id";
    mysqli_query($db,$sql2);         

?>