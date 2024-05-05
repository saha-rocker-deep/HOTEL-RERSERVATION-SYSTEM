  <?php
 session_start();
 echo "wrong password";
 echo "<br>";
  echo "recheck again";
  
     $user=$_POST['username']; 
     $password=$_POST['password'];

     $conn=mysqli_connect("localhost","deep","0234aniket","hotel system");
     
$_SESSION['user']=$user;
$sql="SELECT username,password from signiup where username='$user' and password='$password'";
  if(mysqli_query($conn,$sql)){
     $result=mysqli_query($conn,$sql);
    while ($row=mysqli_fetch_array($result)) {
      if($password!=$row['password']){
         echo "wrong password";
      }
      else{
         echo '<script>window.location="homepage2.php"</script>';
      }
    }
      
  }
 else{
    echo "unsucsess";
 }
  
  ?>







































































