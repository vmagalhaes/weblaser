<?php
$line_break								= "\n";
$to 									= "renato_garcia@outlook.com";
$from 									= $_POST["clientEmail"];
$subject 								= "[EronTur]".$_POST["clientSubject"];

$clientName 							= $_POST["clientName"];
$message								= $_POST["clientMessage"];

$headers = "MIME-Version: 1.1".$line_break	;
$headers .= "Content-type: text/html; charset=utf-8".$line_break	;
$headers .= "From: ".$clientName." <".$from.">".$line_break	;
$headers .= "Return-Path: ".$from.$line_break;
$headers .= "Reply-To: ".$from.$line_break;

$mail = mail($to, '=?UTF-8?B?'.base64_encode($subject).'?=', $message, $headers, "-r".$from);
if($mail) {
	echo  'Mensagem enviada com sucesso! Clique <a href="javascript:window.history.back()">AQUI</a> para voltar.';
} else {
	echo 'Desculpe, ocorreu um erro, tente novamente mais tarde ou contacte diretamente pelo nosso email '.$to;
}
?>