<?php 

$conn=mysqli_connect("localhost","deep","0234aniket","hotel system");
if($_POST['car']!=""){
echo $_POST['car'];
$p= $_POST['car'];
$sql="SELECT floorno,roomname,bedroom,bathroom,kitchen,roomprice,roomtype,roomimage FROM floor inner join floorroom where
floor.floor=floorroom.floorno and floorno='$p'";


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




<div class="box1">
    <div class="x1">
<img src="<?php echo $row['roomimage'];?>"width="100%" height="100%">
    </div>
    <div class="x2">
<div class="h1">
    <?php echo $row['floorno'];?>
    <div>
    <div class="h1">
    <?php echo $row['roomname'];?>
    <div>
    <div class="h1">
    <?php echo $row['bedroom'];?>
    <div>
    <div class="h1">
    <?php echo $row['bathroom'];?>
    <div>
    <div class="h1">
    <?php echo $row['kitchen'];?>
    <div>
    <div class="h1">
    <?php echo $row['roomprice'];?>
    <div>
    <div class="h1">
    <?php echo $row['roomtype'];?>
    <div>
    </div>
   </div>
    
    






































































<?php }
}
else{
    echo "choose floor";
}

   ?>
<style>
body{
    display:grid;
    grid-template-columns:auto auto auto;
    gap:5px;
    background:linear-gradient(hwb(304 24% 71% / 0), blue);
}

.box1{
    background:linear-gradient(hwb(304 24% 71% / 0), blue,red);
    width:auto;
    height:100%;
}
.x1{
    width:100%;
    height:50%;
}

.container{

    width:100%;
    height:100%;
</style>





</html>
