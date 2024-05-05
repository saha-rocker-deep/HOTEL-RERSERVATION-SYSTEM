<html>
<?php
if(isset($_POST['submit1'])){
echo $_POST['hidd1'];
echo $_POST['k'];
$p=$_POST['hidd1'];
$q=$_POST['k'];
$conn=mysqli_connect("localhost","deep","0234aniket","hotel system");
$sql="SELECT fno, rname ,checkin, checkout from bookingroom where rname='$p'and fno='$q'";
 if($sql){
 
 }
 else{
 }

if(!$conn){
   
}

  
else{

}
if(mysqli_query($conn,$sql)){
   $result=mysqli_query($conn,$sql);?>
   
<div class="container"><table>

<tr>
    <td>bookingcheckin </td>
    <td> bookingcheckout</td>
    <td> floorno</td>
    <td>roomname </td>
</tr>
  
  <?php
   while($row=mysqli_fetch_array($result)){
       ?>

<tr>
  <td><?php echo $row['checkin'] ?> </td>
  <td><?php echo $row['checkout'];?></td>
  <td><?php echo $row['fno'];?></td>
  <td><?php echo $row['rname'];?> </td>
   </tr>
  


     


     


    


     
<?php

   }?>
   tr>
<td><?php echo "empty" ?> </td>
<td><?php echo "empty";?></td>
<td><?php  echo $_POST['k'];?></td>
<td><?php echo $_POST['hidd1'];;?> </td>
 </tr>
  

   </table></div>
   <?php
}
 else{
      echo "query not reaching";
 }



}
else{
    echo "no exsistence  of page";
 }
?>
<div class="con2">
     <form action="booking.php" method="POST">
         <input type="hidden" name="f" value="<?php echo $_POST['k']; ?>">
         <input type="hidden" name="r" value="<?php echo $_POST['hidd1']; ?>">
 <input type="submit" name="submit2" value="BACK" class="button" >
</form> 
</div>
 <style>

    tr {
    display: flex;
    gap: 150px;
    height:300px;
    border: 9px solid black;
    background:linear-gradient(hwb(304 24% 71% / 0), red);
}

td {
    width: 1100px;
    height: 100%;
    border: 9px solid black;
    font-size:105px;
background:linear-gradient(hwb(304 24% 71% / 0), blue);
font-weight:bolder;
font-family:italic;
color:white;
}




.container{
    width:100%;
 height:100%;
 
.}
.button{
     width:600px;
      height:100px;
      margin-bottom:500px;
       font-size: 55px;
       background:linear-gradient(hwb(304 24% 71% / 0), PINK);
}


body{ 
    background:linear-gradient(hwb(304 24% 71% / 0), yellow);
     display:flex;
      flex-direction: column;
       justify-content:center;
        align-items: center;

}



.con2{
     
}


















 </style>
 <script>

     function f2(){
          window.location="booking.php";
     }
 </script>
</html>