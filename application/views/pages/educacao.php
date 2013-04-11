<?php $this->lang->load('educacao', CURRENT_LANGUAGE); ?>

<div role="main">
	<h2 class="ir topoEducacao topo"><div class="container"><?php echo $this->lang->line('title'); ?></div></h2>
	<div class="container clearfix">
		<div class="colInterna">			
			<p><?php echo $this->lang->line('line1'); ?></p>

			<ul class="list1 noMargin">
				<li><span><strong><?php echo $this->lang->line('topic1'); ?></strong></span></li>
				<li><span><strong><?php echo $this->lang->line('topic2'); ?></strong></span></li>
				<li><span><strong><?php echo $this->lang->line('topic3'); ?></strong></span></li>
				<li><span><strong><?php echo $this->lang->line('topic4'); ?></strong></span></li>
			</ul>

			<p class="red"><strong><?php echo $this->lang->line('subtitle1'); ?></strong></p>

			<img src="<?php echo base_url();?>/img/sea.png" alt="Strategy Execution Academy" class="logo-sea"></p>
			<p><?php echo $this->lang->line('line2'); ?></p>
			<p><?php echo $this->lang->line('line3'); ?></p>
			<p><?php echo $this->lang->line('line4'); ?></p>
			<p><?php echo $this->lang->line('line5'); ?></p>

			<p class="red"><strong><?php echo $this->lang->line('subtitle2'); ?></strong></p>
			<p><?php echo $this->lang->line('line6'); ?></p>

			<p class="red"><strong><?php echo $this->lang->line('subtitle3'); ?></strong></p>
			<p><?php echo $this->lang->line('line7'); ?></p>
			<p><?php echo $this->lang->line('line8'); ?></p>			
		</div>
		<aside class="colInterna">
			<h3><?php echo $this->lang->line('menu.title'); ?></h3>
			<p class="top"><?php echo $this->lang->line('menu.text'); ?></p>
			<ul class="listMenu">
				<li><a href="<?php echo base_url();?>index.php/cursos"><?php echo $this->lang->line('item1'); ?></a></li>
				<li><a href="<?php echo base_url();?>index.php/in-company"><?php echo $this->lang->line('item2'); ?></a></li>
				<li class="last"><a href="<?php echo base_url();?>index.php/jogos"><?php echo $this->lang->line('item3'); ?></a></li>
			</ul>
			
			<aside class="colInterna">
				<h3><?php echo $this->lang->line('download.title'); ?></h3>
				<p class="top"><?php echo $this->lang->line('download.subtext'); ?></p>
				<img src="<?php echo base_url();?>/img/folderedu.png" alt="Folder institucional 3GEN">
				<a href="<?php echo $this->lang->line('download.link'); ?>" class="folder <?php echo $this->lang->line('download.class'); ?>"><?php echo $this->lang->line('download.help'); ?></a>
			</aside>
		</aside>		
	</div>
	<div class="darkBg clearfix">
		<div class="container clearfix"></div>
	</div>
</div>