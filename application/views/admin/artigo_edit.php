
<?php 
if($erro != ''){
	echo $erro;
}
echo form_open_multipart('admin/artigos/save'); ?>
 	<div>
   	<?php echo form_label('Título', 'titulo'); ?>
	<?php echo form_input('titulo', $artigo['titulo']); ?>
	</div>
	<div>
   	<?php echo form_label('Resumo', 'resumo'); ?>
	<?php echo form_input('resumo', $artigo['resumo'], 'maxlength=340'); ?>
	</div>
	<!--div>
	<?php echo form_label('Texto', 'texto'); ?>
	<?php echo form_textarea('texto', $artigo['texto']); ?>
	</div-->
	<div>
	<?php echo form_label('PDF', 'pdf'); ?>
	<?php echo form_upload('pdf', '','class="file"'); ?>
	<?php if($artigo['pdf'] != '')
	echo '<br><a href="'.base_url().'uploads/'.$artigo['pdf'].'">'.$artigo['pdf'].'</a>';
	?>
	</div>
	<div>
	<?php if (isset($artigo['id'])) echo form_hidden('id', $artigo['id']); ?>
	<?php echo form_submit('save', 'Salvar', 'class="bt"'); ?>
	<?php echo form_button('cancel', 'Cancelar', 'class="bt cancelar" onClick="history.go(-1)"'); ?>
	</div>
    <?php echo form_close(); ?>