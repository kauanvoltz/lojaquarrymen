<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="css/site.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<title>Contato | Loja querrymen</title>
	</head>
	<body>
	<div class="container">
		<h1>Entre em contato conosco</h1>
		<?php
			include "menu.php";
		?>
		<p> Queremos ouvir você! entre em contato conosco</p>
		<form action="enviarmensagem.php" method="post">
			<div class="form-group">
				<label>Nome:</label>
				<input class="form-control" type="text" name="txtnome" placeholder="insira seu nome" maxlength="35"/>
			</div>
			<div class="alert alert-danger d-none" role="alert">
				Nome não informado
			</div>
				<div class="form-group">
					<label>Email:</label>
					<input class="form-control" type="text" name="txtemail"  placeholder="insira seu Email" maxlength="50"/>
				</div>
			<div class="alert alert-danger d-none" role="alert">
				Email invalido
			</div>
			<div class="form-group">
				
			<label> Genero:</label>
				<div class="form-check">
					<input  class="form-check-input" type="radio" name="rbgenero" value="masculino"/> 
			<label class="form-check-label">masculino</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="rbgenero" value="feminino"/> 
			<label class="form-check-label">feminino</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="rbgenero" value="outro"/>
			<label class="form-check-label"> outro</label>
				</div>
			</div>
				<div class="form-group">
			<label>Área de atendimento:</label>
					<select  class="form-control" name="atendimento">
						<option value="troca"> setor de troca</option>
						<option value="comercial">contato comercial</option>
						<option value= "ajuda"> precisa de ajuda?</option>
					</select>
				</div>
				<div class="form-group">
			<label>Assunto:</label>
					<input class="form-control"  type="text" name="txtassunto"  placeholder="informe o assunto"/>
				</div>
				<div class="form-group">
			<label>Mensagem:</label>
					<textarea class="form-control" name="txtmensagem"  placeholder="insira sua mensagem" cols="30" rows="10"></textarea>
				</div>
				<div> 
					<input class="btn btn-success" type="submit" value="enviar"/>
				</div>
		</form>
	</div>
	<script src="scripts/jquery-3.3.1.js">
		 </script>
		<script src="scripts/carrinho.js">
		 </script>
		 
	
	</body>
</html>