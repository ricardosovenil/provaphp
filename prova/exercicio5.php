<?php
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $numero = $_POST["numero"];
  if ($numero % 2 == 0) {
    $resultado = "🔵 O número $numero é Par.";
  } else {
    $resultado = "🟠 O número $numero é Ímpar.";
  }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Resultado - Par ou Ímpar</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Rubik', sans-serif;
      background: linear-gradient(120deg, #1e1e2f, #12121d);
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      background: #2a2a40;
      padding: 30px 40px;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.4);
      text-align: center;
      max-width: 400px;
    }

    h2 {
      background: linear-gradient(90deg, #00c6ff, #0072ff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-size: 2rem;
      margin-bottom: 20px;
    }

    .resultado {
      font-size: 1.3rem;
      font-weight: bold;
      margin-bottom: 30px;
      background-color: #ffffff10;
      padding: 15px;
      border-radius: 10px;
    }

    a {
      text-decoration: none;
      background-color: #00c6ff;
      color: white;
      padding: 10px 20px;
      border-radius: 8px;
      font-weight: bold;
      transition: background 0.3s ease;
      display: inline-block;
    }

    a:hover {
      background-color: #0072ff;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Resultado</h2>
    <div class="resultado"><?= $resultado ?></div>
    <a href="exercicio5.html">🔙 Voltar</a>
  </div>
</body>
</html>
