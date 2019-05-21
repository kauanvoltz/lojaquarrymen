function dizerOi(desconto) {
	var mensagem= "seja bem vindo a loja quarrymen";
	
	if(desconto != null) {
		mensagem+=", você ganhou "+desconto+"% de desconto";
	}
	     
		alert(mensagem);
}

var date = new Date();
var hour = date.getHours();

if(hour >= 0 && hour < 8 ) {
	dizerOi(10);
}
else if(hour >= 8 && hour <12) {
	dizerOi();
}
else {

dizerOi(5);
}