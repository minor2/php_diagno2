<?php

//to add info to database

//call first file first to establish connection
require "init.php";
//our database has 3 fields
$adhar_id=$_POST["adhar_id"];
$name=$_POST["name"];
$age=$_POST["age"];
$residence=$_POST["residence"];
$gender=$_POST["gender"];
$profile_pic=$_POST["profile_pic"];

//for sql query

//to add
$sql_query="insert into Registration values('$adhar_id','$name','$age','$residence','$gender','$profile_pic');";
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