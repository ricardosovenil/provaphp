<?php
$busca = $_POST['busca'];

$conn = new mysqli("localhost", "root", "", "atividades");

if ($conn->connect_error) {
  die("Erro na conexão: " . $conn->connect_error);
}

$sql = "SELECT * FROM alunos WHERE nome LIKE '%$busca%' OR matricula LIKE '%$busca%' OR email LIKE '%$busca%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table>
          <tr>
            <th>Nome</th><th>Matrícula</th><th>Curso</th><th>Email</th><th>Telefone</th><th>Endereço</th><th>CEP</th><th>Cidade</th><th>UF</th><th>Curso Horas</th><th>Carga Horária</th>
          </tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['nome']}</td>
            <td>{$row['matricula']}</td>
            <td>{$row['curso']}</td>
            <td>{$row['email']}</td>
            <td>{$row['telefone']}</td>
            <td>{$row['endereco']}</td>
            <td>{$row['cep']}</td>
            <td>{$row['cidade']}</td>
            <td>{$row['uf']}</td>
            <td>{$row['curso_horas']}</td>
            <td>{$row['carga_horaria']}</td>
          </tr>";
  }
  echo "</table>";
} else {
  echo "Nenhum aluno encontrado.";
}

$conn->close();
?>
<br>
<a href="index.html"><button>Voltar ao Início</button></a>
