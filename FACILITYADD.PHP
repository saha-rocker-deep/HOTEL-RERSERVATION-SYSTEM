
<html>




<html>

<body>
<div class="b1">

<div class="wrapper">
    <form class="form-signin"action="FACILITYADD.PHP" method="POST"enctype="multipart/form-data">       
      <h2 class="form-signin-heading">FACILITYADD</h2>
      <input type="file" style="font-size:76px;" class="form-control" name="photo1" placeholder="Email Address" required="" autofocus="" />
      <input type="text" style="font-size:76px;" class="form-control" name="main" placeholder="subject" required=""/>      
        <input type="text" style="font-size:76px;" class="form-control" name="imptext" placeholder="about" required=""/>  
      
      
     
      <input style="font-size:76px;" class="btn btn-lg btn-primary btn-block" type="submit" name="submit">   
    </form>
  </div>








        </div>

</body>

<html>


<?php
         if(isset($_POST['submit'])){
                  $file_name11=$_FILES['photo1']['name'];
                  $facsub=$_POST['main'];
                  $factext=$_POST['imptext'];
  
echo '<div class="size">';
echo $file_name11;

$file2=$_FILES['photo1']['tmp_name'];
echo $file2;


$file_dir="./".$file_name11;


if(move_uploaded_file($file2,$file_dir)){
    echo "sucessfully enterded";
}
else{
     echo "not entered";
}
 
         

echo '</div>';

         
$conn=mysqli_connect("localhost","deep","0234aniket","hotel system");
if(!$conn){
    echo "not connected";
}
else{
    echo "connected";
}


   // $file_name=mysqli_real_esscape_string($conn,$file_name);
$sql1="INSERT INTO facilites(facimage,facsub,factext) VALUES('$file_name11','$facsub','$factext')";
if(mysqli_query($conn,$sql1))
{
   echo "sucessfully reached in database ";
}
else{
    echo "query has not reached";
}


        


}



?>



</html>

<style>
body{
    background:url("ht.jpg");
    background-repeat:no-repeat;
    background-size:cover;

}

 
 

 
 




@import "bourbon";



.wrapper {	
	margin-top: 1080px;
  margin-bottom: 80px;

  
}
.size{
    font-size:89px;
}

.form-signin {
  max-width: 2380px;
  height:1460px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0,0,0,0.1);  
  display:flex;
  flex-direction:column;
  gap:127px;
  font-size: 45px;

  .form-signin-heading,
	.checkbox {
	  margin-bottom: 30px;
	}

	.checkbox {
	  font-weight: normal;
	}

	.form-control {
	  position: relative;
	  font-size: 78px;
	  height: auto;
	  padding: 10px;
		@include box-sizing(border-box);

		&:focus {
		  z-index: 2;
		}
	}

	input[type="text"] {
	  margin-bottom: -1px;
	  border-bottom-left-radius: 0;
	  border-bottom-right-radius: 0;
	}

	input[type="password"] {
	  margin-bottom: 20px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
	}
    
}


</style>