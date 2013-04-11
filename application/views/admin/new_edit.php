
<?php 
if($erro != ''){
	echo $erro;
}
echo form_open_multipart('admin/news/save'); ?>
 	<div>
   	<?php echo form_label('Título', 'titulo'); ?>
	<?php echo form_input('titulo', $new['titulo']); ?>
	</div>
	<div>
   	<?php echo form_label('Resumo', 'resumo'); ?>
	<?php echo form_input('resumo', $new['resumo'], 'maxlength=340'); ?>
	</div>
	<div>
   	<?php echo form_label('Data', 'data'); ?>
	<?php echo form_input('data', $new['data']); ?>
	</div>
	
	<div>
	<?php echo form_label('Texto', 'texto'); ?>
	<?php echo form_textarea('texto', $new['texto']); ?>
	</div>
	
	<div>
	<?php if (isset($new['id'])) echo form_hidden('id', $new['id']); ?>
	<?php echo form_submit('save', 'Salvar', 'class="bt"'); ?>
	<?php echo form_button('cancel', 'Cancelar', 'class="bt cancelar" onClick="history.go(-1)"'); ?>
	</div>
    <?php echo form_close(); ?>