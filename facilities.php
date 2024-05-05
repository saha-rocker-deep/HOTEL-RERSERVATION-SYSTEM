<html>
<div class="faci">

FACILITIES
</div>


<?php

$conn=mysqli_connect("localhost","deep","0234aniket","hotel system");



$sql="SELECT  * FROM facilites";


$result=mysqli_query($conn,$sql);
if($result){

echo "sucees2";
}
else{
echo "unsucess";
}

;?>






















    <div class="maincontainer">



    <div class="container">


<?php
   while($row=mysqli_fetch_array($result)) {

?>



<div class="com">
    <div> <img src="<?php  echo $row['facimage'];?>"  width="700px"  height="600px"></div>
<div>   <?php echo $row['facsub'];?> </div>
<div>   <?php echo $row['factext'];?> </div>
</div>









<?php

}?>




</div>















































































</div>


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






<html>


    <style>
body{
        background:linear-gradient(hwb(304 24% 71% / 0), red,pink);
}
.maincontainer{
display: flex;
flex-direction: row;
gap:730px ;
justify-content: center;
 align-items:center;
 position:relative;
  margin-top:563px;
}
.p1,.p2,.p3,.q1,.q2,.q3,.q4{

       font-size: 85px;

       display:flex;
       flex-direction:column;
       gap:34px;

}
.container{
     display:grid;
     grid-template-columns:auto auto ;
     gap:45px;
}
.o{
      color:  green;
}
.faci{
    font-size:134px;
    margin-left: 2070px;
    color:  green;
}


.com{
    font-size: 85px;
 display:flex;
 flex-direction:column;
 gap:34px;
}









.con2{
   width:100%;
   height:30%;
   background:rgb(blue,white)
   display:flex;
 border:100px solid blue;
flex-direction:column;
gap:40px;
margin-top:350px;
font-weight:bold;
}
.ll{
font-size:134px;
margin-left: 1960px;
font-weight:bold;
}
.lp{
   display:flex;
margin-left:120px;
 
gap:600px;
   font-size:92px;
}
.U1,.U2,.U3{
   display:flex;
gap:34px;
flex-direction:column;
}
.f{
    font-size:92px;
}







    </style>