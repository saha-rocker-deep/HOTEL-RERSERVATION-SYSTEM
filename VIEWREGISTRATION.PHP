
<div class="view">VIEWREGISTRATION</div>
<?php 

$conn=mysqli_connect("localhost","deep","0234aniket","hotel system");




$sql="SELECT *  FROM signiup";


$result=mysqli_query($conn,$sql);
if($result){

echo "sucees2";
}
else{
echo "unsucess";
}

$count=0;?>



























        


<?php
   while($row=mysqli_fetch_array($result)) {

?>

//?>


<div>


<table class="table table-striped table">
     
     
     
     
     <tr>
      <td>
          username
      </td>
      <td>
          name
      </td>
      <td>
          email
      </td>
      <td>
          password
      </td>
</tr>
 <tr>













  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
 
 
  
       
       
       
       
       
       
       

       
       
            <td>
                <?php echo $row['username']; echo "<br>";?>



            </td>
            <br>
            <td>
                <?php echo $row['name'] ; ?>

            </td>
            <br>
            <td>
                <?php echo $row['email'];?>

            </td>
            <br>
            <td>
                <?php echo $row['password'] ; ?>

            </td>
            <td>
     <form method="POST" action="VIEWREGISTRATION.PHP">
         <input type="hidden" name="hidd"  value="<?php echo $row['username'];?>">
         <input type="submit" name="submit" value="DELETE">
   </form>
  </td>
            <br>
            
            

            
            
            
            

            
            
            
            

            

            
            

            
           
           
           
           
           






        </tr>


    </table>
</div>


<?php


 if(isset($_POST['submit'])){
           
$v=$_POST['hidd'];

$conn=mysqli_connect("localhost","deep","0234aniket","hotel system");
$sql="DELETE FROM  signiup WHERE username='$v'";
if(mysqli_query($conn,$sql)){
      echo "deleted";
}

else{
    echo "not deleted";
}

 }


?>


<?php }



   ?>
<style>
tr {
    display: flex;
    gap: 150px;
    border: 9px solid black;
    background:linear-gradient(hwb(304 24% 71% / 0), red);
}

td {
    width: 1050px;
    height: 100px;
    border: 9px solid black;
    font-size:55px;
background:linear-gradient(hwb(304 24% 71% / 0), blue);
font-weight:bolder;
font-family:italic;
color:white;
}
button{
    font-size:55px;
}

.t1 {
    width: 600px;
    height: 350px;
    border: 2px solid black;
}
input{
    font-size:50px;
}
body{
    background:linear-gradient(hwb(304 24% 71% / 0), blue,yellow);


}



.sub{
  background:  linear-gradient(hwb(304 24% 71% / 0), white,yellow);
}



img:hover{
    position:relative;
    right:120px;
    top:34px;
    width:1000px;
    height:1000px;
    border:49px solid black;
    
}
.view
{
     margin-left:2000px;
     font-size:120px;
}
</style>
</html>
<script>
function f1(){
    window.location="checked.php";
}

</script>