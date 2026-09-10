<?php
$cep="01012123";
echo "cep = $cep";

$valor=5124.784;
echo "<br>Valor = $valor"; //Valor = 5124.784
echo "<br>R$ ".number_format($valor,2,",",".");
echo "<br>R$ ".number_format($valor,0,",",".");
/*

R$ 5.124,78
R$ 5.125

*/

$nome="Bete";
echo "<br>Nome = $nome";
echo '<br>Nome = $nome';
$cor="green";
echo "<p style='color:$cor'>$nome</p>";

/*

valor=5124
valor=0.784

*/

$inteiro=(int)$valor;
$decimal=$valor-$inteiro;
echo "<br>valor = $inteiro";
echo "<br>valor = ".$decimal;
printf("<br>valor = %.3f",$decimal);

define("PI",3.1415);
echo "<br>PI = ".PI;

?>