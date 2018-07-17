<?php

	session_start();

	include 'server.php';

	$id=$_GET['id'];
	$returned=(new DateTime())->format('YmdHis');

	
	$sql2="UPDATE `book_list` SET `status`=NULL WHERE `bookid`=$id";
    mysqli_query($db,$sql2); 

	$sql3="UPDATE `lend` SET `status`=1 WHERE `bookid`=$id";
    mysqli_query($db,$sql3); 
	
	$sql4="UPDATE `lend` SET `actual_return`=$returned WHERE `bookid`=$id";
    mysqli_query($db,$sql4);

	header('location:my_lend.php');

?>