<?php

require_once('vendor/autoload.php');

$html = '<p><strong>Nome:</strong> Michael Douglas</p>
<p><strong>Idade: </strong> 26</p>';

$mpdf = new mPDF();

$mpdf->WriteHTML($html);
$mpdf->Output();