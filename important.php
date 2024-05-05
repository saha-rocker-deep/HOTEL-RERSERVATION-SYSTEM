<html>
<title> php jax like and dislike </title>

<body>

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
    <div class="b1">
        <?php
   while($row=mysqli_fetch_array($sql1)){

   ?>
        <br>
        <form method="POST" action="important.php" id="form<?php echo $row['fno']?>">
            <input type="hidden" name="hidden" class="f<?php echo $row['fno']?>" value="<?php echo $row['floor']?>">
            <input type="submit" name="submit" value="<?php echo $row['floor']?>">

        </form>








        <?php }

   ?>


    </div>

    <style>
    .b1 {
        display: flex;
        flex-direction: row;
        justify-content: center;
        gap: 200px;
    }

    </style>
    <script>

    </script>

</html>
<?php
if(isset($_POST['submit'])){
     echo $_POST['hidden'];
     $p=$_POST['hidden'];
     
$sql="SELECT floorno,roomname,bedroom,bathroom,kitchen,roomprice,roomtype FROM floor inner join roomfloor where floor.floor=roomfloor.floorno and floorno='$p'";


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
            <br>
        </tr>


    </table>
</div>





<?php }
}
   ?>
<style>
tr {
    display: flex;
    gap: 150px;
    border: 3px solid black;
}

td {
    width: 100px;
    height: 50px;
    border: 3px solid black;

}

</style>

</body>

</html>
