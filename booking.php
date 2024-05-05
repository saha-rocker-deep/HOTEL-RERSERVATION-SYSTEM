<html>
<div class="book">BOOKING <?php echo strtoupper($_POST['r']); ?></div>
<body>
<?php
 if(isset($_POST['submit2'])) 
   {?>










</html>
<style>
#form {
    display: flex;
    flex-direction: column;
    gap: 12px;
    justify-content: center;
    align-items: center;
}
body{
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
}
.ratio {
    display: flex;
    flex-direction: row;

    color: black;
    font-size: 65px;
    width:80%;
    height:100px;
    border:none;

}

.date {
    display: flex;
    flex-direction: row;
}

.container {
    width: 1300px;
    height: 1800px;
    border-radius: 20px;
    border: 1px solid black;
    background: linear-gradient(hwb(304 24% 71% / 0), #2af598);
    padding: 10px 10px 10px 10px;
    box-shadow: 10px 10px 10px 10px;
gap:70px;
 display:flex;
 flex-direction:column;
 gap:300px ;
 margin-right:430px;

}

input {
    box-shadow: 2px 2px 2px 2px;
    color: black;
    font-size: 65px;
    width:80%;
    height:100px;
border-radius:40px;
margin-top:50px;
background:linear-gradient(hwb(304 24% 71% / 0), red);
}
select{
    box-shadow: 2px 2px 2px 2px;
    color: black;
    font-size: 65px;
    width:80%;
    height:100px;
}

body {
    margin-top: 150px;
    margin-left: 560px;

}

#submit {
    position: static;

}
.book{
     font-size:390px;
     color:#0000ff;
}

</style>




    <div class="container">

        <form method="post" action="booking.php" id="form">

            <input type="text" name="name" placeholder="name" required="required">
            <input type="text" name="phone" placeholder="phone" required="required">
            <input type="text" name="email" placeholder="email" required="required">
            <input type="text" name="address" placeholder="address" required="required">
            <input type="text" name="userid" placeholder="userid">
            <input type="date" name="checkin"><label for="checkin">checkin</label>
            <input type="date" name="checkout"><label for="checkout">checkout</label>

            <select name="id">
                <option value="voterid">voterid</option>
                <option value="pancard">pancard</option>
                <option value="adharcard">adharcard</option>
                <option value="lisenceid">lisenceid</option>
            </select>
            <div class="ratio">
                <input type="radio" name="gender" value="male"> <label for="gender">male</label>
                <input type="radio" name="gender" value="female"> <label for="gender">female</label>
            </div>
            <input type="hidden" name="roomname" value="<?php echo $_POST['r']; ?>">
            <input type="hidden" name="floorno" value="<?php echo $_POST['f'];?>">
            <input id="submit" type="submit" name="submit" value="send">

    </div>






</form>
<?php  }?>
<div class="p">
    
</div>

<?php

  if(isset($_POST['submit'])){
   
    if($_POST['roomname']!=""&& $_POST['floorno']!=""
    && $_POST['name']!=""&& $_POST['phone']!=""&& 
    $_POST['email']!=""&&$_POST['id']!=""&&$_POST['gender']!=""
    &&$_POST['address']!=""&& $_POST['checkin']!=""&& 
    $_POST['checkout']!=""&& $_POST['userid']!="")
    {
    //*  echo "possible to submit";
         $conn=mysqli_connect("localhost","deep","0234aniket","hotel system");
if(!$conn){
}
   
else{
 
}


$a=$_POST['name'];
$a=mysqli_real_escape_string($conn,$a);
$b=$_POST['phone'];
$b=mysqli_real_escape_string($conn,$b);
$c=$_POST['email'];
$c=mysqli_real_escape_string($conn,$c);
$d=$_POST['id'];
$d=mysqli_real_escape_string($conn,$d);
$e= $_POST['gender'];
$e=mysqli_real_escape_string($conn,$e);
$f= $_POST['address'];
$f=mysqli_real_escape_string($conn,$f);
$g= $_POST['checkin'];
$g=mysqli_real_escape_string($conn,$g);
$h=$_POST['checkout'];
$h=mysqli_real_escape_string($conn,$h);
$i=$_POST['floorno'];
$i=mysqli_real_escape_string($conn,$i);
$j=$_POST['roomname'];
$j=mysqli_real_escape_string($conn,$j);
$k=$_POST['userid'];
$k=mysqli_real_escape_string($conn,$k);

$sql="INSERT INTO bookingroom(name,mobile,email,id,gender,address,checkin,checkout,fno,rname,uid) VALUES('$a','$b','$c','$d',' $e','$f','$g','$h','$i','$j','$k')";
 if($sql){
 
 }
 else{

 }
 $r=mysqli_query($conn,$sql);
 session_start();
 if($r){
     $_SESSION['name']=$a;
   echo '<script>window.location="sucess.php"</script>';
   
   
 }
 else{ 
     





   //*echo "query failed.........";





 }
    }

else{


echo '<script>
window.location="failure.php";
</script>';
  

    
}
  }
  ?>

     
 
  <style>

    *{

        padding:0;
        margin:0;
        box-sizing: border-box;
    }
body{
    
}










    
.fotter{
    width:5400px;
    height:60%;
    background:linear-gradient(hwb(304 24% 71% / 0), blue);
margin-right:900px;
display:flex;
flex-direction:column;
justify-content:center;
align-items:center;

}
 .fir{
 font-size:153px;
 font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
 display:flex;
flex-direction:column;
justify-content:center;
align-items:center;
margin-left:320px;
margin-bottom:830px;
color:red;
 }
 
 .sir{
    font-size:153px;
font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
display:flex;
justify-content:center;
gap:856px;
margin-left:800px;
position:relative;
top:600px ;

 }
 body{
     background:url("images.jpg");
 
 background-repeat: no-repeat;
 background-size:cover;
 position:sticky;
 }
 
</style>
  

<div class="fotter">
<div class="fir">GET IN TOUCH<div>
<div class="sir">
    <p>
ADDRESS

    </p>
    <P>
        SALES
    </P>
    <P>
        ABOUT US
</P>
    <div>
</div>

<script>
function f2(){
window.location="checked.php";
}
</script>


</body>








