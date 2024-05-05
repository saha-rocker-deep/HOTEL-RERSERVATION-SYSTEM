<html>
<title> php jax like and dislike </title>


<?php
   $conn=mysqli_connect("localhost","deep","0234aniket","hotel");
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

<?php
   while($row=mysqli_fetch_array($sql1)){

   ?>
<br>


<button onclick="f1('<?php echo $row['floor']?>')" class="like">

    button<?php echo $row['floor'];?>

</button>








</div>


<script type="text/javascript">
function f1(floor) {

    // req.responseType = "json";

    var req = new XMLHttpRequest();

    req.open("POST", "t1req.php", true);


    req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    req.send("t1=" + floor);
    req.onreadystatechange = function() {
        if (req.readyState == 4 && req.status == 200) {

            $response = JSON.parse(req.response);

            console.log($response);


        }
    }
}
</script>

<?php }

   ?>




</html>
