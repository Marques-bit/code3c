<?php

$base = 0; //base dada pelo usuario
$altura = 0; //altura dada pelo usuario
$peri = 0; //perimetro
$area = 0; //area
$diagonal = 0; //diagonal dessa merda 

echo "Digite a base do retangulo: ";
$base = readline();

echo "Agora digite a altura do retangulo:";
$altura = readline();

$peri = (2*($base + $altura));
echo "O perimetro do seu retangulo é de: " . $peri;
echo "\n";

$area = $base * $altura;
echo "A area total do seu retangulo é de: " . $area;
echo "\n";

$diagonal = sqrt($base **2 + $altura **2); 
echo "A diagonal do seu retangulo é de: " . $diagonal;
echo "\n";

?>