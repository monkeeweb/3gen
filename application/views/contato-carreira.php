
<div role="main">
	<h2 class="ir topoCarreira">Contato</h2>
	<div class="container clearfix">
		<div class="colInterna">
			<h3>Envie seu currículo:</h3>
			<?php if(!isset($enviado)) { ?>
				<form method="post" action="upload.php" class="jqtransform" id="form" enctype="multipart/form-data">
				    <input type="hidden" name="recipient" value="contato@duffbrasil.com.br">
				    <input type="hidden" name="redirect" value="contato-enviado.html">
				    <input type="hidden" name="subject" value="Contato">
				    <br />
				    <br />
				    <div class="rowElem">
					    <label for="name">Nome completo*:</label>
					    <input type="text" name="nome" title="Digite seu nome completo."></input>
				    </div>
				    <div class="rowElem">
					    <label for="telefone">Telefone*:</label>
					    <input type="text" name="telefone" id="telefone" title="Digite seu telefone com DDD."></input>
				    </div>
				    <div class="rowElem">
					    <label for="email">Email*:</label>
					    <input type="text" name="email" id="email" title="Digite um email válido."></input>
				    </div>
				    <div class="rowElem">
					<br />
					<span>*campos obrigatórios</span>
					<br />
					<br />
					<br />
					<h3>Envie sua foto*:</h3>
					<p>Somente fotos com extensão .jpg/.png e até 2mb de tamanho.</p>
					<!--<label for="foto">Foto*:</label>-->
					<input type="file" name="foto" id="foto" class="bt-foto" />
					<br />
					<br />
					<br />
					<h3>E não esqueça de compartilhar...</h3>
					<br />
					<a href="http://www.facebook.com/sharer.php?u=http://www.facebook.com/duffbrasil/app_143085895832875" class="bt-compartilhar" target="_blank"><img src="imgs/bt-compartilhar.png" /></a>
					
				    </div>
				    
				    <div class="rowElem">
					    <label for="submit"></label>
					    <input type="submit" name="Submit" value="Enviar">
				    </div>
				</form>       
			<?php
			}else{
				echo '<p>' . $enviado . '</p>';
			}?>
		</div>
		<aside class="colInterna">


		</aside>
		
	</div>
	<div class="darkBg clearfix">
		<div class="container clearfix">
			
		</div>
	</div>
</div>