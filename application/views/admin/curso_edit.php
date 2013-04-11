
<?php 
if($erro != ''){
	echo $erro;
}
echo form_open_multipart('admin/cursos/save'); ?>
	<div>
		<label for="ano">Ano: </label>
		<select name="ano">
			<option value="2012">2012</option>
			<option value="2013">2013</option>
			<option value="2014">2014</option>
		</select>
	</div>
 	<div>
   	<?php echo form_label('Título', 'titulo'); ?>
	<?php echo form_input('titulo', $curso['titulo']); ?>
	</div>
	<div>
   	<?php echo form_label('Data/local', 'data'); ?>
	<?php echo form_input('data', $curso['data'], 'maxlength=340'); ?>
	</div>
	<div>
	<?php echo form_label('PDF', 'pdf'); ?>
	<?php echo form_upload('pdf', '','class="file"'); ?>
	<?php if($curso['pdf'] != '')
	echo '<br><a href="'.base_url().'uploads/'.$curso['pdf'].'">'.$curso['pdf'].'</a>';
	?>
	</div>
	<div>
	<?php if (isset($curso['id'])) echo form_hidden('id', $curso['id']); ?>
	<?php echo form_submit('save', 'Salvar', 'class="bt"'); ?>
	<?php echo form_button('cancel', 'Cancelar', 'class="bt cancelar" onClick="history.go(-1)"'); ?>
	</div>
    <?php echo form_close(); ?>