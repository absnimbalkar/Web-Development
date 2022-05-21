<?php
	session_start();
	
	$_SESSION['no']=$_POST['cno'];
	$_SESSION['name']=$_POST['cname'];
	$_SESSION['add']=$_POST['cadd'];
?>
 
<html>
<head>
<title> Prod info</title>
</head>
<body>
	<form action="bill.php" method="POST">

	Enter prod name:<input type="text" name="pno"><br>
    Enter  qty:<input type="text" name="pqty"><br>
	Enter  rate:<input type="text" name="rate"><br>
	
	<input type="submit" name="submit">
</form>
</body>
	
