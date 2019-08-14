<?php
session_start()
  ?>
  <?php

if(isset($_POST['login'])){
	header('location:Pergunta1.php');
$_SESSION['login']=$_POST['login'];
$_SESSION['foto']=$_POST['foto'];

}

?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
    body {

background-image: url("http://gonintendo.com/system/file_uploads/uploads/000/023/786/original/Banner-GameInformerBreathoftheWild2.jpg");
background-size: cover;
width: 192px;

}
@font-face{
font-family: Zelda;
src: url("Triforce.ttf");
}

@font-face{
font-family: Zelda;
src: url("Triforce.eot");
}
#vai{
 position: absolute;
 top: 65%;
 left: 50%;
 transform: translate(-50%, -50%);
 width: 200px;
 height: 60px;
 text-align: center;
 line-height: 60px;
 color: #fff;
 font-size: 24px;
 text-transform: uppercase;
 text-decoration: none;
  letter-spacing: 2px;
 font-family: Zelda;
 box-sizing: border-box;
 background: linear-gradient(90deg, #A3F557, #57F55A, #57F5A9, #57F2F5, #57A3F5, #5A57F5, #A3F557);
 background-size: 400%;
 border-radius: 30px;
 z-index: 1;
 border: none;
}
#vai:hover
{
 animation: animate 5s linear infinite;
}
@keyframes animate
{
 0%
 {
  background-position: 0%;
 }
 100%
 {
  background-position: 400%;
 }
}
#vai:before
{
 content: '';
 position: absolute;
 top: -5px;
 left: -5px;
 right: -5px;
 bottom: -5px;
 z-index: -1;
 background: linear-gradient(90deg,  #A3F557, #57F55A, #57F5A9, #57F2F5, #57A3F5, #5A57F5, #A3F557);
 background-size: 400%;
 border-radius: 40px;
 opacity: 0;
 transition: 0.5s;

 
}
#vai:hover:before
{
 
 filter: blur(20px);
 opacity:1;
 animation: animate 5s linear infinite;
}
	.logi{
		position: absolute;
		top:50%;
		left: 41%;
		color: white;
		font:bold;
		font-family: Zelda;
background-color: #538196;
padding: 10px 10px 10px 20px;
margin-bottom: 20px;
border-radius: 20px;

	}
#foto1{
	position: absolute;
	width: 100px;
	top:200px;
	left: 500px;
}
#foto2{
	position: absolute;
	width: 100px;
	top:200px;
	left: 600px;
}
#foto3{
	position: absolute;
	width: 100px;
	top:200px;
	left: 700px;
}
#foto4{
	position: absolute;
	width: 100px;
	top:200px;
	left: 800px;
}
#r1{
	position: absolute;
	width: 100px;
	top:292px;
	left: 500px;
}
#r2{
	position: absolute;
	width: 100px;
	top:292px;
	left: 600px;
}
#r3{
	position: absolute;
	width: 100px;
	top:292px;
	left: 700px;
}
#r4{
	position: absolute;
	width: 100px;
	top:292px;
	left: 800px;
}
input[type=text]{
font-family: Zelda;
 height:25px;
 letter-spacing: 2px;
  border: 1px solid #ccc;
  border-radius: 50px;
  box-sizing: border-box;
}



	</style>
	 <meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="perfil1.css">
	<title></title>
</head>
<body>
	
	
		<form method="post">
	<div class="logi" >
LOGIN:<input type="text" name="login" required placeholder="  Insira Seu Nome">
	</div>

<img src="foto1.png" id="foto1">
</div> 
<img src="foto2.png" id="foto2">
<img src="foto4.png" id="foto3">
<img src="foto3.png" id="foto4">	
<br>

 <input type="radio" name="foto" checked value="1" id="r1">
 <input type="radio" name="foto" checked value="2" id="r2">
 <input type="radio" name="foto" checked value="3" id="r3">
 <input type="radio" name="foto" checked value="4" id="r4">

  <input type="submit"value="Jogar" id="vai">



</form>
</div>
</body>
</html>