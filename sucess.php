<html>
<div class="g">

GRAND HOTEL
</div>

<div class="container1">
<div class="fpart">
<div  class="circal">
<img src="right tag.png" width="50px" height="50px">

</div>
<div class="text">
sucess
</div>
</div>
<div class="spart ">
<div class="name">
<?php 
session_start();
echo $_SESSION['name'];?>
</div>
<div class="text1">

congratulation, your request hasbeen <br> sucessfully sended.
</div>
<button class="button" onclick="f1()">continue<button>
</div>

</html>
<script>
function f1(){
window.location="floorroomchoose.php";
}
</script>
<style>
      .container1{
          width:1500px;
          height:1600px;
          background:white;
          border:0px solid white;
          border-radius:4px;
      
          margin-left:1710px;
  margin-top:900px;
          box-shadow:2px 2px 2px 2px ;
   
        }
      .name{
        color:white;
        font-size:50px;
        font-family:bold;
      }
      .fpart{
           background:rgb(139 195 74);
           width:100%;
           height:50%;
           display:flex;
           flex-direction:column;
           justify-content:center;
           align-items:center;


      }
      .spart{
        width:100%;
           height:350px;
        display:flex;
           flex-direction:column;
           justify-content:center;
           align-items:center;

gap:40px;
      }
      .g{
          font-size:270px;
          margin-left:1540px;
      }
      
      .circal{
          width:100px;
          height:100px;
          border-radius:50%;
          border:10px solid white;
          display:flex;
          flex-direction:column;
          justify-content:center;
          align-items:center;

      }
      .text{

        color:white;
        font-size:120px;
        font-family:bold;
      }
      .text1{
          color:black;
          font-size:80px;
          font-family:bold;
      }
.button{
    width:950px;
    height:80%;
    border-radius:20px;
    background:rgb(139 195 74);
    border:1px solid white;
    color:white;
    font-size:120px;

}
body{
 
        
        border:5px solid black;
      background:url('p1.jpg');
        background-attachment: fixed;
 background-repeat:no-repeat;
 background-size:cover;
 padding:5px 5px 5px 5px ;




 

    }
