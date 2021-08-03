/*Calcule a média aritmética das 3 notas de um aluno e mostre, 
além do valor da média, uma mensagem de "Aprovado",
caso a média seja igual ou superior a 6, ou a mensagem "reprovado", 
caso contrário. */

/*
<?php
$nota1=3;
$nota2=7;
$nota3=9;

$media=(( $nota1 + $nota2 + $nota3)/3);

if ($media >= 6){
    echo "aprovado";
}
else
echo "reprovado";

?>
*/


/*12. Elabore um algoritmo que dada a idade de um nadador classifica-o
em uma das seguintes categorias:
 

 infantil A = 5 - 7 anos

 infantil B = 8-10 anos

 juvenil A = 11-13 anos

 juvenil B = 14-17 anos

 adulto = maiores de 18 anos */

<?php
//receber idade
    $idade = 22;
//classificar
    if ($idade > 4 && $idade < 8){ 
        echo "Infantil A";
    }
    elseif ($idade > 7 && $idade < 11){
        echo "Infantil B";
    }
    elseif ($idade > 10 && $idade < 14){
        echo "Juvenil A";
    }
    elseif ($idade > 13 && $idade < 18){
        echo "Juvenil B";
    }
    elseif ($idade >= 18){
        echo "Adulto";
    }
?>

/*
Mais simples e fácil de ler para outras pessoas se usar SWITCH.
Utilizar <= >= 

Codigo Limpo por Robert C Martin
 */




/*13. Escreva um algoritmo que leia 3 números inteiros e
 mostre o maior deles. */

<?php
//receber tres numeros
$n1 = 8;
$n2 = 3;
$n3 = 10;

echo (max($n1, $n2, $n3));

?>

/*14. Escreva um algoritmo que leia o código de um aluno e suas três notas.
Calcule a média ponderada do aluno, considerando que o peso para
a maior nota seja 4 e para as duas restantes, 3. 
Mostre o código do aluno, suas três notas, a média calculada
e uma mensagem "APROVADO" se a média for maior ou igual
a 5 e "REPROVADO" se a média for menor que 5.*/

<?php



?>

/*15. Faça um algoritmo que leia um nº inteiro e mostre uma mensagem
indicando se este número é par ou ímpar, e se é positivo ou negativo.*/


<?php

$n = 8;

if ($n%2 == 0){
	echo "par ";
}else {
	echo "impar ";
}

if ($n > 0){
	echo "positivo";
}else{
	echo "negativo";
}

?>





