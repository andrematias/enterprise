<!-- Conexão com o banco de dados MySQL -->
<?php require "../conf/conexaoBD.php" ?>
<!DOCTYPE html>
<html>
<meta charset= utf-8 />
<link rel="stylesheet" type="text/css" href="../style/main.css">
<head>
	<title>Obrigado, Entraremos em contato com você</title>
</head>
<body>
	<?php 
		//Variaveis do formulário de captura para consultas
		$nome  = utf8_decode($_POST['nome']);
		$email = utf8_decode($_POST['email']);
		$telefone = $_POST['tel'];
		$checkbox = (@$_POST['news']) ? @$_POST['news'] : utf8_decode("não");

		//Validação de formulário
		if (empty($nome) OR $nome == "Seu Nome") {
			if (empty($email) OR $email == "Seu melhor email") {

			//Quadro de retorno ao usuário 
				echo "
				<div id= 'alerta'> 
					<h1 class= 'titulos'>Por favor, Preencha pelo menos seu nome e email. </h1>
					<a class= 'paragrafos' href='../index.php'>Voltar a Pagina Inicial</a>
				</div>
			";
			}
		}else{
			mysql_query("INSERT INTO prospects(nome, email, telefone, news) VALUES ('$nome', '$email', '$telefone', '$checkbox')");

			//Quadro de retorno ao usuário 
			echo "
				<div id= 'alerta'> 
					<h1 class= 'titulos'>Obrigado, entraremos em contato com você. </h1>
					<a class= 'paragrafos' href='../index.php'>Voltar a Pagina Inicial</a>
				</div>
			";
		}
	?>
</body>
</html>