<?php

include 'insert.php';

	if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['uname']) && !empty($_POST['password']))
	{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$uname=$_POST['uname'];
		$password=$_POST['password'];
		
		
	}
	else
	{
		echo "one or more fields are not fields";
	}
	
if(isset($_POST ['submit']))
{
	$qry="Insert into register Values('$fname','$lname','$email','$uname','$password')";
	
	
	if(!mysqli_query($con,$qry))
	{
		echo "Error".mysql_error();
	}
	else 
	{
		echo"successfully registered";
	}
}
?>