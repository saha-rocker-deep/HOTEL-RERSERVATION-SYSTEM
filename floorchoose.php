<html>
<?php
   $conn=mysqli_connect("localhost","deep","0234aniket","hotel system");
if(!$conn){
    echo "not connected";
}
else{
    echo "connected";
}

$sql="SELECT * FROM floor ORDER BY floor";
$sql1=mysqli_query($conn,$sql);
if($sql1){
     echo "ok";
}
else{
    echo "not ok";
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


<?php

