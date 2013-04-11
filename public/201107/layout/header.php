<?php

	set_include_path(ini_get("include_path").".;e:\\home\\penteadomendonca\\web\\includes");
	
	require_once("initialize.php");

	$page = new Page();
	$page = Page::find_by_url($_GET['url']);

?>

<!DOCTYPE HTML>

<html lang="pt">

	<head>
	
		<meta charset="UTF-8">
		<title><?php echo $page->title; ?></title>
		<meta name="url" content="http://www.penteadomendonca.com.br" />
		<meta name="description" content="<?php echo $page->description; ?>" />
		<meta name="keywords" content="<?php echo $page->keywords; ?>" />
		<meta name="robots" content="index, follow">
		<meta name="author" content="Marcos Mayer" />
		<link rel="Shortcut Icon" href="favicon.ico">
		<link href="<?php echo WEB_PATH; ?>/css/estilo.css" rel="stylesheet" type="text/css" media="screen" />
		<script type="text/javascript" src="<?php echo WEB_PATH; ?>/scripts/jquery-1.6.1.js"></script>
		<script type="text/javascript" src="<?php echo WEB_PATH; ?>/scripts/jquery.tools.min.js"></script>
		
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<!-- use gif image for IE -->
		<!--[if lt IE 7]>
			<style>
				.tooltip { background-image:url(http://www.penteadomendonca.com.br/public/images/black_arrow.gif); }
			</style>
		<![endif]-->
		
		<script type="text/javascript">
			$(document).ready(function() {
				$("#reconhecimentos img[title]").tooltip({
					effect: 'fade'
				});
			});
		</script>
	
	</head>
	
	<body>
	
<!-- ÁREA DE CONTEÚDO -->

		<div id="container">
		
			<div id="sombra-esq"><img src="<?php echo WEB_PATH; ?>/images/layout/sombra-esq.png" alt="" width="9" height="481" /></div>
			
			<div id="site">
			
<!-- ÁREA DO CABEÇALHO -->

				<header>
				
					<div id="logo-pma"><a href="index.php"><img src="<?php echo WEB_PATH; ?>/images/layout/logo-pma.gif" alt="Penteado Mendonça Advocacia" width="250" height="160" /></a></div>
					
					<div id="header-frase"><img src="<?php echo WEB_PATH; ?>/images/layout/header-frase.gif" alt="Herdeiro de uma tradição jurídica iniciada em 1860." width="250" height="160" /></div>
					
					<div id="header-espaco"><img src="<?php echo WEB_PATH; ?>/images/layout/blank.gif" alt="" width="1" height="1" /></div>
					
					<div id="header-links">
					
						<div id="idiomas">
						
							<div id="idioma-portugues">PORTUGUÊS</div>
							
							<div id="idioma-english"><a href="en/index.php">ENGLISH</a></div>
						
						</div>
						
						<div id="idioma-sel"><img src="<?php echo WEB_PATH; ?>/images/layout/idioma-sel-pt.png" alt="" width="190" height="36" /></div>
						
						<div id="busca">
						
							<form name="busca" action="busca.php" method="post">
							
								<div id="busca-campo"><input type="text" name="busca-campo" class="campo-busca" /></div>
								
								<div id="busca-botao-ir"><input type="image" name="botao-ir" src="<?php echo WEB_PATH; ?>/images/layout/botao-ir.png" alt="Buscar"></div>
							
							</form>
						
						</div>
						
						<div id="correio-interno"><a href="https://201.6.116.134:100/exchange" title="Acesso ao correio interno">Correio interno</a></div>
					
					</div>
				
				</header>
				
<!-- ÁREA DO MENU -->

				<nav>
				
					<ul id="menu">
						<li><a href="index.php" class="inicio">Início</a></li>
						<li><a href="#" class="escritorio">O escritório</a>
							
							<ul>
								<li><a href="quem-somos">Quem somos</a></li>
								<li><a href="foco">Foco</a></li>
								<li><a href="historia-e-tradicao">História e tradição</a></li>
								<li><a href="avaliacoes-e-reconhecimento">Avaliações e reconhecimento</a></li>
								<li><a href="gerencia">Gerência</a></li>
								<li><a href="valorizacao-profissional">Valorização profissional</a></li>
								<li><a href="responsabilidade-social">Responsabilidade social</a></li>
								<li><a href="objetivos">Objetivos</a></li>
								<li><a href="clientes">Clientes</a></li>
							</ul>
						
						</li>
						<li><a href="#" class="equipe">Equipe</a>
							
							<ul>
								<li><a href="socios-advogados">Sócios / Advogados</a></li>
								<li><a href="advogados-colaboradores">Advogados colaboradores</a></li>
								<li><a href="advogados-correspondentes">Advogados correspondentes</a></li>
							</ul>
						
						</li>
						<li><a href="servicos" class="servicos">Serviços</a></li>
						<li><a href="#" class="apm">Antonio Penteado Mendonça</a>
							
							<ul>
								<li><a href="curriculo-resumido">Currículo resumido</a></li>
								<li><a href="livros-publicados">Livros publicados</a></li>
							</ul>
						
						</li>
						<li><a href="#" class="midia">Na mídia</a>
							
							<ul>
								<li><a href="artigos">Artigos</a></li>
								<li><a href="cronicas">Crônicas</a></li>
							</ul>
						
						</li>
						<li><a href="contato" class="contato">Contato</a></li>
					</ul>
				
				</nav>
				
<!-- ESPAÇO HORIZONTAL -->

				<div id="espaco-hor-10px"><img src="<?php echo WEB_PATH; ?>/images/layout/blank.gif" alt="" width="1" height="1" /></div>