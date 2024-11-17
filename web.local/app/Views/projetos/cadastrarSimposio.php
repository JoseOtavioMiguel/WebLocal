<?php
// Configura��es do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbSimpac";

// Conectar ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conex�o
if ($conn->connect_error) {
    die("Falha na conex�o: " . $conn->connect_error);
}

// Receber dados do formul�rio
id = $_POST['id'];
$nomeSimposio = $_POST['nomeSimposio'];
$dataInicio = $_POST['dataInicio'];
$dataFinal = $_POST['dataFinal'];
$dataCadastro = date('Y-m-d H:i:s');  // Data atual

// Inserir dados na tabela 'simposio'
$sql = "INSERT INTO simposio (id, nomeSimposio,dataInicio, dataFinal, dataCadastro) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param($id, $nomeSimposio,$dataInicio, $dataFinal, $dataCadastro);

if ($stmt->execute()) {
    echo "<script>alert('Simp�sio cadastrado com sucesso!'); window.location.href = 'pagina_inicial.php';</script>";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();
?>