$(document).ready(function(){
	$(".btn.btn-readmore").click(function(){//funçao evento clique
		if	($(this).prev().hasClass("d-none")){//função verificar se qualquer um dos elementos tem uma classe determinada
			$(this).prev().removeClass("d-none"); //remove uma ou mais classes de um elemento escolhido
			$(this).text("ler menos");//(nao tenho certeza) //acho eu que seria oque aparece basicamente o texto
		}
		else{
			$(this).prev().addClass("d-none");// é quando se que colocar mais uma classe extra
			$(this).text("ler mais");//acho eu que seria oque aparece basicamente o texto
		}
			
	});
});

