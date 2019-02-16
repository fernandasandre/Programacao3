<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exercício Formulários HTML</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<body>
   
    <h1>Exercício formulários</h1>

    <form action="cad.php" method="POST">
        Nome:<input type="text" size="50" maxlength="30" name="nome" value="digite seu nome">
        <br>
        Senha:<input type="password" name="senha" value="" size="8" maxlength="8">
        <br>
        Deseja receber notícias sobre:<input type="checkbox" name="esporte" value="esporte">Esporte
            <input type="checkbox" name="musica" value="musica">Música
            <br>
        Como deseja receber seu livro? <input type="radio" name="livro"value="impresso">Livro impresso
            <input type="radio" name="livro" value="digital">Livro digital
            <br>
        Deseja enviar um arquivo?<br><input type="file" name="arquivo" value="Procurar">
        <br>
        Campo oculto<input type="hidden" name="cidade"value="maringá">
        <br>
        <br>
        Escolha a avaliação 
        <select name="avaliacao">
            <option value="vazio"></option>
            <option value="av1">Avaliação 1</option>
            <option value="av2">Avaliação 2</option>
            <option value="av3">Avaliação 3</option>
            <option value="av4">Avaliação 4</option>
            <option value="av5">Avaliação 5</option>
            <option value="av6">Avaliação 6</option>
            <option value="exame">exame</option>
            </select>
            <br>
        Text Area<br><textarea name="comentario" cols="40" rows="5">Deixe seu comentário</textarea>
        <br>
        Limpe o Formulário<br><input type="reset" value="Limpar">
        <br>
        Envie com botão bonito<br> <input type="image" src="images/botao2.jpg" alt="Enviar">
        <br>
        Envie com outro botão bonito <br><input type="image" src="images/botao.jpg"alt="Enviar">
        <br>
        Envie com o botão padrão do sistema<br><input type="submit"value="Enviar">
        <br>

 
    </form>
    <br>
    <pre>
    <h2>Formulário com fotolog</h2>
    <form action = "./fotolog.php" method = "post" name = "form" enctype = "multipart/form-data">
    <input type = "file" name="foto">
    <textarea cols=50 rows=5 name="descricao"></textarea>
    <input type = "submit" value="Enviar">
    </pre>
    </form>

</body>

</html>