<?php

$floor=$_POST['t1'];
if($floor!=""){
echo $floor;

$conn=mysqli_connect("localhost","deep","0234aniket","hotel");

if(!$conn){
 echo "notconnect db";
}

else{
echo "connect db";
}
$sql="SELECT floorno,roomname,bedroom,bathroom,kitchen,roomprice,roomtype FROM floor inner join roomfloor where floor.floor=roomfloor.floorno and floorno='{$_POST['ID']}";
$sql2="SELECT floorno,roomname,bedroom,bathroom,kitchen,roomprice,roomtype  FROM roomfloor where roomfloor.floorno='$floor'";

$result=mysqli_query($conn,$sql2);
if($result){

echo "sucees2";
}
else{
    echo "unsucess";
}

$count=0;
$response=array();
while($row=mysqli_fetch_array($result))
{
 $response[]=$row;
   
}
echo json_encode($response);
}

?>
