<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "atividades";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Erro de conexão: " . $conn->connect_error);
}

$matricula = $_POST['matricula'];
$nova_carga = intval($_POST['nova_carga']);

$sql = "SELECT carga_horaria FROM alunos WHERE matricula='$matricula'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $dados = $result->fetch_assoc();
  $atualizada = $dados['carga_horaria'] + $nova_carga;

  $update = "UPDATE alunos SET carga_horaria=$atualizada WHERE matricula='$matricula'";
  if ($conn->query($update) === TRUE) {
    echo "<p style='color:lime;text-align:center;'>Carga horária atualizada para $atualizada horas.</p>";
  } else {
    echo "<p style='color:red;text-align:center;'>Erro ao atualizar: " . $conn->error . "</p>";
  }
} else {
  echo "<p style='color:red;text-align:center;'>Matrícula não encontrada.</p>";
}

$conn->close();
?>