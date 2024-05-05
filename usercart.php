



<?php



 echo "my  cart";
 session_start();
 echo "welcome".$_SESSION['user'];
 
 $conn=mysqli_connect("localhost","deep","0234aniket","hotel system");

$user=$_SESSION['user'];
 $sql="SELECT username,password,email,name from signiup where username='$user'";
 


if(mysqli_query($conn,$sql)){
     $result=mysqli_query($conn,$sql);
     while($row=mysqli_fetch_array($result)){
          ?>
<div class="container">
<div class="text">
    MY HOTEL BOOKING  CART
</div>
<table>

<tr>
    <td><?php echo $row['username'] ;?></td>
    <td><?php echo $row['name'] ;?></td>
    <td><?php echo $row['email'] ;?></td>
    <td><?php echo $row['password'] ;?></td>
    <td>
    <?php $sql2="SELECT * FROM bookingroom where uid='$user'";
       if(mysqli_query($conn,$sql2)){?>
   
        <button style="font-size:120px;background:pink;border-radius:23px;" type="button" onclick='f1()'>click</button>
    
<?php

} 
 else
{
    
    ?>
 <div>no status</div>

<?php

} ?>

 </td>
     </tr>
     </table>

     </div>

    <?php }
}
?>
<div class="con2">
<div class="ll">
    GET IN TOUCH
</div>
<div  class="lp">
<div class="u1">
    <div>ADDRESS</div>
    <div class="f">D-204, HOLE TOWN SOUTH WEST<br>
     ,DELHI,110096,INDIA</div>
</div>
<div class="u2"> <div>SALES</div>
 <div class="f">TELEPHONE:7439070169<br>
  EMAIL:HOTELBEAUTY@GMAIL.COM</div></div>
<div class="u3"><div>ABOUT US</div>
<div class="f">WE HAVE 72 COMFORTABLY EQUIPPED ROOMS, INCLUDING<br>
 TWO STUDIES:</div></div>


</div>
</div>
<style>
    .text{
         font-size:228px;
         color:white;
         margin-left:1300px;

    }
    body{
        background:    
linear-gradient(hwb(304 24% 71% / 0), blue);
    }
    tr {
    display: flex;
    gap: 150px;
    border: 9px solid black;
    background:linear-gradient(hwb(304 24% 71% / 0), red);
    position:relative;
    top:1600px;
}

td {
    width: 830px;
    height:200px;
    border: 9px solid black;
    font-size:120px;
background:linear-gradient(hwb(304 24% 71% / 0), blue);
font-weight:bolder;
font-family:italic;
color:white;
}


.container{
    width:100%;
    height:70%;
    background:url("tool.jpg");
    background-repeat:no-repeat;
    background-size: cover;

}
.con2{
    width:100%;
    height:30%;
    background:linear-gradient(hwb(304 24% 71% / 0), blue);
    display:flex;
 
 flex-direction:column;

 gap:30px;



}
.ll{
 font-size:190px;
 margin-left: 2000px;

}
.lp{
    display:flex;
 margin-left:360px;
 
 gap:390px;
    font-size:190px;
}
.U1,.U2,.U3{
    display:flex;
 gap:67px;
 flex-direction:column;
}

.f{
     font-size:90px;
}
    </style>

    <script> 
  function f1(){
    window.location="userinformation.php";
  }
 </script>