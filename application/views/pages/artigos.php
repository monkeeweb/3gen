
<div role="main">
	<h2 class="ir topoArtigos">artigos</h2>
	<div class="container clearfix">
		<div class="colInterna artigos">
			<?php if(isset($artigos)) { 
				foreach ($artigos as $artigo) {
					echo '<div class="artigo"><h3>' . $artigo['titulo'] . '</h3>';
					echo '<p>'.$artigo['resumo'].'</p>';
					echo '<a href="'.base_url().'/uploads/'.$artigo['pdf'].'">Clique aqui para fazer o download do PDF</a></div>';
				}
			?>

			<?php }else{
					echo '<h3>' . $artigo['titulo'] . '</h3>';
					echo '<img src="'.base_url().'/uploads/'.$artigo['thumb'].'" />';
					echo '<p>'.$artigo['texto'].'</p>';
			}

			?>

		</div>
		<aside class="colInterna" style="visibility:hidden">
			<!--
			<h3>Últimas Notícias</h3>
			<p class="top">Mantenha-se informado</p>
			<ul class="lastNews">
				<php if(isset($lastNews)) { 
					foreach ($lastNews as $new){
						echo '<li><a href="'.  base_url() . 'index.php/noticias/' .$new['id'] . '">' .$new['titulo'];
						echo '<span class="data">' .$new['data']. '</span></a></li>';
					}
				}?>
			</ul>
			-->
		</aside>
		
	</div>
	<div class="darkBg clearfix">
		<div class="container clearfix">
			
		</div>
	</div>
</div>