<?php
	$pag = @$_GET['pagina'];
	switch ($pag) {

		case 'home':
			include 'paginas/home.php';
			break;
		
		case 'sobre':
			include 'paginas/sobre_nos.php';
			break;
		
		case 'cases':
			include 'paginas/cases.php';
			break;

		case 'servicos':
			include 'paginas/servicos.php';
			break;

		case 'contatos':
			include 'paginas/contatos.php';
			break;

		default:
			include "paginas/home.php";	
			break;
	}

	switch ($_GET['id']) {
		case 'outra':
			include 'paginas/test.php';
			break;	}
?>