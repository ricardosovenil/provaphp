<?php
$a = $_POST['a'] ?? null;
$b = $_POST['b'] ?? null;
$mensagem = "";

if ($a !== null && $b !== null) {
  if ($a > $b) {
    $mensagem = "✅ A é maior que B";
  } elseif ($a < $b) {
    $mensagem = "🔻 A é menor que B";
  } else {
    $mensagem = "⚖️ A e B são iguais";
  }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Resultado - Comparação</title>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Rubik', sans-serif;
      background: linear-gradient(to right, #141e30, #243b55);
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .resultado-container {
      background: #2c3e50;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.4);
      width: 320px;
      text-align: center;
    }

    h2 {
      margin-bottom: 20px;
      color: #00c6ff;
    }

    .mensagem {
      font-size: 1.3rem;
      margin-bottom: 20px;
    }

    .voltar {
      padding: 12px 20px;
      background-color: #00c6ff;
      border: none;
      color: white;
      font-weight: bold;
      border-radius: 6px;
      font-size: 1rem;
      cursor: pointer;
      text-decoration: none;
      display: block;
    }

    .voltar:hover {
      background-color: #0072ff;
    }
  </style>
</head>
<body>
  <div class="resultado-container">
    <h2>Resultado</h2>
    <div class="mensagem"><?= $mensagem ?></div>
    <a href="exercicio7.html" class="voltar">⬅️ Voltar</a>
  </div>
</body>
</html>
