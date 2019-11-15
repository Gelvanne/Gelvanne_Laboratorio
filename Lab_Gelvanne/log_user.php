<?php	
// Editando a página de login!!
 
$pnome 		= $_GET["nome_user"];
$pemail 	= $_GET["email_user"];
$psenha 	= $_GET["senha_user"];
echo "<br>";
echo "<h2>Login Realizado com sucesso!</h2> <br> <br>";
	echo " nome_user:   $pnome <br>";
	echo " email_user:  $pemail <br>";
	echo " senha_user:  $psenha <br>";