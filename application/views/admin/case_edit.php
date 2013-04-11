
<?php 
if($erro != ''){
	echo $erro;
}
echo form_open_multipart('admin/cases/save'); ?>
 	<div>
   	<?php echo form_label('Título', 'titulo'); ?>
	<?php echo form_input('titulo', $case['titulo']); ?>
	</div>
	<div>
   	<?php echo form_label('Resumo', 'resumo'); ?>
	<?php echo form_input('resumo', $case['resumo'], 'maxlength=340'); ?>
	</div>
	<div>
	<?php echo form_label('Texto', 'texto'); ?>
	<?php echo form_textarea('texto', $case['texto']); ?>
	</div>
	<div>
	<?php echo form_label('Thumb', 'thumb'); ?>
	<?php echo form_upload('thumb', '','class="file"'); ?>
	<?php if($case['thumb'] != '')
	echo '<br><img src="'.base_url().'uploads/'.$case['thumb'].'">';
	?>
	</div>
	<div>
	<?php if (isset($case['id'])) echo form_hidden('id', $case['id']); ?>
	<?php echo form_submit('save', 'Salvar', 'class="bt"'); ?>
	<?php echo form_button('cancel', 'Cancelar', 'class="bt cancelar" onClick="history.go(-1)"'); ?>
	</div>
    <?php echo form_close(); ?>