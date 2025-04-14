
<?php
  $resultado = "";
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numero = $_POST["numero"];

    if ($numero > 0) {
      $resultado = "✅ Valor Positivo";
    } elseif ($numero < 0) {
      $resultado = "🔻 Valor Negativo";
    } else {
      $resultado = "⚪ Igual a Zero";
    }
  }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Exercício 1 - Número Positivo, Negativo ou Zero</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

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
      border-radius: 12px;
      padding: 30px;
      max-width: 500px;
      width: 100%;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
    }

    h2 {
      font-size: 2rem;
      margin-bottom: 24px;
      background: linear-gradient(90deg, #00c6ff, #0072ff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      text-align: center;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: 500;
    }

    input[type="number"] {
      width: 100%;
      padding: 12px;
      border-radius: 8px;
      border: none;
      margin-bottom: 20px;
      font-size: 1rem;
      outline: none;
    }

    button {
      background-color: #00c6ff;
      border: none;
      color: white;
      padding: 12px 24px;
      font-size: 1rem;
      font-weight: bold;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s ease;
      width: 100%;
    }

    button:hover {
      background-color: #0072ff;
    }

    .resultado {
      margin-top: 25px;
      font-size: 1.2rem;
      font-weight: bold;
      background-color: #ffffff10;
      padding: 15px;
      border-radius: 10px;
      text-align: center;
    }

    .voltar {
      display: block;
      margin-top: 20px;
      text-align: center;
      color: #a0d4ff;
      text-decoration: none;
    }

    .voltar:hover {
      color: #fff;
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Exercício 1</h2>
    <form method="post" action="">
      <label for="numero">Digite um número:</label>
      <input type="number" name="numero" id="numero" required>
      <button type="submit">Verificar</button>
    </form>

    <?php if (!empty($resultado)) : ?>
      <div class="resultado"><?= $resultado ?></div>
    <?php endif; ?>

    <a class="voltar" href="index.html">← Voltar para a Página Inicial</a>
  </div>
</body>
</html>