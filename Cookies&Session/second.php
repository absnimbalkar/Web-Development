<?php
	
	setcookie("set1",$_POST['s1'],time()+3600);
	setcookie("set2",$_POST['s2'],time()+3600);
	setcookie("set3",$_POST['s3'],time()+3600);
	setcookie("set4",$_POST['s4'],time()+3600);
	
	echo"Style is  ".$_POST['s1']."<br>Size is     ".$_POST['s2']."<br>Font Color is   ".$_POST['s3']."<br>Background color is   ".$_POST['s4'];

	
?>
<html>
<head>
<body>
	<form action="third.php" method="POST">
	<input type="submit" name="submit">
</body>
