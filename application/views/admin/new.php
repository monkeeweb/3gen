		<div class="new"> <a href="<?php echo base_url();?>index.php/admin/news/newNew">Nova Notícia</a></div>
			
		<table>
			<?php
			foreach( $news as $new ){
				echo '<tr>';
				echo '<td>' . $new['titulo'] . '</td>';
				echo '<td style="width:60px;"><a href="'.base_url().'index.php/admin/news/edit/' . $new['id'] . '">Editar</a></td>';
				echo '<td style="width:60px;"><a href="'.base_url().'index.php/admin/news/remove/' . $new['id'] . '">Apagar</a></td>';
				echo '</tr>';
				
			}
			?>
		</table>