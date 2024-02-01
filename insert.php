<?php 

$con=mysqli_connect ("localhost","root","","signup");

	if (mysqli_connect_errno())
	{
		echo "Error".mysqli_connect_errno();
	}
	else
	{
		echo "ok<br>";
	}
	
?>