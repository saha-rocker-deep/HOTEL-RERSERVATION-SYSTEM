<div  class="user"> VIEW BOOKING </div>
<?php
 
 $conn=mysqli_connect("localhost","deep","0234aniket","hotel system");





$sql="SELECT *  FROM bookingroom";
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
  <td class="pp">bookingid: <?php echo $row['bookingno'] ;?></td> 
  <td> name:<?php echo $row['name'] ;?></td>
    <td>mobile:<?php echo $row['mobile'] ;?></td>
    <td>email:<?php echo $row['email'] ;?></td>
    <td>id:<?php echo $row['id'] ;?></td>
   <td>gender: <?php echo $row['gender'] ;?></td>
   <td>address <?php echo $row['address'] ;?></td>
  <td>  checkin:<?php echo $row['checkin'] ;?></td>
   <td> checkout:<?php echo $row['checkout'] ;?></td>
   <td> roomname: <?php echo $row['rname'] ; ?></td>
    <td>floorno:<?php echo $row['fno'] ;?></td>
    <td>
   <form method="POST" action="VIEWBOOKING.PHP">
       <input type="hidden" name="hidd"  value="<?php echo $row['bookingno'];?>">
       <input type="submit" name="submit" value="DELETE">
 </form>
</td>
    <table><tr>
   
<?php
   }
 
 
 
 
 

 
 
 
 





 


 

























   if(isset($_POST['submit'])){
           
    $v=$_POST['hidd'];
    
    $conn=mysqli_connect("localhost","deep","0234aniket","hotel system");
    $sql="DELETE FROM bookingroom WHERE bookingno='$v'";
    if(mysqli_query($conn,$sql)){
          echo "deleted";
    }
    
    else{
        echo "not deleted";
    }
    
     }
    






?>
       <style>
           .container{
                
            margin-left:50px;
            position:relative;
         bottom:1500px ;           }
           body{
                
            backgr
                
                
            
           }
.box{

}
tr {
    display: flex;
    gap: 50px;
    border: 9px solid black;
    background:linear-gradient(hwb(304 24% 71% / 0), red);
    position:relative;
    top:1600px;
    RIGHT:40px;
  
    
}

.user{

    font-size:145px;
    margin-left:2030px;

}
input{
    
    font-size:78px;
    background:linear-gradient(hwb(304 24% 71% / 0), blue);
}

td {
    width:100%;
    height:;
    border: 9px sol:;d black;
    font-size:120px;
background:linear-gradient(hwb(304 24% 71% / 0), blue);
font-weight:bolder;
font-family:italic;
color:black;
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
      background:linear-gradient(hwb(304 24% 71% / 0), red);
     
     
}
           </style>













 































