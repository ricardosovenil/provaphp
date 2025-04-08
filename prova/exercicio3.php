<?php
function fatorial($n) {
  if ($n <= 1) return 1;
  return $n * fatorial($n - 1);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $numero = intval($_POST["numero"]);

  if ($numero < 0) {
    $mensagem = "❌ Não existe fatorial de número negativo.";
  } else {
    $resultado = fatorial($numero);
    $sequencia = "$numero! = ";
    for ($i = $numero; $i > 1; $i--) {
      $sequencia .= "$i × ";
    }
    $sequencia .= "1 = $resultado";
    $mensagem = $sequencia;
  }
} else {
  header("Location: exercicio3.html");
  exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Resultado do Fatorial</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background: linear-gradient(120deg, #1e1e2f, #12121d);
      color: #fff;
      padding: 40px 20px;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      background: #2a2a40;
      padding: 30px;
      border-radius: 12px;
      max-width: 600px;
      width: 100%;
      text-align: center;
      box-shadow: 0 4px 20px rgba(0,0,0,0.3);
    }

    h2 {
      margin-bottom: 20px;
      font-size: 1.8rem;
      background: linear-gradient(90deg, #ffcc00, #ff8800);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .mensagem {
      font-size: 1.2rem;
      background-color: #ffffff10;
      padding: 20px;
      border-radius: 10px;
      margin-bottom: 20px;
    }

    a {
      color: #a0d4ff;
      text-decoration: none;
    }

    a:hover {
      color: #fff;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Resultado do Fatorial</h2>
    <div class="mensagem"><?= $mensagem ?></div>
    <a href="exercicio3.html">← Calcular outro número</a><br><br>
    <a href="index.html">🏠 Voltar ao Início</a>
  </div>
</body>
</html>