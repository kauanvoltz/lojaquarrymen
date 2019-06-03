<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="css/site.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	
		
		<title>Carrinho| Loja quarrymen</title>
	</head>
	<body>
	<div class="container">
		<h1> Seja bem vindo a loja quarrymen</h1>
		<p> Aqui temos todos tipos de eletrôniconicos para você</p>
		<?php
			include "menu.php";
		?>
		<div>
	<ul id= "listaProdutosCarrinho"   class= "list-group">
	</ul>
	
	<div id="alertaCarrinhoVazio"	class=" alert alert-warning" role="alert">
		<a href="/">Seu carrinho esta vazio! clique aqui para comprar</a>
	</div>
		

			
		</div>
		</div>
		<script src="scripts/jquery-3.3.1.js">
		 </script>
		  <script src="scripts/produtos.js">
		 </script>
		<script src="scripts/carrinho.js">
		</script>
		
	</body>
</html>