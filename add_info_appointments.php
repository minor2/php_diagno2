<?php

//to add info to database

//call first file first to establish connection
require "init.php";
//our database has 3 fields
$aadhar_id=$_POST["aadhar_id"];
$next_date=$_POST["next_date"];

//for sql query

//to add
$sql_query="insert into appointments values('$adhar_id','$next_date');";
//to insert
//connection variable and query
if(mysqli_query($con,$sql_query)) 
{
	echo "<br><h3>one row inserted</h3>";
}
else
{
		echo "data insertion error".mysqli_error($con); 
}
?>