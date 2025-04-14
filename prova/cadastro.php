<?php
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $conn = new mysqli("localhost", "root", "", "atividades");

  if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
  }

  $nome = $_POST["nome"];
  $matricula = $_POST["matricula"];
  $curso = $_POST["curso"];
  $email = $_POST["email"];
  $telefone = $_POST["telefone"];
  $endereco = $_POST["endereco"];
  $cep = $_POST["cep"];
  $cidade = $_POST["cidade"];
  $uf = $_POST["uf"];
  $curso_horas = $_POST["curso_horas"];
  $carga_horaria = $_POST["carga_horaria"];

  $sql = "INSERT INTO alunos (nome, matricula, curso, email, telefone, endereco, cep, cidade, uf, curso_horas, carga_horaria)
          VALUES ('$nome', '$matricula', '$curso', '$email', '$telefone', '$endereco', '$cep', '$cidade', '$uf', '$curso_horas', $carga_horaria)";

  if ($conn->query($sql) === TRUE) {
    $mensagem = "<p class='sucesso'>✅ Aluno cadastrado com sucesso!</p>";
  } else {
    $mensagem = "<p class='erro'>❌ Erro ao cadastrar aluno: " . $conn->error . "</p>";
  }

  $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Cadastro de Alunos</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      padding: 40px;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .mensagem {
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      text-align: center;
    }
    .sucesso {
      color: green;
      font-weight: bold;
    }
    .erro {
      color: red;
      font-weight: bold;
    }
    a {
      display: inline-block;
      margin-top: 20px;
      text-decoration: none;
      background-color: #007bff;
      color: white;
      padding: 10px 18px;
      border-radius: 8px;
      transition: background 0.3s;
    }
    a:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="mensagem">
    <?= $mensagem ?>
    <a href="index.html">⬅ Voltar ao Início</a>
  </div>
</body>
</html>
