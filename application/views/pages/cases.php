
<div role="main">
	<h2 class="ir topoCases">Cases</h2>
	<div class="container clearfix">
		<div class="colInterna cases">
			<?php if(isset($cases)) { 
				foreach ($cases as $case) {
					echo '<div class="case"><h3>' . $case['titulo'] . '</h3>';
					echo '<img src="'.base_url().'/uploads/'.$case['thumb'].'" />';
					echo '<p>'.$case['resumo'].'</p>';
					echo '<a href="'.base_url().'index.php/cases/'.$case['id'].'">Clique aqui para ver o Case completo</a></div>';
				}
			?>

			<?php }else{
					echo '<h3>' . $case['titulo'] . '</h3>';
					echo '<img src="'.base_url().'/uploads/'.$case['thumb'].'" />';
					echo '<p>'.$case['texto'].'</p>';
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