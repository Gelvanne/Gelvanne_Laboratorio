<?php
// Editando a página de cadastro.

$pcnome = $_GET["nome_user"];
$pcemail = $_GET["email_user"];
$pctel =$_GET["tel_user"];
$pcsenha = $_GET["senha_user"];

echo "<br>";
echo "<h2>Cadastro Realizado com sucesso!</h2> <br> <br>";
	echo " nome_user:   $pcnome <br>";
	echo " email_user:  $pcemail <br>";
	echo " senha_user:  $pcsenha <br>";
	echo "tel_user:		$pctel <br>";