

<?php
if (isset($_POST['submit'])) {
    
    echo $_POST['name'];
     echo $_POST['user_email'];
     echo $_POST['user_password'];
     echo $_POST['username'];
     if($_POST['name']!="" && $_POST['user_email']!="" && $_POST['user_password']!=""&& $_POST["username"]!="")
     {


     
     $a=$_POST['username'];
     $b=$_POST['name'];
     $c= $_POST['user_email'];
     $d=$_POST['user_password'];
     $conn=mysqli_connect("localhost","deep","0234aniket","hotel system");
    $sql= "INSERT INTO signiup(username,name,email,password) VALUES('$a','$b','$c','$d')";
    if(mysqli_query($conn,$sql)){
         echo'<script>window.location="reservationview.php"</script>';
    }
      else{

        echo "not reaching query";
      }
}
else{
     echo "not posiible";
}

}
?>



