<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $genero = $_POST["genero"];
    $data_nascimento = $_POST["data_nascimento"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $endereco = $_POST["endereco"];

    // Aqui você pode fazer o que quiser com os dados recebidos do formulário
    // Por exemplo, salvar em um banco de dados, enviar por email, etc.

    echo "<h1>Dados do Formulário Recebidos</h1>";
    echo "<p>Nome: $nome</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Telefone: $telefone</p>";
    echo "<p>Gênero: $genero</p>";
    echo "<p>Data de Nascimento: $data_nascimento</p>";
    echo "<p>Cidade: $cidade</p>";
    echo "<p>Estado: $estado</p>";
    echo "<p>Endereço: $endereco</p>";
} else {
    echo "<p>Nenhum dado foi enviado via formulário.</p>";
}
?>