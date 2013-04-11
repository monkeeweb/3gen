<?php $this->lang->load('contato', CURRENT_LANGUAGE); ?>

<div role="main">
	<h2 class="ir topoContato topo"><div class="container"><?php echo $this->lang->line('title'); ?></div></h2>
	<div class="container clearfix">
		<div class="colInterna">
			
			<?php if(!isset($enviado)) { ?>
			<form method="post" id="contato" action="<?php echo $action ?>">
				<input type="text" class="required" name="nome" placeholder="<?php echo $this->lang->line('input1'); ?>" />
				<input type="text" class="required email" name="email" placeholder="<?php echo $this->lang->line('input2'); ?>" />
				<input type="text" class="required" name="telefone" placeholder="<?php echo $this->lang->line('input3'); ?>" />
				<input type="text" class="required" name="empresa" placeholder="<?php echo $this->lang->line('input4'); ?>" />
				<input type="text" class="required" name="cargo" placeholder="<?php echo $this->lang->line('input5'); ?>" />
				<input type="text" class="required" name="como" placeholder="<?php echo $this->lang->line('input6'); ?>" />
				<textarea name="mensagem" placeholder="<?php echo $this->lang->line('input7'); ?>"></textarea>
				<input type="submit" value="<?php echo $this->lang->line('input8'); ?>" class="btEnviar" /> 
			</form>
			<?php
			}else{
				echo '<p>' . $enviado . '</p>';
			}?>
		</div>
		<aside class="colInterna">
			<h3><?php echo $this->lang->line('line1'); ?></h3>
			<p class="top">+55 11 3071 3123</p>
			<!--<img src="<?php echo base_url();?>/img/telefone.jpg" alt="Telefone">-->
			
			<p><strong style="color:#000"><?php echo $this->lang->line('line2'); ?></strong><br>
				<a href="mailto:contato@3gen.com.br">contato@3gen.com.br</a><br>
				
			</p>			
			
			<p><strong style="color:#000"><?php echo $this->lang->line('line3'); ?></strong><br>
				Rua Bandeira Paulista, 477 - 5º andar - Itaim-Bibi<br>
				CEP: 04532-011 - São Paulo - SP / Brasil
				
			</p>

		</aside>
		
	</div>
	<div class="darkBg clearfix">
		<div class="container clearfix">
			
		</div>
	</div>
</div>