<html>

<form method="POST" action="try.php" id="form">
    <input type="text" name="hide" onchange="f1()" placeholder="show">
    <!--<input type="submit" id="p1" name="submit" value="submit">-->

</form>
<!--<button type="button" onclick="f1()">button</button>-->

</html>
<script type="text/javascript">
function f1() {

    document.querySelector('#form').submit();



}
</script>

<?php

echo $_POST['hide']     ;



?>
