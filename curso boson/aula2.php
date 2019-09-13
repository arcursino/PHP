<?php
$x = 7;
$x += 5;
echo "$x </br>;

$a = 15;
$b = -15;
$c = 0xAF;
var_dump ($a);
echo "<br>";
var_dump ($b);
echo "<br>";
var_dump ($c);
echo "<br>";

$d = 24.65;
$e = 6.02e23;
$f = 1.8E-18;
print ("Núm.1: $d<br> Núm.2: $e<br> Núm.3 $f<br>;

$g = True;
$h = False;
if ($g == True) {
	echo "Valor Verdadeiro<br>";
}
if($h == True) {
	echo "Valor Verdadeiro<br>";
}
else {
	echo "Valor Falso";
}

$nome = "Ariana";
$sobrenome = " Rodrigues Cursino";
echo "Meu nome é $nome $sobrenome <br>;
echo 'Meu Nome é $nome $sobrenome <br>;


$diadasemana = 5;

switch ($diadasemana) {
	case 1: 
		print("Domingo");
		break;
	case 2: 
		print("Segunda");
		break;
	case 3: 
		print("Terça");	
		break;
	case 4: 
		print("Quarta");
		break;	
	case 5: 
		print("Quinta");
		break;	
	case 6: 
		print("Sexta");
		break;
	case 7: 
		print("Sábado");
	Default:
		echo "Dia inválido";
}

?>
