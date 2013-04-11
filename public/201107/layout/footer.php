<?php

	set_include_path(ini_get("include_path").".;e:\\home\\penteadomendonca\\web\\includes");
	
	require_once("initialize.php");

?>

<!-- ESPAÇO HORIZONTAL -->

				<div id="espaco-hor-10px"><img src="<?php echo WEB_PATH; ?>/images/layout/blank.gif" alt="" width="1" height="1" /></div>
				
<!-- ÁREA DO RODAPÉ -->

				<footer>
				
					<p class="footer-top">© <?php echo date("Y", time()); ?> Penteado Mendonça Advocacia - Todos os direitos reservados</p>
					
					<p class="footer-bottom">Rua Almirante Pereira Guimarães, 326 - Pacaembu - São Paulo - SP - Brasil&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Email: <a href="mailto:contato@penteadomendonca.com.br">contato@penteadomendonca.com.br</a> - Telefone: (11) 3879-9700</p>
				
				</footer>
			
			</div>
			
			<div id="sombra-dir"><img src="<?php echo WEB_PATH; ?>/images/layout/sombra-dir.png" alt="" width="9" height="481" /></div>
			
			<div id="container-clear"><img src="<?php echo WEB_PATH; ?>/images/layout/blank.gif" alt="" width="1" height="1" /></div>
		
		</div>
	
	</body>

</html>