<html>
    <div class="contact"> contact us </div>
    <div class="container">
        






<div class="con21">
   we havce 72 comfartably
   equipped <BR> rooms,including two <BR>suo suites
  :the president suite
   and <br> the ambassador suite,
   with over  one hundred <BR> meters of surface  area 
   ,which <br>
   are sure to awe  even <BR>  the most demanding <BR> guest , 
   we offer 7 rooms  <BR>, where we <br>
    have been  preparing  famil;y 
     and  <BR>busines <BR>s meeting  already
      for 15 years 



      <br>
      <br>
       <br>
       
       contact us 
       <br>
       D-204 ,hole Town south west 
       Delhi -110096 ,india 
       <br>
        Telephone :+8529631236<br>
         EMAIL: INFO@GMAIL.COM
</div>
<div class="con22">
<form action="contactus.php" method="POST" class="con22">
 <input type="text" name="name"  required placeholder="name">
 <input type="text" name="email"  required placeholder="email">
 <input type="text" name="phone"  required placeholder="phone">
 <input type="text" name="message"  style="height:430px;" required placeholder="mesaage" class="message">

<input type="submit" name="submit"  class="submit" value="submit">

 
</FORM> 



</div>

</div>
<style>
 .container{
    display:flex;
     flex-direction:row;
        gap:790px;
        font-size:132px;
        justify-content:center;
         align-items: center;
         position: relative;
          top:660px;
 }
 body{
      background:linear-gradient(hwb(304 24% 71% / 0), red,blue);
 }
 .contact{
     font-size:188px;
     margin-left:1790px;
 }
 
 .con22{
      display: flex;
    flex-direction:column;
    gap:190px;
    font-size:132px;
    justify-content:center;
     align-items: center;
    
    bottom:230px;
      
 }
  input
  {
       width: 1200px;
        height:140px;
         font-size: 132px;
          border-radius: 56px;
  }
  
 .mesaage {
      width:320px;
       height: 630px;
 }
 .submit{
     width:620px;
 }
</style>
    </html>
    <?php
  if($_POST['submit']){
    $x=$_POST['name'];
      $y=$_POST['email'];
     $z=$_POST['phone'];
      $p=$_POST['message'];
      
$conn=mysqli_connect("localhost","deep","0234aniket","hotel system");
$sql="INSERT INTO contact(name,email,phone,message) VALUES('$x','$y','$z','$p')";

mysqli_query($conn,$sql);
if(mysqli_query($conn,$sql)){
      echo "sucess";
}
  else{

    echo "not sucess";
  }
}
else{
     echo "";
}
    ?>