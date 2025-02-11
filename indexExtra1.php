<?php
$hora = date("H");
$minutos = date("i");
$minutosDoDia = 0;

date_default_timezone_set('America/Sao_Paulo');
echo "Agora são:", date("H:i:s");

$minutosDoDia = ($hora * 60) + $minutos;
echo "\nOs minutos que passaram do seu dia foram exatos: " . $minutosDoDia;

?>