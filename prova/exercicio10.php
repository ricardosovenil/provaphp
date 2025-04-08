<?php
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $numero = intval($_POST["numero"]);

  switch ($numero) {
    case 1: $mensagem = "📅 Janeiro"; break;
    case 2: $mensagem = "📅 Fevereiro"; break;
    case 3: $mensagem = "📅 Março"; break;
    case 4: $mensagem = "📅 Abril"; break;
    case 5: $mensagem = "📅 Maio"; break;
    case 6: $mensagem = "📅 Junho"; break;
    case 7: $mensagem = "📅 Julho"; break;
    case 8: $mensagem = "📅 Agosto"; break;
    case 9: $mensagem = "📅 Setembro"; break;
    case 10: $mensagem = "📅 Outubro"; break;
    case 11: $mensagem = "📅 Novembro"; break;
    case 12: $mensagem = "📅 Dezembro"; break;
    default: $mensagem = "❌ Não existe mês com esse número."; break;
  }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Resultado - Mês Correspondente</title>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Rubik', sans-serif;
      background: linear-gradient(to right, #1d1f20, #383c3f);
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
      color: #00c6ff;
    }

    .mensagem {
      font-size: 1.3rem;
      font-weight: bold;
      margin-bottom: 20px;
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
    <a class="voltar" href="exercicio10.html">⬅️ Voltar</a>
  </div>
</body>
</html>
