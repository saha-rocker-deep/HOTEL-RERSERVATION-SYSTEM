
<div class="change"> 
  logout


</div>

<?php

 session_start();

 $user=$_SESSION['user'];

?>
<html>
 <div>

 </div>
 <div class="container">









       
    


<div id="form-main">
  <div id="form-div">
    <form class="form" action="logout.php" method="POST" id="form1">
      
      <p class="name"> 
        <input name="user" placeholder="username" type="text" id="name" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" >
      </p>
      
    
    
    
    
    
    
    
    
      
      <div class="submit">
        <input type="submit" name="submit" value="LOGOUT" id="button-blue"/>
        <div class="ease"></div>
      </div>
    </form>
  </div>









 


 </div>
<?php
if(isset($_POST['submit'])){
    $user=$_SESSION['user'];
    $u1=$_POST['user'];
   
   

    $conn=mysqli_connect("localhost","deep","0234aniket","hotel system");
    $sql="SELECT username from signiup  where username='$u1'";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($result)){
        if ($row['username']==$user) {
            echo '<script>window.location="homepage.php"</script>';
        }
        else{
       echo "wrong username";
        }
      
    }
    
    
    


}
?>
 <style>
form,.container{
 display:flex;
  flex-direction:column;
  justify-content:center;

}


 </style>
 </html>





 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
    <style>

@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

html{    background:url(http://thekitemap.com/images/feedback-img.jpg) no-repeat;
  background-size: cover;
  height:100%;
}

#feedback-page{
	text-align:center;
}
.change{
    font-size:234px;
    font-weight:bold;
     position:relative;
     left:36%;
}
#form-main{
	width:1200px;

 position:relative;
 top:1209px;
 left:1560px;
}


#form-div {
	background-color:rgba(72,72,72,0.4);
	padding-left:35px;
	padding-right:35px;
	padding-top:35px;
	padding-bottom:50px;
	width: 1450px;
	height:900px;
	float: left;
	left: 50%;
	position: absolute;
  margin-top:30px;
	margin-left: -260px;
  -moz-border-radius: 7px;
  -webkit-border-radius: 7px;
}

.feedback-input {
	color:#3c3c3c;
	font-family: Helvetica, Arial, sans-serif;
  font-weight:500;
	font-size: 18px;
	border-radius: 0;
	line-height: 22px;
	background-color: #fbfbfb;
	padding: 13px 13px 13px 54px;
	margin-bottom: 10px;
	width:100%;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
  border: 3px solid rgba(0,0,0,0);
  
  
  
}

.feedback-input:focus{
	background: #fff;
	box-shadow: 0;
	border: 3px solid #3498db;
	color: #3498db;
	outline: none;
  padding: 13px 13px 13px 54px;
}

.focused{
	color:#30aed6;
	border:#30aed6 solid 3px;
}

/* Icons ---------------------------------- */
#name{
	background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);
	background-size: 30px 30px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
	height:120px;

}

#name:focus{
	background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);
	background-size: 30px 30px;
	background-position: 8px 5px;
  background-position: 11px 8px;
	background-repeat: no-repeat;
}

#email{
	background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);
	background-size: 70px 70px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
	height:120px;
}

#email:focus{
	background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);
	background-size: 30px 30px;
  background-position: 11px 8px;
	background-repeat: no-repeat;
}

#user{
	background-image: url(http://rexkirby.com/kirbyandson/images/comment.svg);
	background-size: 30px 30px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
	height:120px;
}

.t1 {
    width: 100%;
    height:50px;
    line-height: 150%;
    resize:vertical;
}

input:hover, textarea:hover,
input:focus, textarea:focus {
	background-color:white;
}

#button-blue{
	font-family: 'Montserrat', Arial, Helvetica, sans-serif;
	float:left;
	width: 100%;
	border: #fbfbfb solid 4px;
	cursor:pointer;
	background-color: #3498db;
	color:white;
	font-size:24px;
	padding-top:22px;
	padding-bottom:22px;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	transition: all 0.3s;
  margin-top:-4px;
  font-weight:700;
}

#button-blue:hover{
	background-color: rgba(0,0,0,0);
	color: #0493bd;
}
	
.submit:hover {
	color: #3498db;
}
	
.ease {
	width: 0px;
	height: 74px;
	background-color: #fbfbfb;
	-webkit-transition: .3s ease;
	-moz-transition: .3s ease;
	-o-transition: .3s ease;
	-ms-transition: .3s ease;
	transition: .3s ease;
}

.submit:hover .ease{
  width:100%;
  background-color:white;
}

@media only screen and (max-width: 580px) {
	#form-div{
		left: 3%;
		margin-right: 3%;
		width: 88%;
		margin-left: 0;
		padding-left: 3%;
		padding-right: 3%;
	}
}

#email{
	 position:relative;
	 top:89px;
	  

}
#user{
	position:relative;
	 top:89px;
	


}


#button-blue{
	position:relative;
	 top:89px;
	

}
#user,#email,#button-blue,#name{
	font-size:56px;
}










</style>














































