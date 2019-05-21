$(document).ready(function()
{
	if ($("#listaProdutosCarrinho").length!= 0)
	{ 
		listarProdutosCarrinho();
		
	}
	atualizarQuantidadeProdutosCarrinho();
	$(".btn.btn-adicionaraocarrinho").click(function()
	{var idProduto = $(this).data("id");
	adicionarProdutosCarrinho(idProduto);	
});
});
function atualizarQuantidadeProdutosCarrinho ( )		
{	
	var carrinhoLocal = retornarCarrinhoLocal();
	var totalProdutos=0;
	$(carrinhoLocal).each(function(index,item){
						totalProdutos += item.quantidade;
	});
	$("#quantidadeProdutos").text(totalProdutos);
}
function retornarCarrinhoLocal () 
{
		var carrinhoLocal = JSON.parse (localStorage.getItem("chart"));
		if (carrinhoLocal == null)
		{
			carrinhoLocal = [];
		}
		return carrinhoLocal;
	
	
}
function formatarTemplateCarrinho (produto,quantidade) 
{ return ` <li class="list-group-item">
				<img src="${produto.caminhoImagem.replace('../','')}"  height="45" width="45" /> 
				<label>${produto.titulo}</label>
				<span>R$ ${produto.preco} </span> 
				<div class="btn-group" role="group">
					<button type="button" class="btn btn-secondary btn-diminuir">-</button>
					<button data-id="${produto.id}" type="button" class="btn btn-secondary">${quantidade}</button>
					<button type="button" class="btn btn-secondary btn-acrecentar">+</button>
					
				</div> 		
			</li>`;

}
function listarProdutosCarrinho()
{
	var armazenamentoProdutosCarrinho = retornarCarrinhoLocal();
	 if (armazenamentoProdutosCarrinho.length!=0)
	 {
		 $ ("#alertaCarrinhoVazio").addClass("d-none");
	 }
	$(armazenamentoProdutosCarrinho).each(function(index,produtoCarrinho){
		var produto =$(produtos.itens).filter(function(index,item){
											return produtoCarrinho.id == item.id;
	 });
		$("#listaProdutosCarrinho").append(formatarTemplateCarrinho(produto[0],produtoCarrinho.quantidade));
	});
	
	$(".btn-diminuir").click(function()
	{ 
	var btnQuantidade = $(this).next();
	var quantidade = parseInt( btnQuantidade.text());
	quantidade--;
	btnQuantidade.text(quantidade);
	var idProduto = $(btnQuantidade).data("id");
	removerProdutoCarrinho (idProduto);
	});
	
	$(".btn-acrecentar").click(function()
	{ var btnQuantidade = $(this).prev();
	 var quantidade = parseInt(btnQuantidade.text());
	 quantidade++;
	 btnQuantidade.text(quantidade);
	 var idProduto = $(btnQuantidade).data("id");
	 adicionarProdutosCarrinho(idProduto);
	 
	});
	
	
	                                
}

function adicionarProdutosCarrinho(idProduto){
	var carrinhoLocal = retornarCarrinhoLocal();
	var produtoCarrinho=$(carrinhoLocal).filter (function(index,produto){
											return produto.id == idProduto;
	});
	 if (produtoCarrinho.length!=0)
	 {
		 produtoCarrinho [0].quantidade++;
	
	 }
	  else 
	 {
		var produto=
		{
			"id":idProduto,
			"quantidade":1
		
		};
		
		carrinhoLocal.push(produto);
		 
	 }
	
	 
	 
    salvarCarrinhoLocal(carrinhoLocal);
	atualizarQuantidadeProdutosCarrinho();
}

function removerProdutoCarrinho(idProduto){
var carrinhoLocal= retornarCarrinhoLocal();
var produtoCarrinho=$(carrinhoLocal).filter (function(index,produto) {
										return produto.id==idProduto;
});
if (produtoCarrinho.length!=0)
{
	var quantidade= produtoCarrinho[0].quantidade;
	if(quantidade==1)
	{
		var carrinhoFiltrado=$.grep(carrinhoLocal,function(produto,index) {
									return produto.id !=idProduto;
		});
	carrinhoLocal=carrinhoFiltrado;
	$("button[data-id="+idProduto+"]").parents("li").remove();
	
	}
	else
	{
		produtoCarrinho[0].quantidade--;
	}
}
if (carrinhoLocal.length==0)
{
	 $ ("#alertaCarrinhoVazio").removeClass("d-none");
}





salvarCarrinhoLocal(carrinhoLocal);
atualizarQuantidadeProdutosCarrinho();

}


 function salvarCarrinhoLocal(carrinhoLocal){ 
 localStorage.setItem("chart",JSON.stringify(carrinhoLocal));
 }