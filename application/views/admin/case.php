		<div class="new"> <a href="<?php echo base_url();?>index.php/admin/cases/newCase">Novo Case</a></div>
			
		<table>
			<?php
			foreach( $cases as $case ){
				echo '<tr>';
				echo '<td>' . $case['titulo'] . '</td>';
				echo '<td style="width:60px;"><a href="'.base_url().'index.php/admin/cases/edit/' . $case['id'] . '">Editar</a></td>';
				echo '<td style="width:60px;"><a href="'.base_url().'index.php/admin/cases/remove/' . $case['id'] . '">Apagar</a></td>';
				echo '</tr>';
				
			}
			?>
		</table>