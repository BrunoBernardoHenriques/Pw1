<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<meta charset="utf-8">
<style type="text/css">

		header{
			background-color:green;
			height: 100px;
			width: 1350px;
			font-size: 20px;
			position: absolute;
			top: 1px;
		}
			
			fieldset{
				position: absolute;
				top: 100px;
				width: 1300px;
				font-size: 28px;
			}
	
</style>
<center>
<header>
	<h1>Comprovante</h1>
</header>

<body>
	<fieldset>
	<?php
echo 'Nome: '.$_POST['Nome'].'<br>';
echo 'Email: '.$_POST['Email'].'<br>';
echo 'CPF: '.$_POST['CPF'].'<br>';
echo 'Número do Cartão: '.$_POST['numero'].'<br>';
echo 'Bandeira: '.$_POST['bandeira'].'<br>';
echo 'Validade: '.$_POST['validade'];
	  ?>
	  	
	  </fieldset>
	</center>
</body>
</html>