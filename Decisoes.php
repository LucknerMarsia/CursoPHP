<?php 

$idade = 21
$numeroDePessoas = 2 

echo "Você só pode entrar se for maior de 18 anos!";

if ($idade ==> 18) {

	echo "Você tem $idade anos, pode entrar sozinho";
} else {
	if ($idade >= 16 && $numeroDePessoas > 1) {
		echo "Você tem $idade anos. Está acompanhado, então pode entrar.";
	} else {
		echo "Você só tem $idade anos. Você não pode entrar.";
	}
}	

echo PHO_EOL
echo "Adeus!";
