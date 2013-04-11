
<?php 

if($erro != ''){
	echo $erro;
}
echo form_open_multipart('admin/banner/save'); ?>
 	<div>
   	<?php echo form_label('Texto', 'texto'); ?>
	<?php echo form_input('texto', $banner['texto']); ?>
	</div>
	<div>
	<?php echo form_label('URL', 'url'); ?>
	<?php echo form_input('url', $banner['url']); ?>
	</div>
	<div>
	<?php echo form_label('Idioma', 'lang'); ?>
	<?php echo form_dropdown('lang', array('br' => 'Português', 'en' => 'Inglês'), $banner['lang']); ?>
	</div>
	<div>
	<?php echo form_label('Imagem', 'imagem'); ?>
	<?php echo form_upload('imagem', '', 'class="file"'); ?>
	<?php if($banner['imagem'] != '')
	echo '<img src="'.base_url().'uploads/'.$banner['imagem'].'">';
	?>
	</div>
	<div>
	<?php if (isset($banner['id'])) echo form_hidden('id', $banner['id']); ?>
	<?php echo form_submit('save', 'Salvar', 'class="bt"'); ?>
	<?php echo form_button('cancel', 'Cancelar', 'class="bt cancelar" onClick="history.go(-1)"'); ?>
	</div>
<?php echo form_close(); ?>