<!DOCTYPE html>
<html>
<head>
	<title>Tela de Verificação</title>
	<meta charset="utf-8">
</head>
<body>
	<style type="text/css">
		
   h3{
   	color: red;
   }



	</style>
	<nav>
<?php  
$emailv = 'Usuario';
$senhav  = '123';
if ($_POST['email']==$emailv && $_POST['senha']==$senhav) {
	echo '<h1>Logado Com Sucesso</h1><br> Bem Vindo';
}
else{
	echo "<h3>Falha na Auntenticação<br></h3>"."<b>Tente novamente:".'<a href="login.html">Login</a>';
}

?>
</nav>
</body>
</html>