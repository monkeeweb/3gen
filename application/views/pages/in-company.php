<?php $this->lang->load('in-company', CURRENT_LANGUAGE); ?>

<div role="main">
	<h2 class="ir topoEducacao topo"><div class="container"><?php echo $this->lang->line('title0'); ?></div></h2>
	<div class="container clearfix">
		<div class="colInterna">
			
			<p class="red"><strong><?php echo $this->lang->line('title'); ?></strong></p>
			
			<p><?php echo $this->lang->line('line1'); ?></p>
			<p><?php echo $this->lang->line('line2'); ?></p>

			<ul class="list1 noMargin">
				<li><span><strong><?php echo $this->lang->line('topic1'); ?></strong></span></li>

				<li><span><strong><?php echo $this->lang->line('topic2'); ?></strong></span></li>

				<li><span><strong><?php echo $this->lang->line('topic3'); ?></strong></span></li>

				<li><span><strong><?php echo $this->lang->line('topic4'); ?></strong></span></li>

				<li><span><strong><?php echo $this->lang->line('topic5'); ?></strong></span></li>

				<li><span><strong><?php echo $this->lang->line('topic6'); ?></strong></span></li>

				<li><span><strong><?php echo $this->lang->line('topic7'); ?></strong></span></li>

				<li><span><strong><?php echo $this->lang->line('topic8'); ?></strong></span></li>
			</ul>
			
			<p><?php echo $this->lang->line('line3'); ?></p>

		</div>
		<aside class="colInterna">
			<h3><?php echo $this->lang->line('menu.title'); ?></h3>
			<p class="top"><?php echo $this->lang->line('menu.text'); ?></p>
			<ul class="listMenu">
				<li><a href="<?php echo base_url();?>index.php/cursos"><?php echo $this->lang->line('item1'); ?></a></li>
				<li><a href="<?php echo base_url();?>index.php/in-company"><?php echo $this->lang->line('item2'); ?></a></li>
				<li class="last"><a href="<?php echo base_url();?>index.php/jogos"><?php echo $this->lang->line('item3'); ?></a></li>
			</ul>
		</aside>
		
	</div>
	<div class="darkBg clearfix">
		<div class="container clearfix">
			
		</div>
	</div>
</div>