		<div class="new"> <a href="<?php echo base_url()?>index.php/admin/banner/newBanner">Novo Banner</a></div>
			<table>
			<?php
			foreach( $banners as $banner ){
				echo '<tr>';
				echo '<td style="width:200px;">' . $banner['texto'] . '</td><td>' . $banner['url'] . '</td>';
				echo '<td style="width:60px;"><a href="'.base_url().'index.php/admin/banner/edit/' . $banner['id'] . '">Editar</a></td>';
				echo '<td style="width:60px;"><a href="'.base_url().'index.php/admin/banner/remove/' . $banner['id'] . '">Apagar</a></td>';
				echo '</tr>';				
			}
			?>
		</table>