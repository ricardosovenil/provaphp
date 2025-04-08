<?php
$mensagem = "";
$media = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $notas = [
    floatval($_POST['nota1']),
    floatval($_POST['nota2']),
    floatval($_POST['nota3']),
  ];

  $media = (($notas[0]*2) + ($notas[1]*2) + ($notas[2]*1)) / 5;

  if ($media >= 7) {
    $mensagem = "✅ Aluno Aprovado!";
  } else {
    $mensagem = "❌ Aluno Reprovado!";
  }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Resultado - Média Final</title>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Rubik', sans-serif;
      background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      background: #2a3f54;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.4);
      width: 350px;
      text-align: center;
    }

    h2 {
      margin-bottom: 20px;
      color: #00c6ff;
    }

    .media {
      font-size: 1.3rem;
      margin-bottom: 12px;
    }

    .mensagem {
      font-size: 1.4rem;
      font-weight: bold;
      margin-bottom: 18px;
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
    <?php if ($media !== null): ?>
      <div class="media">Média Final: <strong><?= number_format($media, 2, ',', '.') ?></strong></div>
      <div class="mensagem"><?= $mensagem ?></div>
    <?php else: ?>
      <p>Nenhuma nota foi enviada.</p>
    <?php endif; ?>
    <a class="voltar" href="exercicio8.html">⬅️ Voltar</a>
  </div>
</body>
</html>
