<?php
       session_start();

	
	echo "cust name - ".$_SESSION['name']."<br>";
	echo "cust address - ".$_SESSION['add']."<br>";
	echo "cust mobile no - ".$_SESSION['no']."<br>";

	echo "prod name - ".$_POST['pno']."<br>";
	echo "prod qty - ".$_POST['pqty']."<br>";
	echo "prod rate - ".$_POST['rate']."<br>";



	session_destroy();
?>

