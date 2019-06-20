<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="css/site.css"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<title>Acesso | Loja querrymen</title>
	</head>
	<body>
		<div class="container">
<?php
				include "menu.php";
				
				include "banco.php";
		 $sessaoSemUsuario=!isset ($_SESSION['emailUsuario']);
	if ($sessaoSemUsuario){		
	if(isset($_POST['txtEmail']) && isset($_POST['txtSenha'])){
			$txtEmail= $_POST['txtEmail'];
			$txtSenha= $_POST['txtSenha'];
			$senhaMd5= md5($txtSenha);
			if ($resultado= mysqli_query($conexao,'SELECT * FROM `usuarios` WHERE email="'.$txtEmail.'" and senha="'.$senhaMd5.'";'))
			{
				if (mysqli_num_rows($resultado))
				{
				$usuario= mysqli_fetch_array($resultado);
				$_SESSION['nomeUsuario']=$usuario["nome"];
				echo $_SESSION['nomeUsuario'];
				$_SESSION['emailUsuario']=$txtEmail;
				$sessaoSemUsuario=false;
				header("Location: / ");
				}
				
			}
	}
	}		

		
	if($sessaoSemUsuario)
	{
		include "acessar.php";
			
		include "registrar.php";
	}
?>
		</div>
		<script src="scripts/jquery-3.3.1.js">
		 </script>
		 <script src="scripts/conta.js">
		 </script>
	</body>
</html>