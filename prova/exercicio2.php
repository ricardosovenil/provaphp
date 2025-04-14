<?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numero = (int) $_POST["numero"];
    echo "<!DOCTYPE html>
    <html lang='pt-BR'>
    <head>
      <meta charset='UTF-8' />
      <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
      <title>Resultado da Tabuada</title>
      <style>
        body {
          background: linear-gradient(135deg, #23232e, #101018);
          color: #fff;
          font-family: Arial, sans-serif;
          display: flex;
          justify-content: center;
          align-items: center;
          min-height: 100vh;
          padding: 20px;
        }
        .resultado {
          background: #2d2d44;
          padding: 30px;
          border-radius: 14px;
          box-shadow: 0 8px 18px rgba(0,0,0,0.5);
          max-width: 500px;
          width: 100%;
        }
        h2 {
          text-align: center;
          margin-bottom: 20px;
          background: linear-gradient(90deg, #00c6ff, #0072ff);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
          font-size: 2rem;
        }
        ul {
          list-style: none;
          padding-left: 0;
          font-size: 1.2rem;
        }
        li {
          margin-bottom: 6px;
        }
        a {
          display: block;
          text-align: center;
          margin-top: 25px;
          color: #a0d4ff;
          text-decoration: none;
        }
        a:hover {
          color: #ffffff;
        }
      </style>
    </head>
    <body>
      <div class='resultado'>
        <h2>Tabuada do $numero</h2>
        <ul>";
          for ($i = 0; $i <= 10; $i++) {
            $produto = $numero * $i;
            echo "<li>$numero x $i = $produto</li>";
          }
    echo "</ul>
        <a href='exercicio2.html'>← Voltar</a>
      </div>
    </body>
    </html>";
  } else {
    header("Location: exercicio2.html");
    exit;
  }
?>