<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista de Usuários</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<div class="jumbotron jumbotron-fluid">

  <h2>Listagem de Usuários</h2>

</div>
<table class="table table-striped table-bordered  table-hover">
<thead>
    <tr>
      <th scope="Código">#</th>
      <th scope="Nome">Nome</th>
    </tr>
    </thead>
  <tbody>
<?php


$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "testefernanda";

// Criar conexão com o banco
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$query_usuarios = "SELECT * FROM usuarios";
$resultado_usuarios = mysqli_query($conn, $query_usuarios);
if(($resultado_usuarios) AND ($resultado_usuarios->num_rows != 0)) {
while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)) {
    ?>
    <tr>
      <th scope="row"><?php echo $row_usuario['id'] ?></th>
      <td><?php echo utf8_encode($row_usuario['nome']) ?></td>
    </tr>
<?php }} ?>


</tbody>
</table>
</div>

</body>
</html>
