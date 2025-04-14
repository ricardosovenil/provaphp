<?php
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nome = trim($_POST["nome"]);
  $idade = intval($_POST["idade"]);

  if ($idade >= 18) {
    $mensagem = "$nome é maior de 18 e tem $idade anos.";
  } else {
    $mensagem = "$nome não é maior de 18 e tem $idade anos.";
  }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Resultado - Maioridade</title>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Rubik', sans-serif;
      background: linear-gradient(to right, #232526, #414345);
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      background: #2c2c3a;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.5);
      text-align: center;
      width: 350px;
    }

    h2 {
      margin-bottom: 20px;
      color: #00d4ff;
    }

    .mensagem {
      font-size: 1.3rem;
      margin-bottom: 20px;
      font-weight: bold;
    }

    .voltar {
      padding: 12px;
      background-color: #00c6ff;
      border: none;
      color: white;
      font-weight: bold;
      border-radius: 8px;
      text-decoration: none;
      display: inline-block;
    }

    .voltar:hover {
      background-color: #0072ff;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Resultado</h2>
    <div class="mensagem"><?= $mensagem ?></div>
    <a class="voltar" href="exercicio9.html">⬅️ Voltar</a>
  </div>
</body>
</html>
