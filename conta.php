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
			?>
	
			<div id="divAcessar">
			<?php
				include "acessar.php";
			?>
			</div>
			<div class="d-none" id="divRegistrar">
			<?php
				include "registrar.php";
			?>
			</div>
		</div>
		<script src="scripts/jquery-3.3.1.js">
		 </script>
		 <script src="scripts/conta.js">
		 </script>
	</body>
</html>