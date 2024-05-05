<div  class="user"> USER INFORMTAION </div>
<?php
 
 $conn=mysqli_connect("localhost","deep","0234aniket","hotel system");


session_start();
 $user=$_SESSION['user'];

$sql="SELECT *  FROM bookingroom where uid='$user'";
 echo $user;
$result=mysqli_query($conn,$sql);
 if(!$result){
        echo "not ok";
 }
   
   else{
        echo "ok";
   }
   while($row=mysqli_fetch_array($result)){
?>
<div class="container">
<table><tr>
  <tr >    <td class="pp">bookingid: <?php echo $row['bookingno'] ;?></td>  <tr>
 <tr>  <td> name:<?php echo $row['name'] ;?></td>
    <td>mobile:<?php echo $row['mobile'] ;?></td>
    <td>email:<?php echo $row['email'] ;?></td></tr>
   <tr> <td>id:<?php echo $row['id'] ;?></td>
   <td>gender: <?php echo $row['gender'] ;?></td>
   <td>address <?php echo $row['address'] ;?></td></tr>
  <tr><td>  checkin:<?php echo $row['checkin'] ;?></td>
   <td> checkout:<?php echo $row['checkout'] ;?></td>
   <td> roomname: <?php echo $row['rname'] ; $_SESSION['r'] =$row['rname'];?></td></tr>
   <tr> <td>floorno:<?php echo $row['fno'] ;?></td>
   

   
<?php
   }
 
    $p=$_SESSION['r'];
        $sql3="SELECT * FROM  floorroom where roomname='$p'";
     $result3=mysqli_query($conn,$sql3);
     while($row=mysqli_fetch_array($result3)){

?>

<tr>  <td> floorname:<?php echo $row['floorno'] ;?></td>
   <td>roomname:<?php echo $row['roomname'] ;?></td></tr>
 <tr>  <td>bedroom:<?php echo $row['bedroom'] ;?></td>
   <td>bathroom:<?php echo $row['bathroom'] ;?></td></tr>
 <tr> <td>kitchen: <?php echo $row['kitchen'] ;?></td>
  <td>roomtype: <?php echo $row['roomtype'] ;?></td></tr>
 <tr><td>  roomprice:<?php echo $row['roomprice'] ;?></td>
  <td class="box" style="height:600px;"> roomimage:<img src="<?php echo $row['roomimage'] ;?>" width="100%" height="400px;"></td></tr>
 
 


    <?php }


   




?>


</div>
<?php
$sql2="SELECT  * FROM signiup where username='$user'";
$result1=mysqli_query($conn,$sql2);

while($row=mysqli_fetch_array($result1)){
       ?>
<div class="conta">
<table>
<tr> <td>

user information
</td></tr>
<tr>
    <td>
       name: <?php  echo $row['name'];?>
    </td>
    <td>
   <?php  echo $row['email'];?>
</td>
</tr>

</table>
<div>

<?php
}


?>












></td></tr>




       <style>
           .container{
                
            margin-left:650px;
            position:relative;
         bottom:1500px ;           }
           body{
                
            backgr
                
                
            
           }
.box{

}
tr {
    display: flex;
    gap: 150px;
    border: 9px solid black;
    background:linear-gradient(hwb(304 24% 71% / 0), red);
    position:relative;
    top:1600px;
    
    
}

.user{

    font-size:145px;
    margin-left:2030px;

}


td {
    width: 100%;
    height:200px;
    border: 9px solid black;
    font-size:120px;
background:linear-gradient(hwb(304 24% 71% / 0), blue);
font-weight:bolder;
font-family:italic;
color:white;
}
.pp{
    display: flex;
    flex-direction:row;
    justify-content:center;
}

.conta{
     position: relative;
      top:430px;
}
body{
      background:url("ht.jpg");
      background-repeat:no-repeat;
      background-size: cover;
}
           </style>













 































