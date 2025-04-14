<?php
$excluir = $_POST['excluir'];

$conn = new mysqli("localhost", "root", "", "atividades");

if ($conn->connect_error) {
  die("Erro na conexão: " . $conn->connect_error);
}

$sql = "DELETE FROM alunos WHERE nome = '$excluir' OR matricula = '$excluir' OR email = '$excluir'";
$resultado = $conn->query($sql);

if ($conn->affected_rows > 0) {
  echo "Registro excluído com sucesso.";
} else {
  echo "Nenhum registro encontrado com esse critério.";
}

$conn->close();
?>
<br>
<a href="index.html"><button>Voltar ao Início</button></a>
