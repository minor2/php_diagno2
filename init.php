<?php
//create some variable
//database name
$db_name="a2276006_diagno";
//username of mysql database
$mysql_user="a2276006_jon";
//server name
$server_name="mysql4.000webhost.com";

//establish connection therefore
$con=mysqli_connect($server_name,$mysql_user,"qwe123",$db_name);

if(!$con)
{
	//echo "connection error".mysql_connect_error();
	//to print the error
	die("error in connection".mysqli_connect_error());
}
else 
{
	//echo "<br><h3>database connection success ......</h3>";
}

?>