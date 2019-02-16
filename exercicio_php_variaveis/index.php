<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Variáveis, Constantes e Operadores</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<body>

    <h1>Variáveis</h1>
    <br>

    <p> Variáveis são espaços na memória utilizados para guardar valores.</P>
    <p> Escopo de variável é o tempo de vida dela.</p>
    <p> As variáveis podem ser criadas no:
        <ul>
            <li>Programa Principal:</li>
        </ul>
        <p>Tornam as variáveis acessíveis a todo o programa e pelas funções</p>
        <?php
$conta = 340;
function teste(){
    $conta = 100;
    echo ("<br>");
    echo("Conta é " . $conta);
}
echo $conta;
teste();
?>
        <ul>
            <li>Dentro das funções: </li>
            <p> A variável só existe dentro da função, fora dela ela não existe </p>
        </ul>

        <?php
function funcao1(){
    return $x = 10;
}
function funcao2(){
    return $x = -199;
}
echo $a = funcao1() . "<br>";
echo $b = funcao2() . "<br>";
echo $x;
?>

        <ul>
            <li>Na lista de parâmetros:</li>
            <p> Uma cópia do valor da variável ou o seu endereço é enviado para a função chamada </p>
        </ul>



        <?php

function teste2 ($z){
    echo ("A variável z vale: $z <br>");
}
teste2 (5);

?>


        <h2>Acessando a variável Global</h2>


        <?php
$valor = "Variável Global";
function globo(){
    echo ($GLOBALS["valor"]);
}
globo();
?>

        <h2> Adaptador de Escopo "Static"</h2>
        <pre>
<p> Uma variável é chamada Estática quando é precedida pelo modificador "static".
Este tipo de variável é visível apenas no escopo local, é inicializada apenas uma vez,
 e seu valor não é perdido após a execuão do script deixar o escopo.
</pre>
        <?php

function teste3(){
    static $z = 0;
    echo ("A variável z vale: $z <br>");
    $z++;
}

teste3();
teste3();

?>

        <h2>Variáveis Variáveis</h2>
        <pre> São variáveis cujo nome pode variar também, além do valor.<br>
Sua utilização é feita através do duplo cifrão $$ precedendo o nome da variável.
</pre>

        <?php
$a = "simples";
echo $a . "<br>";
$$a = "dupla";
echo $simples;
?>

        <h2>Variáveis externas ao PHP (POST e GET)</h2>
        <pre>As variáveis externas ao PHP podem sercriadas de duas formas:
<ul>
<li>Através do Método GET - Escreve a variável no endereço WEB;</li>
<li>Através do Método POST - Partindo de formulários compostos por campos preenchidos pelo usuário.</li>
</ul>


<?PHP
//http://localhost/exercicio_php_vari%C3%A1veis/teste.php?var1=33&var2=65

$var1 = $_GET["var1"];
$var2 = $_GET["var2"];
$resultado = $var1 * $var2;
Echo "$var1 * $var2 = $resultado";

?>

<h2>Constantes</h2>
<pre> Uma constante é uma estrutura que uma vez associado um valor, este não pode ser alterado.</pre>

        <?PHP
define("PI", 3.1415926536);
$raio = 3;
$circunf = 2 * PI * $raio;
echo ($circunf);
?>

<h2>Operadores de atribuição</h2>
<pre> O operador básico de atribuição é o "=". <br>
No caso de operadores derivados de atribuição, a operação é feita entre os dois operandos antes da atribuição, 
sendo atribuído o resultado da operação ao primeiro operando, especificado à esquerda da atribuição, por exemplo:<br>
A operação $a = $a + 30 pode ser escrita como $a += 30;
</pre>

</body>

</html>