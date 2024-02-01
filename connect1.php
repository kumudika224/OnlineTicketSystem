<?php

include 'insert.php';

	
	
if(isset($_POST ['submit']))
{
    if(!empty($_POST['uname'])  && !empty($_POST['password']))
	{
		
		$uname=$_POST['uname'];
		$password=$_POST['password'];
		
		
	}
	else
	{
		echo "one or more fields are not fields";
	}
	$qry="select * from register where  uname='$uname' and password='$password'";
$result = mysqli_query( $con, $qry);
    $rows = mysqli_num_rows($result);
    $data = mysqli_fetch_array($result);
	if($rows == 1)
	{
		header('Location:sho%20cart.html');
	}
	else 
	{
		echo"Error!!!!";
	}
}
?>