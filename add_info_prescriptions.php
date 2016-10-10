<?php

//to add info to database

//call first file first to establish connection
require "init.php";
//our database has 3 fields
$packet_id=$_POST["packet_id"];
$date=$_POST["date"];
$hospital_name=$_POST["hospital_name"];
$hospital_id=$_POST["hospital_id"];
$doctor_name=$_POST["doctor_name"];
$diseases=$_POST["diseases"];
$special_remarks=$_POST["special_remarks"];
$medication=$_POST["medication"];

//for sql query

//to add
$sql_query="insert into prescriptions values('$packet_id','$date','$hospital_name','$hospital_id','$doctor_name','$diseases','$special_remarks','$medication');";
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