<?php
$servidor="localhost";
$usuario="root";
$bancoDeDados="lojaquerrymen";
$senha="";
$conexao=mysqli_connect($servidor,$usuario,$senha,$bancoDeDados);
if (mysqli_connect_errno()){
	die("Conexão falhou:" . mysqli_connect_error());
}
	





?>