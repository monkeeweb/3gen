
<div role="main">
	<h2 class="ir topoNoticias">Notícias</h2>
	<div class="container clearfix">
		<div class="colInterna noticias">
			<?php if(isset($news)) { 
				foreach ($news as $new) {
					echo '<div class="noticia"><h3><a href="'.base_url().'index.php/noticias/'.$new['id'].'">' . $new['titulo'] . '</a></h3>';
					echo '<p><a href="'.base_url().'index.php/noticias/'.$new['id'].'">'.$new['resumo'].'</a></p>';
					$conv1 = explode("-",$new['data']);
        				$conv2 = array_reverse($conv1);
        				$data = implode("/",$conv2);
					echo '<span class="data">'.$data.'</span></div>';
				}
			?>

			<?php }else{
					echo '<h3>' . $new['titulo'] . '</h3>';
					$conv1 = explode("-",$new['data']);
        				$conv2 = array_reverse($conv1);
        				$data = implode("/",$conv2);
					echo '<span class="data">'.$data.'</span>';
					echo '<p>'.$new['texto'].'</p>';
			}

			if(isset($numPages) && $numPages > 1){
				for ($i=1; $i <= $numPages; $i++) { 
					echo 'Páginas: <a href="'.base_url().'index.php/noticias/page/' . $i . '">' . $i . '</a> ' ;
		 		}
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