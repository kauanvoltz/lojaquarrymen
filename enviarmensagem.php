<?php
	$data=new DateTime('now',new DateTimeZone('America/Sao_Paulo')); //(colocar o horario de funcionamento do site)
	if ($data->format('H')>='22' || $data->format('H')<='6')
	{
	echo "horario muito tarde ja estamos dormindo"; //é a instrução que envia para a saída qualquer informação
	
	}
	else 
	{
		$txtNome= $_POST['txtnome'];
		$txtEmail = $_POST['txtemail'];
		
		if (isset($_POST['rbgenero']))
		{
			$txtGenero = $_POST['rbgenero'];
		}
		
		$txtAtendimento = $_POST['atendimento'];
		$txtAssunto = $_POST['txtassunto'];
		$txtMensagem = $_POST['txtmensagem'];
		
		enviarEmail($txtNome,$txtEmail,$txtAssunto,$txtGenero,$txtAtendimento,$txtMensagem);
	}
	
	function enviarEmail($nome,$email,$assunto,$genero,$atendimento,$mensagem)
	{
		$headers = 'MIME-Version: 1.0' . "/r/n";
		$headers .= 'content-type: tet/html; charset=iso-8859-1' . "\r\n";
		$headers .='from: $nome <$email>';
		
		$emailDestino = "Kauan.voltz@gmail.com";
		$corpo ="Nome: $nome <br/>";
		$corpo .="Email: $email <br/>";
		$corpo .="Genero: $genero <br/>";
		$corpo .="Atendimento: $atendimento <br/>";
		$corpo .="Assunto: $assunto <br/> ";
		$corpo .="Mensagem: $mensagem <br/>";
		
		echo $corpo;
		$respostaEnvio = mail($emailDestino,$assunto,$corpo,$headers);
		if ($respostaEnvio)
		{ 
			echo "Seu email enviado com sucesso";
		}
		else 
		{ 
			echo "Erro ao enviar email!";
		}
	}
	?>
	
	
	

