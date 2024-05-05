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

?>
<div>
    <table class="table table-striped table">
        <tr>
            <td>
                floorno
            </td>
            <td>
                bedroom
            </td>
            <td>
                roomprice
            </td>
            <td>
                roomtype
            </td>
            <td>
                kitchen
            </td>
            <td>
                bathroom
            </td>
            <td>
                roomname
            </td>

            <td>
                roomimage
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $row['floorno']; echo "<br>";?>



            </td>
            <br>
            <td>
                <?php echo $row['bedroom'] ; ?>

            </td>
            <br>
            <td>
                <?php echo $row['roomprice'];?>

            </td>
            <br>
            <td>
                <?php echo $row['roomtype'] ; ?>

            </td>
            <br>
            <td>
                <?php echo $row['kitchen'] ; ?>

            </td>
            <br>
            <td>
                <?php echo $row['bathroom'] ;?>

            </td>
            <br>
            <td>
                <?php echo $row['roomname'] ; ?>

            </td>

            <td class="t1">
                <img src="<?php echo $row['roomimage'] ; ?>" width="100%" height="100%">

            </td>
            <td>
               <form method="POST" action="checked.php" class="f1">
                    <input type="hidden" name="hidd1" value="<?php echo $row['roomname'] ; ?>">
                    <input type="hidden" name="k" value="<?php echo $row['floorno'] ; ?>">
                    <input type="submit" class="sub"  name="submit1" value="checked">


                </form>
<!--<button class="sub" onclick="f1()"type="button">checked</button>-->

            </td>
            <br>
        </tr>


    </table>
</div>





<?php }
}
else{
    echo "choose floor";
}

   ?>
<style>
tr {
    display: flex;
    gap: 150px;
    border: 9px solid black;
    background:linear-gradient(hwb(304 24% 71% / 0), red);
}

td {
    width: 400px;
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

</style>
</html>
<script>
function f1(){
    window.location="checked.php";
}

</script>