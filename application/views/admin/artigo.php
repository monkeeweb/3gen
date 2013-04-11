		<div class="new"> <a href="<?php echo base_url();?>index.php/admin/artigos/newartigo">Novo artigo</a></div>
			
		<table>
			<?php
			foreach( $artigos as $artigo ){
				echo '<tr>';
				echo '<td>' . $artigo['titulo'] . '</td>';
				echo '<td style="width:60px;"><a href="'.base_url().'index.php/admin/artigos/edit/' . $artigo['id'] . '">Editar</a></td>';
				echo '<td style="width:60px;"><a href="'.base_url().'index.php/admin/artigos/remove/' . $artigo['id'] . '">Apagar</a></td>';
				echo '</tr>';
				
			}
			?>
		</table>