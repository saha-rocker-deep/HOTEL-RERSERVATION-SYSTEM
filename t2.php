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


<div class="load">

</div>


</div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
function f1(floor) {
    $.ajax({
        url: "t1req.php",
        type: "POST",
        data: {
            id: floor
        },
        dataType: "json",
        success: function(data) {
            $.each(data, function(key, value) {
                $(".load").append(value.floor + "" + value.roomname + "" + value.roomType);

            })
        }

    });
</script>

<?php }

   ?>




</html>
