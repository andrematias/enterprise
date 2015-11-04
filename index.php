<?php require "conf/conexaoBD.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset = utf-8 />
	<meta content="A Enterprise esta sempre pronta para surpreender com os melhores serviços em marketing e comunicação para você se destacar na sua área e se tornar uma autoridade no assunto." />
	<title>Enterprise.:Criatividade em Marketing e Comunicação:.</title>
	<link rel="stylesheet" type="text/css" href="style/main.css" />
</head>
<body>
	<!--CABEÇALHO-->
	<header class= "cabecalho">
	<img id= "logo" src="images/logo_enterprise.png" alt="Enterprise Criatividade em Marketing e Comunicação" title="Enterprise" />
	<img id= "abstract" src="images/abstract.png" />
	</header>

	<!--MENU-->
	<nav class="menu_horizontal">
		<a href="index.php">Inicio</a>
		<a href="?pagina=sobre_nos">Sobre Nós</a>
		<a href="?pagina=cases">Casos de Sucesso</a>
		<a href="?pagina=servicos">Serviços</a>
		<a href="?pagina=contatos">Contatos</a>
	</nav>

	<!--CONTEÚDO-->
	<?php
		require ("paginas/redirecionador.php");
	?>

	<!-- RODAPÉ -->
	<footer class="rodape">
	<section id="sessaoFooter">
		<nav>
			<h3>INICIO</h3>
			<a href="#"><p>Destaques</p></a>
			<br />
			<a href="#"><img src="images/facebook_logo.png" alt="facebook.com/enterprise" title="fanpage enterprise" /></a>
			<br />
			<br />
			<small>Todos os direitos reservados a <strong>enterprise</strong></small>
			<br />
			<small>Desenvolvido por <strong>André Matias</strong></small>
		</nav>

		<nav>
			<h3>SOBRE NÓS</h3>
			<a href="#"><p>Nossa Missão</p></a>
			<a href="#"><p>Nossa Visão</p></a>
		</nav>

		<nav>
			<h3>SERVIÇOS</h3>
			<a href="#"><p>Marketing Direto</p></a>
			<a href="#"><p>Promoções</p></a>
			<a href="#"><p>Relações Públicas</p></a>
			<a href="#"><p>Propaganda</p></a>
			<a href="#"><p>Webpresence</p></a>
			<a href="#"><p>Redes Sociais</p></a>
			<a href="#"><p>Email Marketing</p></a>
			<p>...</p>
		</nav>

		<nav>
			<h3>CONTATOS</h3>
			<p>atendimento@enterprise.ppg.br</p>
			<p>Tel: (11) 4169-5050</p>
			<br />
			<p>Rua: Mariluz, 22, Granja Viana, 
			<br />
			Chacara São João, Cotia - SP.</p>
			<p>CEP: 05345-230</p>
		</nav>
	</section>
	</footer>

</body>
</html>