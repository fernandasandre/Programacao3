<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>aula estruturas de HTML</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<h1> HTML </h1>

<h2> Links </h2>

<div>


<a href = "endereço de destino"> texto para clicar </a>

<p>
<h4>relativo</h4>
<p>
- faz referência mesmo documento
</p>
<a href="index.html"> Página home</a> <br>
<a href="/index.html"> Página home</a><br>
<a href="../index.html"> Página home</a><br>

<h4>Absoluto</h4>
<p>- outro documento (externo) </p>
<a href="https://www.unicesumar.edu.br"> Página da Cesumar</a><br><pre>

<h4>Trechos de documento</h4>
<p> - liga textos dentro do mesmo documento</p>
<a href="#ead"> Assuntos do EAD</a>
<br>
<a name="ead"> Assuntos do EAD </a>
</p>

<h2>Tabelas</h2>

<table border="1">

<tr>
<td> Linha 1 e coluna 1 </td>
<td> Linha 1 e coluna 2 </td>
 </tr>

 <tr>
 <td> Linha 2 e coluna 1 </td>
 <td> Linha 2 e coluna 2 </td>
</tr>

</table>

<table border="1">

<tr>
<td> Código </td>
<td> Produto </td>
<td colspan="2"> Ação </td> 
 </tr>

 <tr>
 <td> CD </td>
 <td> DVD </td>
 <td> [Editar]</td>
 <td> [Excluir]</td>
</tr>

</table>

<table border="1">

<tr>
<td rowspan="2"> Imagem </td>
<td> Programação 3 </td>
</tr>

 <tr>
 <td> Aulas conceituais 1 </br>
 Aulas Conceituais 2 </td>
 </tr>

</table>

<h2>Listas</h2>

<h3>lista de definição</h3>
<dl>
<dt> Termo a ser definido 1</dt>
<dd> Definição 1
<dt> Termo a ser definido 2</dt>
<dd> Definição 2
</dl>

<h3>lista de itens não ordenada</h3>
<ul>
<li> item da lista</li>
<li> item da lista</li>
</ul>

<ul type="circle">
<li> item da lista com círculo</li>
<li> item da lista</li>
</ul>

<ul type="disc">
<li> item da lista com disco</li>
<li> item da lista</li>
</ul>

<ul type="square">
<li> item da lista com quadrado</li>
<li> item da lista</li>
</ul>

<h3>lista de itens numerados</h3>
<ol>
<li> item da lista</li>
<li> item da lista</li>
</ol>

<ol type="1">
<li> item da lista</li>
<li> item da lista</li>
</ol>

<ol type="i">
<li> item da lista</li>
<li> item da lista</li>
</ol>

<ol type="a">
<li> item da lista</li>
<li> item da lista</li>
</ol>

<h2> Imagem</h2>
<img src="foto.jpg">texto<br>
<img src="foto.jpg" align="top">texto<br>
<img src="foto.jpg" align="middle">texto<br>
<img src="foto.jpg" align="bottom">texto<br>
<img src="foto.jpg" align="right">texto<br>
<img src="foto.jpg" align="left">texto<br>
<img src="foto.jpg" align="left" width="150px" height="100px">texto<br>
<img src="foto.jpg" border="1">texto<br>


</tbody>
</table>
</div>

</body>
</html>
