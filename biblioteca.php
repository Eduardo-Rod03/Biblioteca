<?php
if (isset($_POST["salvar"])) {

    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $ano = $_POST["ano"];
    $sql = "INSERT INTO livros (id_livro,titulo,autor,ano)
            VALUES ('$titulo', '$autor', '$ano')";
    $pdo->exec($sql);
    
    echo "Livro cadastrado com sucesso!<br>";
}

if (isset($_POST["salvar"])) {

    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $ano = $_POST["ano"];
    $sql = "UPDATE INTO livros (titulo,autor,ano puplicação)
            VALUES ('$titulo', '$autor', '$ano')";
    $pdo->exec($sql);
    
    echo "Livro alterado com sucesso!<br>";
}

if (isset($_POST["salvar"])) {

    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $ano = $_POST["ano"];
    $sql = "DELETE INTO livros (titulo,autor,ano puplicação)
            VALUES ('$titulo', '$autor', '$ano')";
    $pdo->exec($sql);
    
    echo "Livro deletado com sucesso!<br>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de biblioteca</title>
</head>
<body>
    <h1>Sistema de biblioteca</h1>
    <h2>Novo livro</h2>
    <form method="POST" action="biblioteca.php">
        <input type="hidden" name="acao" value="salvar">
        <p>Título do livro: <input type="text"name="titulo" required></p>
        <p>Autor: <input type="text" name="autor" required></p>
        <p>Ano de publicação: <input type="number"="ano" required></p>
        <button type="submit">Salvar Livro</button>

    <h2>Editar Livro</h2>
    <form method="POST" action="biblioteca.php">
        <input type="hidden" name="acao" value="update">
        <p>Código do livro: <input type="text"name="id_livro" required></p>
        <p>Novo titulo: <input type="text" name="titulo" required></p>
        <p>Novo autor: <input type="text"name="autor" required></p>
        <button type="submit">Atualizar Livro</button>

    <h2>Excluir Livro</h2>
    <form method="POST" action="biblioteca.php">
        <input type="hidden" name="acao" value="atualizar">
        <p>Código do livro: <input type="text"name="id_livro" required></p>
        <button type="submit">Excluir Livro</button>
</body>
</html>

