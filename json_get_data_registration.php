
<?php
//get info from databasse as table and then encode in json
require "init.php";

$check=$_POST["check"];

$sql="select * from Registration where adhar_id=$check;";


$result=mysqli_query($con,$sql);

$response=array();

while($row=mysqli_fetch_array($result))
{
	//make name value pair
	array_push($response,array("adhar_id"=>$row[0],"name"=>$row[1],"age"=>$row[2],"residence"=>$row[3],"gender"=>$row[4],"profile_pic"=>$row[5]));
	
}

//encode into json

echo json_encode(array("server_response"=>$response));

mysqli_close($con);

?>
