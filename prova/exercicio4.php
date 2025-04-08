<?php
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];
  $operacao = $_POST["operacao"];

  switch ($operacao) {
    case "soma":
      $resultado = $num1 + $num2;
      break;
    case "subtracao":
      $resultado = $num1 - $num2;
      break;
    case "multiplicacao":
      $resultado = $num1 * $num2;
      break;
    case "divisao":
      $resultado = $num2 != 0 ? $num1 / $num2 : "Erro: Divisão por zero";
      break;
    default:
      $resultado = "Operação inválida";
  }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Resultado da Calculadora</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Rubik', sans-serif;
      background: linear-gradient(120deg, #1e1e2f, #12121d);
      color: #fff;
      padding: 40px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
    }

    .container {
      background: #2a2a40;
      padding: 30px 40px;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.4);
      max-width: 500px;
      text-align: center;
    }

    h2 {
      background: linear-gradient(90deg, #00c6ff, #0072ff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-size: 2rem;
      margin-bottom: 20px;
    }

    p {
      font-size: 1.5rem;
      font-weight: bold;
      margin-bottom: 30px;
      background-color: #ffffff10;
      padding: 15px;
      border-radius: 10px;
    }

    a {
      background-color: #00c6ff;
      color: white;
      text-decoration: none;
      padding: 12px 24px;
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
    <h2>Resultado da Operação</h2>
    <p><?= $resultado ?></p>
    <a href="exercicio4.html">🔙 Voltar para a Calculadora</a>
  </div>
</body>
</html>
