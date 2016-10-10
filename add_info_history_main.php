<?php

//to add info to database

//call first file first to establish connection
require "init.php";
//our database has 3 fields
$adhar_id=$_POST["adhar_id"];
$packet_id=$_POST["packet_id"];


//for sql query

//to add
$sql_query="insert into history_main values('$adhar_id','$packet_id');";
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