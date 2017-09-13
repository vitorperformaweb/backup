<?php
	$nome = $_GET['nome'];
	$nome = utf8_decode($nome);
	$email = $_GET['email'];
	$telefone = $_GET['telefone'];
	$produto = $_GET['produto'];
	$produto = utf8_decode($produto);
	$msg= "Nome: ".$nome. " <br>Email: ".$email. " <br>Telefone: ".$telefone. " <br>Produto que clicou: ".$produto. " <br>";
	$nomeE = "Cerejeiras";
	$emailE = "avanco@performaweb.com.br";
	$htmlE = $msg;
	$subjectE = 'Mensagem - LP Jazigos Cerejeiras';
	
	//Inicio E-mail
	
	date_default_timezone_set('Etc/UTC');
	require '../livro/emails/PHPMailerAutoload.php';
			
	$mail = new PHPMailer;

	$mail->isSMTP();
	$mail->SMTPDebug = 0;

	$mail->Debugoutput = 'html';

	//$mail->Host = "smtp.mandrillapp.com";
	$mail->Host = "smtp.sendgrid.net";

	$mail->Port = 587;
	$mail->SMTPAuth = true;

	$mail->SMTPSecure = 'tls';

	$mail->Username = "cerejeiras";
	$mail->Password = "mudar123";

	$mail->setFrom('contato@cerejeiras.com.br',$nome);
	$mail->addReplyTo('contatos@cerejeiras.com.br', utf8_encode('Cerejeiras'));


	$mail->addAddress($emailE, $nomeE);
	$mail->Subject = $subjectE;
	$mail->msgHTML($htmlE, dirname(__FILE__));


$mail->send();

?>