<?php

$db_name="a2276006_diagno";
$mysql_user="a2276006_jon";
$server_name="mysql4.000webhost.com";
$con=mysqli_connect($server_name,$mysql_user,"qwe123",$db_name);

if(!$con)
{
	die("error in connection".mysqli_connect_error());
}

$check=$_POST["check"];

$sql="select * from appointments where aadhar_id=$check;";


$result=mysqli_query($con,$sql);

$response=array();

while($row=mysqli_fetch_array($result))
{
	//make name value pair
	array_push($response,$row[1]);
	
}

//encode into json

echo json_encode(array("server_response"=>$response));

mysqli_close($con);

?>
