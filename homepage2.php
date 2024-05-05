<html>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>






<div class="container3">
    <div  class="con1">
<div class="home">
  <a href="homepage2.php">  HOME<a>
  </div>
  <div class=" ABOUT">
   <a href="aboutus.php">ABOUT<a>
  </div>
  <div CLASS="facilities">
  <a  href="facilities.php"> FACILITIES</a>
  </div>
  
  <div CLASS="GALLERY">
<a  href="gallery.php"> GALLERY</a>
</div>
<div CLASS="ROOMS">
 


<?php
   $conn=mysqli_connect("localhost","deep","0234aniket","hotel system");
if(!$conn){
    
}
else{
  
}

$sql="SELECT * FROM floor ORDER BY floor";
$sql1=mysqli_query($conn,$sql);
if($sql1){
     
}
else{
   
}
   
   ?>
<form action="floorroomchoose1.php" method="POST" id="form">

    <select onkeypress="f1()" name="car">
        <?php 
 while($row=mysqli_fetch_array($sql1)){

   ?>


        <option value="<?php echo $row['floor'];?>"><?php echo $row['floor'];?></option>




        <?php }

   ?>
        <script>
        function f1() {
            document.querySelector("#form").submit();

        }
        </script>
    </select>

</form>


<?php?>


</div>
  
 
 
 

  <div class="CONTACT">
 <a href="contactus.php">CONTACT</a>
</div>
<div onclick="f2()" class="MYACCOUNT">
MYACCOUNT
<ul  style="display:none;">
                  <li  ><a href="profile.php">profile</a></li>
                  <li ><a href="usercart.php">MYBOOKING</a></li>
                  <li  ><a href="Password.php">password change</a></li>
    </ul>
    
        </div>
<div class="LOGOUT">
<a href="logout.php">LOGOUT
</a>
</div>
</div>
</div>
<?php session_start();
    
    echo  $_SESSION['user'];?>
  
<script>

    function f2(){
document.querySelector("ul").style.display="block";


    }
    </script>
    <style>
li{
    font-size:70px;
    height:100px;
    width:745px;
    border:1px solid black;
    text-decoration:none;
    list-style-type:none;
}
li:hover{
background:linear-gradient(hwb(304 24% 71% / 0), blue);
color:white;
}
    
    .MYACCOUNT{
        COLOR:white;
    }





<style>




 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 





































































<style>
    .container3{
        
        
        
          background:;
          width:100%;
           height:100px;
    }
    .box{
        margin-top:1940px;
    }
     


     
     
     
     
     select{
         width:350px;
         height:90px;
         font-size:90px;
         margin-bottom:190px;
     }

    

    a:link{
         text-decoration:none;
         color:white;
    }
    a:visited{
        text-decoration:none;
        color:white;
    }

    .con1{
        display:flex;
 flex-direction:row;
  gap:133px;
         position:relative;
         left:960px;
          top:130px;
           font-size:73px;

    }
    body{
         background:url("jj.jpg");
         background-repeat:no-repeat;
         background-size:cover;
    }
    .container2{
         margin-top:1500px;
    }
    img:hover{
        position:relative;
        
        
    }
</style>
<html>