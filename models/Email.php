<?php
class Email extends model{

	private $nome;
	private $email;
	private $telefone;
	private $assunto;
	private $mensagem;

	public function setNome($nome){
		if(filter_var($nome, FILTER_SANITIZE_STRING)){
			$this->nome = $nome;
		}
	}

	public function setEmail($email){
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			$this->email = $email;
		}
	}

	public function setTelefone($telefone){
		if(filter_var($telefone, FILTER_SANITIZE_STRING)){
			$this->telefone = $telefone;
		}
	}

	public function setAssunto($assunto){
		if(filter_var($assunto, FILTER_SANITIZE_STRING)){
			$this->assunto = $assunto;
		}
	}

	public function setMensagem($mensagem){
		if(filter_var($mensagem, FILTER_SANITIZE_STRING)){
			$this->mensagem = $mensagem;
		}
	}
	
	public function enviarContato(){

		$site = new Site();
		$item = $site->getArray();

		$para    = $item['emails'];
		$assunto = $this->assunto;
		$subject = 'Site Aleevolucoes - '.$this->assunto;
		$message = "
		<html>
		<head>
		  <title>AleEvolucoes</title>
		</head>
		<body>
		  <table>
		    <tr>
		      <td>Nome: </td>
		      <td>".$this->nome."</td>
		    </tr>
		    <tr>
		      <td>E-mail: </td>
		      <td>".$this->email."</td>
		    </tr>
		    <tr>
		      <td>Assunto: </td>
		      <td>".$this->assunto."</td>
		    </tr>
		   
		    <tr>
		      <td>Mensagem / Descrição do projeto:</td>
		      <td>".$this->mensagem."</td>
		    </tr>
		  </table>
		</body>
		</html>
		";
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "From: Site <site@aleevolucoes.com.br>\r\n";
		$headers .= "Content-type: text/html; charset=utf-8" . "\r\n";
		$headers .= "X-Mailer: PHP/" . phpversion ();

		mail($para, $subject, $message, $headers);
	}

	public function enviarOrcamento(){

		$site = new Site();
		$item = $site->getArray();

		$para    = $item['emails'];
		$assunto = $this->assunto;
		$subject = 'Pedido de Orçamento - '.$this->assunto;
		$message = "
		<html>
		<head>
		  <title>AleEvolucoes</title>
		</head>
		<body>
		  <table>
		    <tr>
		      <td>Nome: </td>
		      <td>".$this->nome."</td>
		    </tr>
		    <tr>
		      <td>E-mail: </td>
		      <td>".$this->email."</td>
		    </tr>
		    <tr>
		      <td>Telefone: </td>
		      <td>".$this->telefone."</td>
		    </tr>
		    <tr>
		      <td>Mensagem</td>
		      <td>".$this->mensagem."</td>
		    </tr>
		  </table>
		</body>
		</html>
		";
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "From: Site <site@aleevolucoes.com.br>\r\n";
		$headers .= "Content-type: text/html; charset=utf-8" . "\r\n";
		$headers .= "X-Mailer: PHP/" . phpversion ();

		mail($para, $subject, $message, $headers);
	}
}


