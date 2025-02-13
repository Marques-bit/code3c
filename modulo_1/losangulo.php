<?php
$diagonalmaior = 0; //dado pelo usuario
$diagonalmenor = 0; //dado pelo usuario
$area = 0;

echo "Digite a maior diagonal do seu losangulo: ";
$diagonalmaior = readline();

echo "Digite a menor diagonal do seu losangulo: ";
$diagonalmenor = readline ();

$area = ($diagonalmaior * $diagonalmenor) /2;
echo "Dadas as duas diagonais do seu losangulo, a area total do seu losangulo é de: " . $area;
echo "\n";
?>