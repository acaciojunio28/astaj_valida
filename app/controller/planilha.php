<?php
require('../model/banco.php');
$lista=new banco;
$C=$lista->read();
$html = "<table>
<tr>
    <th>id</th>
    <th>nome</th>
    <th>login</th>
</tr>";

foreach ($C as $row) {


$html .= "<tr>
<th>" . $row ['id'] . "</th> 
<td>" . $row ['nome']. "</td>
<td>" . $row ['login']. "</td>
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