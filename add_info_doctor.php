<?php

//to add info to database

//call first file first to establish connection
require "init.php";
//our database has 3 fields
$id=$_POST["id"];
$name=$_POST["name"];
$hospital=$_POST["hospital"];
$job=$_POST["job"];
$location=$_POST["location"];
$hospital_id=$_POST["hospital_id"];

//for sql query

//to add
$sql_query="insert into doctor values('$id','$name','$hospital','$job','$location','$hospital_id');";
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