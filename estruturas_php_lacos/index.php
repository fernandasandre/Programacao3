<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Estruturas PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<body>
    <h1>Exercício 1 FOR</h1>
    <?php 
$tab = 7;
for ($i = 1 ; $i <= 10 ; $i++)
echo($tab."*".$i."=".$i*$tab."<br>");
    ?>
 <h1>Exercício 2 While</h1>
    <?php 
$menor=0;
$maior=300;
$fahr = $menor;
while ($fahr <= $maior){
 $celsius = 5 * ($fahr-32) / 9;
 if($fahr == 0) $fahr = '000';
 if(($fahr >= 10) && ($fahr <= 90)) $fahr = '0'.$fahr;
 echo($fahr." || ".$celsius."<br>");
 $fahr = $fahr + 10;
}
    ?>

<h1> Exercício 3 Do While</h1>
<?php

$menor=0;
$maior=300;
$fahr = $menor;
do{
 $celsius = 5 * ($fahr-32) / 9;
 if($fahr == 0) $fahr = '000';
 if(($fahr >= 10) && ($fahr <= 90)) $fahr = '0'.$fahr;
 echo($fahr." || ".$celsius."<br>");
 $fahr = $fahr + 10;
}while ($fahr <= $maior);

?>

<h1> Exercício 4 FOREACH</h1>
<?php

$vetor = array(3, 5, 9, 11);
foreach($vetor as $i => $valor){
echo("Valor atual de \$vetor[$i] é $valor<br>");
}
?>

<h1> Exercício 5 FOREACH </h1>
<?php

$vetor = array(3, 5, 9, 11);
// mostra o arranjo original
foreach($vetor as $i => $valor){
echo("Valor atual de \$vetor[$i]: $valor<br>");
}
// modifica o arranjo
foreach($vetor as &$valor){
 $valor = $valor * 2;
}
// mostra o arranjo com novos valores
foreach($vetor as $i => $valor){
echo("Valor atual de \$vetor[$i]: $valor<br>");
}
unset($value); // desfaz a referência com o último elemento

?>

<h1> Exercício 6 FOREACH Matriz </h1>
<?php
$matriz[0][0] = "0x0";
$matriz[0][1] = "0x1";
$matriz[1][0] = "1x0";
$matriz[1][1] = "1x1";
foreach($matriz as $linha=>$v1){
foreach($v1 as $coluna=>$v2){
echo("[$linha][$coluna] = $v2<br>");
}
}

?>

<h1> Exercício 7 Break</h1>
<?php
for($t = 1; $t < 100; $t++){
    echo($t." ");
    if ($t == 10) break;
    }
?>

<h1> Exercício 8 Continue</h1>
<?php
// inicializa o vetor
for ($i=0; $i<10; $i++)
 $vet[$i] = $i;
 // calcula os valores evitando a divisão por zero
 for ($i=0; $i<10; $i++){
 if ($vet[$i] == 0){
 echo(" O 'continue' evita a divisão por zero<br>");
 continue;
 echo("não passa por aqui<br>");
 }
 $vet[$i]=1/$vet[$i];
 echo("1/".$i." = ".$vet[$i]."<br>");
}
?>

<h1> Exercício 9 Return </h1>
<?php
function teste(){
    $var = 34;
    if($var > 3)
    return(1);
    else
    return(9);
   }
   $valor = teste();
   echo($valor);
   ?>


</body>

</html>