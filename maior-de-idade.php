<?php

$idade = 18;

if ($idade < 16) {
	// se e menor que 16, nao pode entrar
	echo "nao pode entrar";
}
elseif ($idade < 18) {
	// menor que 18 maior 16. Tem adulto?
	$acompanhada = 1;

	echo $permissao = ($acompanhada == 1) ?
	"pode entrar" : "nao pode entrar";
}
else{
	echo "pode entrar";
}

?>




