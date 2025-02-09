<?php
class Email {

	public function __construct(){
	}

	public function enviar($strPara, $strAssunto, $strDe, $strMensagem){
		require_once(__DIR__."/phpmailer/class.phpmailer.php");
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->Host = MAIL_HOST;
		$mail->Port = MAIL_PORTA;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = MAIL_TIPO;
		$mail->Username = MAIL_USUARIO;
		$mail->Password = MAIL_SENHA;
		$mail->From = $strDe;
		$mail->FromName = $strDe;
		$mail->AddAddress($strPara,$strPara);
		$mail->IsHTML(true);
		$mail->Subject = $strAssunto;
		$mail->Body = $strMensagem;
		$mail->AltBody = $strMensagem;
		if($mail->Send()){
			return true;
		}else{
			return false;
		}
	}

}