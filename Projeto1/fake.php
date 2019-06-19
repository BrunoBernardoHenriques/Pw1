<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		#bonito{
			height: 345px;
			width: 191px;
			background: lightyellow;
			position: absolute;
			left: 45%;

		}

	#fake{
			height: 345px;
			width: 200px;
			background: lightyellow;
			position: absolute;
			left: 59%;

		}	
	</style>
</head>
<body>
	 <nav id="fake">
 	<br><br><br><b> 24,7%</b>
 	<br><br><br><b> 19,37%</b>
<br><br><br><br><b> 19,96%</b>
<br><br><br><b> 30,24%</b>
<br><br><br><b> 5,73%</b>



 </nav>
	<nav id="bonito">
<?php 

if ($_POST['enquete']==1) {
	echo '<b>Qual a melhor forma de procurar estágio</b><br><br>';

	echo '<b>Diretamente nas empresas(local ou site)</b><br><br>';
	echo 'Através de eventos e sites de recrutamento e/ou voltados a universitários<br><br>';	
	echo 'Procurar a Central de Estágio da faculdade<br><br>';
	echo 'Indicação de amigos<br><br>';
	echo 'Criar um site com seu próprio currículo, para ampliar a divugação de seus objetivos<br><br>';
}
if ($_POST['enquete']==2) {
	echo '<b>Qual a melhor forma de procurar estágio</b><br><br>';

	echo 'Diretamente nas empresas(local ou site)<br><br>';
	echo '<b>Através de eventos e sites de recrutamento e/ou voltados a universitários</b><br><br>';	
	echo 'Procurar a Central de Estágio da faculdade<br><br>';
	echo 'Indicação de amigos<br><br>';
	echo 'Criar um site com seu próprio currículo, para ampliar a divugação de seus objetivos<br><br>';
}
if ($_POST['enquete']==3) {
	echo '<b>Qual a melhor forma de procurar estágio</b><br><br>';

	echo 'Diretamente nas empresas(local ou site)<br><br>';
	echo 'Através de eventos e sites de recrutamento e/ou voltados a universitários<br><br>';	
	echo '<b>Procurar a Central de Estágio da faculdade</b><br><br>';
	echo 'Indicação de amigos<br><br>';
	echo 'Criar um site com seu próprio currículo, para ampliar a divugação de seus objetivos<br><br>';
}
if ($_POST['enquete']==4) {
	echo '<b>Qual a melhor forma de procurar estágio</b><br><br>';

	echo 'Diretamente nas empresas(local ou site)<br><br>';
	echo 'Através de eventos e sites de recrutamento e/ou voltados a universitários<br><br>';	
	echo 'Procurar a Central de Estágio da faculdade<br><br>';
	echo '<b>Indicação de amigos</b><br><br>';
	echo 'Criar um site com seu próprio currículo, para ampliar a divugação de seus objetivos<br><br>';
}
if ($_POST['enquete']==5) {
	echo '<b>Qual a melhor forma de procurar estágio</b><br><br>';

	echo 'Diretamente nas empresas(local ou site)<br><br>';
	echo 'Através de eventos e sites de recrutamento e/ou voltados a universitários<br><br>';	
	echo 'Procurar a Central de Estágio da faculdade<br><br>';
	echo 'Indicação de amigos<br><br>';
	echo '<b>Criar um site com seu próprio currículo, para ampliar a divugação de seus objetivos</b><br><br>';
}
 ?>


 	<a href="1.html">Voltar</a>
 </nav>

</body>
</html>