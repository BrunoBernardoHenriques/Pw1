<?php
session_start()
 ?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	@font-face{
font-family: Zelda;
src: url("Triforce.ttf");
}

@font-face{
font-family: Zelda;
src: url("Triforce.eot");
}
		#foto{
			width: 70px;
			position: absolute;
			right: 100px;
		}
		#foto2{
			width: 70px;
			position: absolute;
			left: 100px;
		}
		body{
			background-image:url(http://i0.wp.com/images6.alphacoders.com/484/484440.jpg);
		}
		h1{font-family: Zelda;
			letter-spacing: 2px;
			color: white;
			size: 45px;
		}
		fieldset{
			border-radius: 50px;
			position: absolute;
			top: 50px;
			left: 66px;
		}
		#tapaburaco{
			position: absolute;
			background-color: black;
			height: 50px;
			width: 100px;
			right: 16px;
			top: 15px;
		}
		h2{font-family: Zelda;
			color: white;
			 letter-spacing: 2px;
			text-align: left;
		}
	</style>
	<title>Resultado</title>
</head>
<meta charset="utf-8">

<body>
	<center>
<?php

$resp1="Korok Forest";
$resp2="Stone Pebbit";
$resp3="Fully Charged Master Sword";
$resp4="6 Anos";
$resp5="Great Fairy Tera";
$pontos=0;
  ?>  	
  <div id="tapaburaco"></div>
  <fieldset>

<?php 
echo '<img src="foto'.$_SESSION['foto'].'.png" id="foto2">';
echo '<img src="foto'.$_SESSION['foto'].'.png" id="foto">';
echo "<h1>Olá ".$_SESSION['login']."<br><br></h1><h2>";
if ($_SESSION['p1']==$resp1) {
	echo "Primeira pergunta: Sua resposta está certa"."<br>";
	$pontos++;
}
if ($_SESSION['p1']!=$resp1) {
	echo "Primeira pergunta: Sua resposta está errada, sua resposta: ".$_SESSION['p1']." e a resposta correta é: ".$resp1."<br>";
}


if ($_SESSION['p2']==$resp2) {
	echo "Segunda pergunta: Sua resposta está certa"."<br>";
	$pontos++;

}
if ($_SESSION['p2']!=$resp2) {
	echo "Segunda pergunta: Sua resposta está errada, sua resposta: ".$_SESSION['p2']." e a resposta correta é: ".$resp2."<br>";
}


if ($_SESSION['p3']==$resp3) {
	echo "Terceira pergunta: Sua resposta está certa"."<br>";
	$pontos++;

}
if ($_SESSION['p3']!=$resp3) {
	echo "Terceira pergunta: Sua resposta está errada, sua resposta: ".$_SESSION['p3']." e a resposta correta é: ".$resp3."<br>";
}


if ($_SESSION['p4']==$resp4) {
	echo "Quarta pergunta: Sua resposta está certa"."<br>";
	$pontos++;

}
if ($_SESSION['p4']!=$resp4) {
	echo "Quarta pergunta: Sua resposta está errada, sua resposta: ".$_SESSION['p4']." e a resposta correta é: ".$resp4."<br>";
}


if ($_SESSION['p5']==$resp5) {
	echo "Quinta pergunta: Sua resposta está certa"."<br>";
	$pontos++;

}
if ($_SESSION['p5']!=$resp5) {
	echo "Quinta pergunta: Sua resposta está errada, sua resposta: ".$_SESSION['p5']." e a resposta correta é: ".$resp5."<br>";
}



echo "Sua pontuação é: ".$pontos." /5";
 ?>
</fieldset>
</center>

</body>
</html>