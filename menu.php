<?php
class Menu
{
	public $nome;
	public $href;
	public $categoria;
	function getLiItem($url)
	{
		if ($url== $this->href)
			echo '<li class="nav-item"><a class="nav-link checked" data-categoria = "'.$this->categoria.'" href="'.$this->href.'"> '.$this->nome.' </a></li>';
		else
			echo '<li class="nav-item"><a class="nav-link" href="'.$this->href.'"> '.$this->nome.' </a></li>';
	}

}
$computadores = new Menu();
$computadores->nome = "Computadores";
$computadores->href = "/computadores/";
$computadores->categoria = "computadores";

$videogames = new Menu();
$videogames->nome = "Video games";
$videogames->href = "/videogames/";
$videogames->categoria = "videogames";

$jogos = new Menu();
$jogos->nome = "Jogos";
$jogos->href = "/jogos/";
$jogos->categoria = "jogos";

$smartphones = new Menu();
$smartphones->nome = "Smartphones";
$smartphones->href = "/smartphones/";
$smartphones->categoria = "smartphones";

$acessorios = new Menu();
$acessorios->nome = "Acessórios"; 
$acessorios->href = "/acessorios/";
$acessorios->categoria ="acessorios";



$url =$_SERVER["REQUEST_URI"];
$menus = 
[
	$computadores,$videogames,$jogos,$smartphones,$acessorios
	
];
?>
<nav class="col-10">
	<ul class="nav">
		<li class="nav-item "><a class="nav-link" href= "/"> Home</a></li>
		<?php
			foreach ($menus as $menu) 
			{
				$menu->getLiItem($url);
			}
		
		
		?>
		
		<li class="nav-item"><a class="nav-link" href="/contato.php">Contatos</a></li>
		<li class="nav-item position-absolute" style="right:0"><a  href="/carrinho.php" class="nav-link nav-chart" > <img src ="/images/home/carrinho.png" height="30" width="30"/> <span id="quantidadeProdutos" class="badge badge-primary">0</span></a></li> 
		<?php
			$nomeUsuario=isset($_SESSION["nome_usuario"]) ? $_SESSION["nome_usuario"] : "";
			if ($nomeUsuario!="") 
			echo '<li class="nav-item"><a class="nav-link" href="/painel.php">Bem vindo,$nomeUsuario</a> | <a class="nav-link" href="/sair.php">Sair </a> </li>';
			else 
			echo '<li class="nav-item"><a class="nav-link"href="/conta.php">Faça seu login</a></li>';
	
		
		?>
		
	</ul>
</nav>

