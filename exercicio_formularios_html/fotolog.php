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
<b> <img src="lampada.jpg" align="top">Tá bugado</b> <img src="inseto.jpg" align="top">


<?php
/*
$fonte= $_POST['foto'];
$destino = "./upload/" . $_POST['foto'];
echo("fonte : $fonte <br>");
echo("destino : $destino <br>");
if(!move_uploaded_file($fonte , $destino)) {
echo("Não foi possível enviar o arquivo!");
}
else {
echo("Arquivo enviado com sucesso!<br>");
}
*/
?>


<br>



<?php
 $cidade = $_POST["cidade"];
echo($cidade);
echo "<br><a href=\"javascript:history.go(-1)\">voltar</a>";
?>
</body>