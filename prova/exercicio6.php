<?php
$a = $_POST['a'] ?? null;
$b = $_POST['b'] ?? null;
$resultado = "";

if ($a !== null && $b !== null) {
    if ($a < $b) {
        $resultado = "$a, $b";
    } elseif ($b < $a) {
        $resultado = "$b, $a";
    } else {
        $resultado = "Os valores são iguais: $a";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Resultado - Ordem Crescente</title>
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

    .box {
      background-color: #2e2e3a;
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.5);
      text-align: center;
    }

    h2 {
      color: #00c6ff;
      margin-bottom: 20px;
    }

    .resultado {
      font-size: 1.3rem;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .voltar {
      padding: 10px 20px;
      background-color: #00c6ff;
      border: none;
      border-radius: 6px;
      color: white;
      font-weight: bold;
      font-size: 1rem;
      cursor: pointer;
      text-decoration: none;
    }

    .voltar:hover {
      background-color: #0072ff;
    }
  </style>
</head>
<body>
  <div class="box">
    <h2>Resultado</h2>
    <div class="resultado"><?= $resultado ?></div>
    <a class="voltar" href="exercicio6.html">⬅️ Voltar</a>
  </div>
</body>
</html>
