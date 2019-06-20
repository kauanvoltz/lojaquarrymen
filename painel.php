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
?>
		
	<div class="row">
		<div class="col-4">
			<ul class="nav flex-column">
				<li class="nav-item">
					<a class="nav-link" href="painel.php?secao=produtos">Produtos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="painel.php?secao=categorias">Categorias</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="painel.php?secao=usuarios">Usuarios</a>
				</li>
			</ul>
		</div>
		<div class="col-8">
			<?php
				$secao=isset($_GET['secao'])? $_GET['secao'] : "";
				if ($secao == "produtos")
				{
					 include "produtos.php";
				}
				else if ($secao == "categorias")
				{
					include "categorias.php";
				}
				else if ($secao == "usuarios") 
				{ 
					include "usuarios.php";
				}
				else 
				{
					echo "Bem vindo ao painel administrativo";
				}
			?>
		</div>
	</div>
	</div>
		<script src="scripts/jquery-3.3.1.js">
		 </script>
		 <script src="scripts/conta.js">
		 </script>
	</body>
</html>