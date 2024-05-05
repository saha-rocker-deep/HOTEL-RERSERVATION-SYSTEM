<html>
<div class="p">

</div>
<div class="text">
    you are failed to send  a data 
    <div>

</html>



<script>
  document.querySelector(".p").classList.add("spinner");

</script>

      
  <style>

*{

    padding:0;
    margin:0;
    box-sizing: border-box;
}
body{
min-height:100vh;
}
.p{
margin-top: 350px;
margin-left: 660px;
}

.spinner{
    width:79rem;
    height:79rem;
    border:20px solid #d4dbff;
    border-top-color:red;
    border-radius: 50%;
    animation:spin 1s infinite linear;
}
@keyframes spin{
to{
transform:rotate(1turn);
}
}
.p{
   margin-top: 650px;
   margin-left: 1260px;
}
.text
{
     font-size:100px;
     margin-left:1250px;
}
</style>








