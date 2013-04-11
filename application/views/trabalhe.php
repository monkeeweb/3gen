<?php $this->lang->load('trabalhe', CURRENT_LANGUAGE); ?>

<div role="main">
	<h2 class="ir topoCarreira topo"><div class="container"><?php echo $this->lang->line('title0'); ?></div></h2>
	<div class="container clearfix">
		<div class="colInterna">
			<h3><?php echo $this->lang->line('title'); ?></h3>
			
			<p><?php echo $this->lang->line('line1'); ?></p>

			<p><?php echo $this->lang->line('line2'); ?></p>

			<p><?php echo $this->lang->line('line3'); ?></p>

			<p><?php echo $this->lang->line('line4'); ?></p>

			<p><?php echo $this->lang->line('line5'); ?></p>
			<br />
			<p><em style="font-weight:bold"><?php echo $this->lang->line('title2'); ?></em>.</p>
			
			<?php if(!isset($enviado)) { ?>
			<form method="post" enctype="multipart/form-data" id="contato" action="<?php echo $action ?>">
				<input type="text" class="required" name="nome" placeholder="<?php echo $this->lang->line('input1'); ?>" />
				<input type="text" class="required email" name="email" placeholder="E-mail" />
				<?php echo form_upload('curr', '','class="file"'); ?>
				<input type="submit" value="<?php echo $this->lang->line('send'); ?>" class="btEnviar" /> 
			</form>
			<?php
			}else{
				echo '<p>' . $enviado . '</p>';
			}?>
		</div>
		<aside class="colInterna">
			
			<p><strong style="color:#000"><?php echo $this->lang->line('title3'); ?></strong><br>
				<a href="mailto:carreira@3gen.com.br">carreira@3gen.com.br</a><br>
				
			</p>			
			

		</aside>
		
	</div>
	<div class="darkBg clearfix">
		<div class="container clearfix">
			
		</div>
	</div>
</div>