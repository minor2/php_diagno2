<?php
//get info from databasse as table and then encode in json
require "init.php";

$check=$_POST["check"];

$sql="select * from history_main where adhar_id=$check;";


$result=mysqli_query($con,$sql);

$response=array();

while($row=mysqli_fetch_array($result))
{
	array_push($response,$row[1]);	
}


echo"\n\n\n\n\n";
echo"\n\n\n\n\n";


//$cars=array("Volvo","BMW","Toyota");
$arrlength=count($response);

for($x=0;$x<$arrlength;$x++)
  {
  $sql2="select * from prescriptions where packet_id=$response[$x];";
  $result2=mysqli_query($con,$sql2);
  $response2=array();
  while($row2=mysqli_fetch_array($result2))
    {
	array_push($response2,array("date"=>$row2[1],"hospital_name"=>$row2[2],"hospital_id"=>$row2[3],"doctor_name"=>$row2[4],"diseases"=>$row2[5],"special_remarks"=>$row2[6],"medication"=>$row2[7]));
    }
  echo json_encode(array("server_response"=>$response2));
  }


///////////////////////////////////////////////////////encode into json

//echo json_encode(array("server_response"=>$response));

mysqli_close($con);

?>
