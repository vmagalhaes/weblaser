<?php
$line_break								= "\n";
$to 									= "renato_garcia@outlook.com";
$from 									= $_POST["clientEmail"];
$subject 								= "[SITE] Pedido de Orcamento";

$clientName 							= $_POST["clientName"];
$clientPhone1 							= $_POST["clientPhone1"];
$clientPhone2 							= $_POST["clientPhone2"];

$clientAddressOut 						= $_POST["clientAddressOut"];
$clientDistrictOut 						= $_POST["clientDistrictOut"];
$clientCountyOut 						= $_POST["clientCountyOut"];
$clientUFOut 							= $_POST["clientUFOut"];
$clientDateOut 							= $_POST["clientDateOut"];
$clientDateTimeOut 						= $_POST["clientDateTimeOut"];

$clientAddressDestination				= $_POST["clientAddressDestination"];
$clientDistrictDestination				= $_POST["clientDistrictDestination"];
$clientCountyDestination				= $_POST["clientCountyDestination"];
$clientUFDestination					= $_POST["clientUFDestination"];
$clientService							= $_POST["clientService"];

$clientDateReturn						= $_POST["clientDateReturn"];
$clientDateTimeReturn					= $_POST["clientDateTimeReturn"];

$clientComment							= $_POST["clientComment"];

$messageHTML = '<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:2px;border-color:#ccc;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
.tg .tg-s6z2{text-align:center}
</style>
<table class="tg" style="table-layout: fixed; width: 528px">
<colgroup>
<col style="width: 181px">
<col style="width: 197px">
<col style="width: 150px">
</colgroup>
  <tr>
    <th class="tg-s6z2">Dados de saída</th>
    <th class="tg-031e">Dados de destino</th>
    <th class="tg-031e">Dados de retorno</th>
  </tr>
  <tr>
    <td class="tg-s6z2">Endereço: '.$clientAddressOut.'</td>
    <td class="tg-031e">Endereço: '.$clientAddressDestination.'</td>
    <td class="tg-031e">Data: '.$clientDateReturn.'</td>
  </tr>
  <tr>
    <td class="tg-s6z2">Bairro: '.$clientDistrictOut.'</td>
    <td class="tg-031e">Bairro: '.$clientDistrictDestination.'</td>
    <td class="tg-031e">Hora: '.$clientDateTimeReturn.'</td>
  </tr>
  <tr>
    <td class="tg-s6z2">Município: '.$clientCountyOut.' ('.$clientUFOut.')'.'</td>
    <td class="tg-031e">Município: '.$clientCountyDestination.' ('.$clientUFDestination.')'.'</td>
    <td class="tg-031e"></td>
  </tr>
  <tr>
    <td class="tg-s6z2">Data: '.$clientDateOut.'</td>
    <td class="tg-031e">Serviço: '.$clientService.'</td>
    <td class="tg-031e"></td>
  </tr>
  <tr>
    <td class="tg-s6z2">Hora: '.$clientDateTimeOut.'</td>
    <td class="tg-031e"></td>
    <td class="tg-031e"></td>
  </tr>
</table>

Comentário: '.$clientComment.'.';


$headers = "MIME-Version: 1.1".$line_break	;
$headers .= "Content-type: text/html; charset=utf-8".$line_break	;
$headers .= "From: ".$clientName." <".$from.">".$line_break	;
$headers .= "Return-Path: ".$from.$line_break;
$headers .= "Reply-To: ".$from.$line_break;


mail($to, $subject, $messageHTML, $headers, "-r".$from);
header('Location: ' . $_SERVER['HTTP_REFERER']);
echo "<script>alert('Mensagem enviada com sucesso!');</script>";
?>