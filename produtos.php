	<div class="row">
		<div class="col-3">
			<h1>Produtos</h1>
		</div>
		<div class="col-6">
			<form class="">
			<div class= "input-group">
				<input class="form-control " type="search" placeholder="Pesquisar produtos" aria-label="Search">
				<div class="input-group-append">
					<button class="btn btn-outline-success btn-sm " type="submit">Pesquisar</button>
				</div>
			</div>
			
			</form>
		</div>
		<div class="col-3">
			<button type="button" class="btn btn-primary btn-sm">Novo produto</button>
		</div>
	</div>
<table class="table table-bordered">
  <thead>
    <tr>
	  <th scope="col">Id</th>
      <th scope="col">Caminho imagem</th>
      <th scope="col">Descrição</th>
      <th scope="col">Titulo</th>
      <th scope="col">Preço</th>
	  <th scope="col">Categoria</th>
	  <th scope="col">Ações</th> 
    </tr>
  </thead>
  <tbody>
	<?php
		if($resultado = mysqli_query($conexao,'SELECT produtos.*,categorias.nome as categoria from produtos inner join categorias on categorias.id=categoria_id ;'))
		{
		$quantidadeProdutos=mysqli_num_rows($resultado);
		for ($i=0; $i< $quantidadeProdutos;$i++ 
		{
			$produto= mysqli_fetch_array($resultado,MYSQLI_ASSOC);
		}
		
			)
		$produtos=mysqli_fetch_fields($resultado);
		foreach($produtos as $var)
		{ 
			$produto=mysqli_fetch_array ($resultado, MYSQLI_ASSOC);
			echo '<tr>';
			echo '<th scope="row">'.$produto->id.'</th>';
			echo '<td>'.$produto->caminhoImagem.'</td>';
			echo '<td>'.$produto->descricao.'</td>';
			echo '<td>'.$produto->titulo.'</td>';
			echo '<td>'.$produto->preco.'</td>';
			echo '<td>'.$produto->categoria.'</td>';
				 echo '<td>';
					echo '<button type="button" class="btn btn-success btn-sm">Visualizar</button>';
					echo '<button type="button" class="btn btn-warning btn-sm">Editar</button>';
					echo '<button type="button" class="btn btn-danger btn-sm">Excluir</button>';
				echo '</td>';
			echo '</tr>';
		}
		
			
		}
	
	
	
	?>
  </tbody>
</table>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Proximo</a></li>
  </ul>
</nav>