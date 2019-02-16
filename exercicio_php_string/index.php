<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aprendendo PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<body>

    <h1>Exercio com variáveis numéricas aula 6</h1>
    <br>

    <?php
    echo ("Exercício de criação de variável numérica<br>");
$valor_1 = 36;
$valor_2 = 45;
$soma = $valor_1 + $valor_2;
echo "<br>";
echo $soma;

?>

    <h1> Exercícios com Strings aula 7</h1>

    <?php

echo ("Exercício com strlen<br>");
$str = "abcdef";
echo strlen ($str);

echo ("<br>Exercício com str_replace<br>");
$str = "Fernanda P S André";
$str=str_replace("P", "Paim", $str);
echo "<br>";
echo ($str);

echo ("<br>Exercício com str_pos<br>");

$str = "abcdef";
echo "<br>";
echo strpos ($str, "f");

echo ("<br>Exercício concatenar string1<br>");
$nome = "fernanda";
$sobrenome = "André";
$nome_completo = $nome . $sobrenome;
echo "<br>";
echo "Nome: $nome_completo";

echo ("<br>Exercício concatenar string2<br>");
$nome = "Fernanda";
$sobrenome = "André";
echo "<br>";
echo ($nome . " " . $sobrenome);


?>
    <h1>Aula 8</h1>
    <h2> Array </h2>

    <?php
$coisas = array("casa", "faculdade", "gato", "cachorro", "anéis", "jóias", "apartamento", "carro");
echo ($coisas[3]);
echo "<br>";
print_r($coisas);

?>

    <h2> Outra forma de criar array </h2>

    <?php
$cor[1] = "vermelho";
$cor[2] = "vermelho";
$cor[4] = "vermelho";

echo "<br>";
var_dump($cor);

?>

    <h2> Outra forma ainda de criar array</h2>
    <?php
$cor = array(1=> "vermelho", 2=>"verde", 3=>"azul", "teste"=>1);
echo "<br>";
var_dump($cor);

?>
    <h1> funções para ordenar array</h1>

    <h2>Sort (ordem crescente)</h2>
    <?php
$coisas = array("casa", "faculdade", "gato", "cachorro", "anéis", "jóias", "apartamento", "carro");
print_r($coisas);
sort($coisas);
echo "<br>";
print_r($coisas);
?>

    <h2>Rsort (ordem decrescente)</h2>
    <?php
$coisas = array("casa", "faculdade", "gato", "cachorro", "anéis", "jóias", "apartamento", "carro");
print_r($coisas);
rsort($coisas);
echo "<br>";
print_r($coisas);
?>

    <h2> Asort (ordem crescente mantendo associação entre índice e valores)</h2>
    <?php
$array = array("idade"=>83, "peso"=>75);
print_r($array);
asort($array);
echo "<br>";
print_r($array);
?>

    <h2> Arsort (ordem decrescente mantendo associação entre índice e valores)</h2>
    <?php
$array = array("idade"=>83, "peso"=>75);
print_r($array);
arsort($array);
echo "<br>";
print_r($array);
?>

    <h2> Ksort (Ordena o array pelas chaves, em ordem crescente</h2>
    <?php
$array = array("idade"=>23, "peso"=>75);
print_r($array);
ksort($array);
echo "<br>";
print_r($array);
?>

    <h2> Krsort (Ordena o array pelas chaves, em ordem decrescente</h2>
    <?php
$array = array("idade"=>23, "peso"=>75);
print_r($array);
krsort($array);
echo "<br>";
print_r($array);
?>

    <h1> Listas</h1>
    <?php
list ($a, $b, $c)=array("a", "b", "c");
echo "<br>";
echo("$a - $b - $c");
?>

</body>

</html>