<?php
	error_reporting(0);
function enviarEmail($nome,$email,$assunto,$genero,$atendimento,$mensagem)
	{
		$headers = 'MIME-Version: 1.0' . "/r/n";
		$headers .= 'content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .='from: $nome <$email>';// 
		
		$emailDestino = "Kauan.voltz@gmail.com";
		$corpo ="Nome: $nome <br/>";
		$corpo .="Email: $email <br/>";
		$corpo .="Genero: $genero <br/>";
		$corpo .="Atendimento: $atendimento <br/>";
		$corpo .="Assunto: $assunto <br/> ";
		$corpo .="Mensagem: $mensagem <br/>";
		
		
		$respostaEnvio = mail($emailDestino,$assunto,$corpo,$headers);
		if ($respostaEnvio)
		{ 
			echo '<div class = "alert alert-success" role ="alert">
					Seu email enviado com sucesso
				  </div>';
		}
		else 
		{ 
			echo '<div class = "alert alert-danger" role = "alert">
						erro ao enviar email!
				  </div>';
					
		}
	}

?>
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
				include "/menu.php";
			?>
			<?php
	$data=new DateTime('now',new DateTimeZone('America/Sao_Paulo')); //(colocar o horario de funcionamento do site)
	if ($data->format('H')>='22' || $data->format('H')<='6')
	{                
	echo '<div class = "alert alert-warning" role"alert">  
			horario muito tarde ja estamos dormindo
			</div>';      //é a instrução que envia para a saída qualquer informação
	}
	else 
	{
		$txtNome= $_POST['txtnome'];
		$txtEmail = $_POST['txtemail'];
		$txtGenero = "";
		if (isset($_POST['rbgenero']))
		{
			$txtGenero = $_POST['rbgenero'];
		}
		
		$txtAtendimento = $_POST['atendimento'];
		$txtAssunto = $_POST['txtassunto'];
		$txtMensagem = $_POST['txtmensagem'];
		
		enviarEmail($txtNome,$txtEmail,$txtAssunto,$txtGenero,$txtAtendimento,$txtMensagem);
	}
	
	
	?>

		</div>
		<script src="scripts/jquery-3.3.1.js">
		</script>
		<script src="scripts/carrinho.js">
		</script>
	</body>
</html>
	
	
	

