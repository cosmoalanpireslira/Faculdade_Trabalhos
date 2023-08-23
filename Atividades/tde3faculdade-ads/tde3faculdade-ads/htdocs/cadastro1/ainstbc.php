<?php include_once"config.php";
// iclude para ler o config que faz a conexao
?>

<?php
//criacao de post

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$matricula = $_POST['matricula'];
$datanascimento = $_POST['datanascimento'];
$curso = $_POST['curso'];
$turma = $_POST['turma'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

//comandos sql

$sql = "INSERT INTO tbclientes(nome, cpf, matricula, datanascimento, curso, turma, cidade, estado)VALUES('$nome','$cpf','matricula','datanascimento', 'curso','turma','cidade', 'estado')";

//conexao com o banco

if (mysqli_query($conn, $sql)){
	header("Location: addtbc.php"); 
	//volta pro arquivo de cadastro
}else{
	echo "Erro" . $sql . '<br>' . mysqli_error($conn); //mensagem de erro se a conexao falha e mostra o erro
}
mysqli_close($conn);
//fecha a conexão se enviar os dados

?>
