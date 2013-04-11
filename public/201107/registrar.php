<?php

	set_include_path(ini_get("include_path").".:/home/strategyatwork/public_html/includes");
	
	require_once('initialize.php');

?>

<!DOCTYPE HTML>

<html lang="pt">

	<head>
	
		<meta charset="UTF-8">
		<title>Registro :: Strategy At Work :: Julho de 2011</title>
		<meta name="url" content="http://www.strategyatwork.com.br" />
		<meta name="description" content="Newsletter mensal Strategy At Work" />
		<meta name="keywords" content="3gen gestão estratégica, execução da estratégia, strategy at work, registro" />
		<meta name="robots" content="index, follow">
		<meta name="author" content="Marcos Mayer" />
		<link rel="Shortcut Icon" href="favicon.ico">
		<link href="css/estilo.css" rel="stylesheet" type="text/css" media="screen" />
		<script type="text/javascript" src="scripts/jquery-1.6.2.js"></script>
		<script type="text/javascript" src="scripts/jquery.tools.min.js"></script>
	
	</head>
	
	<body>
	
<!-- ÁREA DE CONTEÚDO -->

		<div id="container">
		
				<header>
				
					<div id="header"><img src="images/layout/header.jpg" alt="Strategy At Work" width="960" height="185" /></div>
					
					<div id="edicao">Newsletter Strategy At Work | Edição Nº 1 | Julho de 2011</div>
				
				</header>
				
				<div id="left_column">
				
					<nav>
					
						<div id="button-1"><img src="images/layout/botao_editorial_selected.jpg" alt="Editorial" width="273" height="46" /></div>
						
						<div id="button-2"><a href="saw_recomenda.php" title="SAW recomenda"><img src="images/layout/botao_saw_recomenda.jpg" alt="SAW Recomenda" width="273" height="46" /></a></div>
						
						<div id="button-3"><a href="email_leitor.php" title="E-mail do leitor"><img src="images/layout/botao_email_leitor.jpg" alt="E-mail do leitor" width="273" height="46" /></a></div>
						
						<div id="button-4"><a href="estudo_caso.php" title="Estudo de caso"><img src="images/layout/botao_estudo_caso.jpg" alt="Estudo de caso" width="273" height="46" /></a></div>
						
						<div id="button-5"><a href="artigo_mes.php" title="Artigo do mês"><img src="images/layout/botao_artigo_mes.jpg" alt="Artigo do mês" width="273" height="46" /></a></div>
						
						<div id="button-6"><a href="outlook.php" title="Outlook"><img src="images/layout/botao_outlook.jpg" alt="Outlook" width="273" height="46" /></a></div>
						
						<div id="button-7"><a href="em_numeros.php" title="Em núm3ros"><img src="images/layout/botao_em_numeros.jpg" alt="Em núm3ros" width="273" height="46" /></a></div>
					
					</nav>
					
					<div id="botao_edicoes_anteriores"><img src="images/layout/botao_edicoes_anteriores.jpg" alt="Acesse as edições anteriores" width="270" height="120" /></div>
					
					<div id="texto_3gen">
					
						<h2>3GEN Gestão Estratégica</h2>
						
						<p>A 3GEN se configura como uma das principais empresas de consultoria e educação em gestão estratégica no Brasil, sendo referência no desenvolvimento e implementação da metodologia Balanced Scorecard (BSC).</p>
						
						<p>O foco da 3GEN é auxiliar as organizações a vencerem as barreiras que se apresentam na execução de suas estratégias.</p>
						
						<p>A 3GEN atua em empresas de diversos setores, tais como: farmacêutico, automotivo, químico, petroquímico, energia, celulose e papel, telecomunicações, siderurgia, serviços financeiros, saúde, varejo, distribuição, governo e terceiro setor, entre outros.</p>
					
					</div>
					
					<div id="texto_saw">
					
						<h2>Strategy at Work</h2>
						
						<p>Strategy@Work é a newsletter eletrônica da 3GEN Gestão Estratégica.</p>
						
						<p>Está direcionada a abordar temas pertinentes a estratégia e gestão, destinando-se aos profissionais que buscam informações relevantes e trocas de experiências que os ajudem a encontrar soluções aos desafios de seu dia a dia.</p>
						
						<p>A S@W é desenvolvida pelos sócios e consultores da 3GEN e recebe o apoio dos mais qualificados especialistas e entidades do mercado.</p>
						
						<p>As edições da S@W têm periodicidade mensal e são transmitidas para clientes, parceiros e associados da 3GEN e da S@W.</p>
						
						<p><a href="registrar.php">Registre-se!</a></p>
					
					</div>
					
					<div id="cadastro">
					
						<div id="botao_registro"><a href="registrar.php"><img src="images/layout/botao_registro.jpg" alt="Registrar" width="174" height="44" /></a></div>
					
					</div>
				
				</div>
				
				<div id="right_column">
				
					<div id="content_area">
					
						<div id="content_text">
						
							<div class="espaco_hor_20px"><img src="images/layout/blank.gif" alt="" width="1" height="1" /></div>
							
							<h3>Registro de e-mail</h3>
							
							<?php
							
								if (!empty($errorString))
								{
									echo $errorString;
								}
								
								if (!empty($session->message))
								{
									echo ($session->message . "<br><br>");
								}
							
							?>
							
							<p>Cadastre seu e-mail para receber a newsletter:</p>
							
							<form id="registro" name="registro" action="cadastra_email.php" method="post">
							
								<div id="inputs">
								
									<!-- nome completo -->
									<label for="nome">Nome:</label>
									<input id="nome" type="text" name="nome" maxlength="100" title="Digite seu nome completo." />
									
									<!-- e-mail -->
									<label for="email">E-mail:</label>
									<input id="email" type="text" name="email" maxlength="100" title="Obrigatório: digite o seu e-mail." />
									
									<!-- botão -->
									<input type="submit" name="submit" value="Cadastrar" />
								
								</div>
							
							</form>
						
						</div>
					
					</div>
				
				</div>
				
				<div class="espaco_hor_40px"><img src="images/layout/blank.gif" alt="" width="1" height="1" /></div>
				
				<footer>
				
					<div id="footer_logos">
					
						<div id="logo_3gen"><a href="http://www.3gen.com.br" title="Acesse o site da 3GEN Gestão Estratégica"><img src="images/layout/logo_3gen.png" alt="3GEN Gestão Estratégica" width="370" height="150" /></a></div>
						
						<div id="tres_barras"><img src="images/layout/blank.gif" alt="" width="1" height="1" /></div>
						
						<div id="logos_apoio">
						
							<div id="logos_apoio_titulo"><img src="images/layout/logos_apoio_titulo.png" alt="" width="280" height="40" /></div>
							
							<div class="logos_apoio_logo"><a href="#"><img src="images/layout/logos_apoio_sbgc.png" alt="SBGC" width="140" height="55" /></a></div>
							
							<div class="logos_apoio_logo"><a href="#"><img src="images/layout/logos_apoio_wec.png" alt="WEC" width="140" height="55" /></a></div>
							
							<div class="logos_apoio_logo"><a href="#"><img src="images/layout/logos_apoio_crea.png" alt="CREA-SP" width="140" height="55" /></a></div>
							
							<div class="logos_apoio_logo"><a href="#"><img src="images/layout/logos_apoio_fiergs.png" alt="FIERGS" width="140" height="55" /></a></div>
							
							<div id="logos_apoio_espaco"><img src="images/layout/blank.gif" alt="" width="1" height="1" /></div>
						
						</div>
					
					</div>
					
					<div id="redes_sociais">
					
						<div id="redes_sociais_titulo">Encontre a 3GEN nas redes sociais:</div>
						
						<div id="redes_sociais_icones">
						
							<div class="redes_sociais_icone"><a href="http://www.youtube.com"><img src="images/layout/redes_sociais_youtube.png" alt="Youtube" width="36" height="36" /></a></div>
							
							<div class="redes_sociais_icone"><a href="http://www.flickr.com"><img src="images/layout/redes_sociais_flickr.png" alt="Flickr" width="36" height="36" /></a></div>
							
							<div class="redes_sociais_icone"><a href="http://www.linkedin.com"><img src="images/layout/redes_sociais_linkedin.png" alt="Linkedin" width="36" height="36" /></a></div>
							
							<div class="redes_sociais_icone"><a href="http://www.wordpress.com"><img src="images/layout/redes_sociais_wordpress.png" alt="Wordpress" width="36" height="36" /></a></div>
							
							<div class="redes_sociais_icone"><a href="http://www.twitter.com"><img src="images/layout/redes_sociais_twitter.png" alt="Twitter" width="36" height="36" /></a></div>
							
							<div class="redes_sociais_icone"><a href="http://www.facebook.com"><img src="images/layout/redes_sociais_facebook.png" alt="Facebook" width="36" height="36" /></a></div>
							
							<div class="redes_sociais_icone"><a href="http://www.slideshare.com"><img src="images/layout/redes_sociais_slideshare.png" alt="Slideshare" width="36" height="36" /></a></div>
						
						</div>
					
					</div>
				
				</footer>
			
			<div id="container-clear"><img src="images/layout/blank.gif" alt="" width="1" height="1" /></div>
		
		</div>
		
		<!-- javascript coding -->
		<script>
		// execute your scripts when the DOM is ready. this is a good habit
		
			$(function()
			{
				// select all desired input fields and attach tooltips to them
				$("#registro :input").tooltip(
				{
					// place tooltip on the right edge
					position: "center right",
					// a little tweaking of the position
					offset: [-2, 10],
					// use the built-in fadeIn/fadeOut effect
					effect: "fade",
					// custom opacity setting
					opacity: 0.7
				}
				);
			}
			);
		</script>
	
	</body>

</html>