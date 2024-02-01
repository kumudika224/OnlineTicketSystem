<?php

include 'insert.php';

	if(!empty($_POST['From1']) && !empty($_POST['To1']) && !empty($_POST['Class1']) && !empty($_POST['PassengerDetails1']) && !empty($_POST['Price1']))
	{
		$From1=$_POST['From1'];
		$To1=$_POST['To1'];
        $Class1=$_POST['Class1'];
		$PassengerDetails1=$_POST['PassengerDetails1'];
		$Price1=$_POST['Price1'];
		
		
	}
	else
	{
		echo "one or more fields are not fields";
	}
	
if(isset($_POST['submit']))
{
	$qry="Insert into cart Values('$From','$To','$Class','$PassengerDetails','$Price')";
	
	
	if(!mysqli_query($con,$qry))
	{
		echo "Error".mysql_error();
	}
	else 
	{
		echo"record added to the database";
	}
}
?>