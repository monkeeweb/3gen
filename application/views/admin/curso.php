		<div class="new"> <a href="<?php echo base_url();?>index.php/admin/cursos/newcurso">Novo curso</a></div>
			
		<table>
			<?php
			foreach( $cursos as $curso ){
				echo '<tr>';
				echo '<td>' . $curso['titulo'] . '</td>';
				echo '<td style="width:60px;"><a href="'.base_url().'index.php/admin/cursos/edit/' . $curso['id'] . '">Editar</a></td>';
				echo '<td style="width:60px;"><a href="'.base_url().'index.php/admin/cursos/remove/' . $curso['id'] . '">Apagar</a></td>';
				echo '</tr>';
				
			}
			?>
		</table>