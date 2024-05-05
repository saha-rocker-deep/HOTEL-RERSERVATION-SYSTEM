<html>

<form action="try2.php" method="POST" id="form">
    <select onkeypress="f1()" name="car">
        <option value="volvo">volvo</option>
        <option value="lamborgini">lamborgini</option>

    </select>
    <!-- <input type="submit" name="submit" value="submit">-->
</form>



<script>
function f1() {
    document.querySelector("#form").submit();

}
</script>

</html>
<?php
//$c=filter_input(INPUT_POST,'car',FILTER_SANITIZE_STRING);
//echo  $c;
/*if(isset($_POST['submit'])){
    echo $_POST['car'];
}*/
echo $_POST['car'];
?>
