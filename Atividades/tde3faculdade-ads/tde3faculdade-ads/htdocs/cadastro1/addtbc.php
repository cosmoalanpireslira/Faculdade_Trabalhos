<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro de Aluno</title>
</head>
<body>
<!-criação do front-tabela e botoes ->

<form method="get" name="formbusca" action="busca.php">
<label>Pesquisa</label> 
<input type="text" name="busca">
<input type="submit" name="" value="ok">
</form> <br>
<form method="post" name="cliente" action="ainstbc.php"> 
<label>Nome</label>
<input type="text" name="nome" maxlength="30">
&ensp;
<label>CPF</label> 
<input type="text" name="cpf" maxlength="11"><br><br>

<label>Matricula</label>
<input type="text" name="matricula" maxlength="10">&ensp;
<label>Data de Nascimento</label>
<input type="text" name="datanascimento" maxlength="6"><br><br>

<label>Curso</label>
<input type="text" name="curso" maxlength="20">&ensp;
<label>Turma</label>
<input type="text" name="turma" maxlength="5"><br><br>

<label>Cidade</label>
<input type="text" name="cidade" maxlength="20">
&ensp;
<label>Estado</label>
<input type="text" name="estado" maxlength="20">
<br><br>

<input type="submit" name="enviar" value="Cadastrar"><br><br>
</form>
</body>
</html>