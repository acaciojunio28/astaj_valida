<?php
require('../model/banco.php');
$lista=new banco;
$C=$lista->read();
$html = "<table>
<tr>
<th>id</th>
<th>Matrícula</th>
<th>Nome</th>
<th>CPF</th>
<th>Tipo de Plano</th>
<th>Baneficiário</th>
<th>Idade</th>
<th>Adesão</th>
<th>Desconto</th>
<th>Total de Desconto</th>
</tr>";

foreach ($C as $row) {


$html .= "<tr>
<th>" . $row ['id'] . "</th> 
<td>" . $row ['matricula']. "</td>
<td>" . $row ['nome']. "</td>
<td>" . $row ['cpf']. "</td>
<td>" . $row ['tipo_de_plano']. "</td>
<td>" . $row ['beneficiario']. "</td>
<td>" . $row ['idade']. "</td>
<td>" . $row ['adesao']. "</td>
<td>" . $row ['desconto']. "</td>
<td>" . $row ['desconto_total']. "</td>
</td>";};

//$html .= "</table>";
$html .= "</table>";

// Configurações header para forçar o download
header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
header ("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");
header ("Content-type: application/x-msexcel");
header ("Content-Disposition: attachment; filename=\"Relatório.xls\"" );
header ("Content-Description: PHP Generated Data" );

echo $html;