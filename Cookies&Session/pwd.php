<html>
<head>
<title> Change Prefernces</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

	FORM LOGIN<br>
	Enter Username:<input type="text" name="uname"><br>
    Enter Password:<input type="text" name="pwd"><br>


	<input type="submit" name="submit">
</form>
</body>
</html>
<?php
	session_start();

	if(!isset($_POST['uname']))
	{
	$_SESSION['chance']=0;
	}
	else
	$_SESSION['chance']+=1;
			
	if(($_SESSION['chance']>3) && $_POST['uname']=="abc" && $_POST['pwd']=="ABC@123")
		{
		header("LOCATION:http://192.168.1.21/ty1/wd_ty1/check_user.php");
		}	
	else if($_SESSION['chance']>=3)
		{
		echo"Error";
		}
	
?>
