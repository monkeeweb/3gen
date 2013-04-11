<?php $this->lang->load('consultoria', CURRENT_LANGUAGE); ?>

<div role="main">
	<h2 class="ir topoConsultoria topo"><div class="container"><?php echo $this->lang->line('title'); ?></div></h2>
	<div class="container clearfix">
		<div class="colInterna">
			<p><?php echo $this->lang->line('line1'); ?></p>
			<img src="<?php echo $this->lang->line('tabela'); ?>" style="margin:0 auto; display:block;">
			<p><?php echo $this->lang->line('line2'); ?></p>
			<img src="<?php echo $this->lang->line('grafico'); ?>" style="margin:0 auto; display:block;">
			<p><?php echo $this->lang->line('line3'); ?></p>

			<p class="red"><strong><?php echo $this->lang->line('items.title'); ?></strong></p>
			<ul class="list1 noMargin">
				<li><span><?php echo $this->lang->line('item1'); ?></span></li>
				<li><span><?php echo $this->lang->line('item2'); ?></span></li>
				<li><span><?php echo $this->lang->line('item3'); ?></span></li>
				<li><span><?php echo $this->lang->line('item4'); ?></span></li>
				<li><span><?php echo $this->lang->line('item5'); ?></span></li>
				<li><span><?php echo $this->lang->line('item6'); ?></span></li>
			</ul>

		</div>
		<aside class="colInterna">
			<h3>Menu</h3>
			<p class="top"><?php echo $this->lang->line('menu.title'); ?></p>
			<ul class="listMenu">
				<li><a href="<?php echo base_url();?>index.php/formule"><?php echo $this->lang->line('menu1'); ?></a></li>
				<li><a href="<?php echo base_url();?>index.php/mapeie"><?php echo $this->lang->line('menu2'); ?></a></li>
				<li><a href="<?php echo base_url();?>index.php/alinhe"><?php echo $this->lang->line('menu3'); ?></a></li>
				<li><a href="<?php echo base_url();?>index.php/envolva"><?php echo $this->lang->line('menu4'); ?></a></li>
				<li><a href="<?php echo base_url();?>index.php/implemente"><?php echo $this->lang->line('menu5'); ?></a></li>
				<li class="last"><a href="<?php echo base_url();?>index.php/governe"><?php echo $this->lang->line('menu6'); ?></a></li>
			</ul>
		</aside>
		
	</div>
	<div class="darkBg clearfix">
		<div class="container clearfix">
			
		</div>
	</div>
</div>
