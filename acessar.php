<div id="divAcessar">
	<h2> Informe seu login para acessar o painel. </h2>
	<form action="conta.php" method="post">
		<div class= "form-group">
			<label for="txtEmail">E-mail </label> 
			<input type="email" class="form-control" name="txtEmail"  placeholder="informe seu e-mail">
		</div>
		<div class="form-group">
			<label for="txtSenha"> Senha</label>
			<input type="password" class="form-control" name="txtSenha" placeholder="Senha">
		</div>
		<button type="submit" class="btn btn-primary">Acessar</button>
		<button type="button" id="btnSemConta" class="btn btn-link">Não tenho conta</button>
	
	</form>
</div>