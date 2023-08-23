<?php include_once"config.php";
// iclude para ler o config que faz a conexao
?>

<?php
//config da caixa de busca
$busca = $_GET['busca']
$result_nomes = "SELECT * FROM tbclientes WHERE nome like '%$busca%'";
// like é usado para pesquisas mais precisas 

$resultado = mysqli_query($conn , $result_nomes);
while ($linha = mysqli_fetch_array($resultadd)){
	echo $nome = $linha['nome'];
	echo '<br>'
}
//imprime o resultado da busca

?>