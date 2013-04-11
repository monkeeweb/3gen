<?php $this->lang->load('home', CURRENT_LANGUAGE); ?>

<div role="main">
    <div class="banner">
        
        <!-- jQuery handles to place the header background images -->
        <div id="headerimgs">
                <div id="headerimg1" class="headerimg"></div>
                <div id="headerimg2" class="headerimg"></div>
        </div>
    
        <!-- Slideshow controls -->
        <div id="headernav-outer">
                <div id="headernav">
                        <div id="back" class="btn"></div>
                        <div id="control" class="btn invisible"></div>
                        <div id="next" class="btn"></div>
                </div>
        </div>
        	    
	    <a href="" id="secondline"></a>
	</div>
	
	<div class="container clearfix">
		<div class="colHome">
			<a href="<?php echo base_url();?>index.php/3gen">
				<h2><?php echo $this->lang->line('3gen.title'); ?><span></span></h2>
				<img src="<?php echo base_url();?>/img/a3gen.png">
				<p><?php echo $this->lang->line('3gen.desc'); ?></p>
			</a>
		</div>
		<div class="colHome">
			<a href="<?php echo base_url();?>index.php/consultoria">
				<h2><?php echo $this->lang->line('consultoria.title'); ?><span></span></h2>
				<img src="<?php echo base_url();?>/img/consultoria.png">
				<p><?php echo $this->lang->line('consultoria.desc'); ?></p>
			</a>
		</div>
		<div class="colHome last">
			<a href="<?php echo base_url();?>index.php/educacao">
				<h2><?php echo $this->lang->line('educacao.title'); ?><span></span></h2>
				<img src="<?php echo base_url();?>/img/educacao.png">
				<p><?php echo $this->lang->line('educacao.desc'); ?></p>
			</a>
		</div>

		<div class="colHome">
			<div>
				<a href="<?php echo base_url();?>index.php/cases">
					<h2><?php echo $this->lang->line('cases.title'); ?><span></span></h2>
					<img src="<?php echo base_url();?>/img/cases.png">
					<p><?php echo $this->lang->line('cases.desc'); ?></p>
				</a>
			</div>
		</div>
		<div class="colHome">
			<div>
				<a href="<?php echo base_url();?>index.php/artigos">
					<h2><?php echo $this->lang->line('artigos.title'); ?><span></span></h2>
					<img src="<?php echo base_url();?>/img/artigos.png">
					<p><?php echo $this->lang->line('artigos.desc'); ?></p>
				</a>				
			</div>
		</div>
		<div class="colHome noticias last">
			<div>
				<a href="<?php echo base_url();?>index.php/noticias">
					<h2><?php echo $this->lang->line('noticias.title'); ?><span></span></h2>
					<img src="<?php echo base_url();?>/img/noticias.png">
					<p><?php echo $this->lang->line('noticias.desc'); ?></p>
				</a>	
				<!--
				<h2>Notícias<span></span></h2>
				<ul class="lastNews">
				<php if(isset($lastNews)) { (falta o ? antes de php)
					$i=0;
					foreach ($lastNews as $new){
						if($i==2) break;
  						$i++;
						echo '<li><a href="'.  base_url() . 'index.php/noticias/' .$new['id'] . '">' .$new['title'];
						echo '<span class="data">' .$new['data']. '</span></a></li>';
					}
				}?></ul>
				<a href="<?php echo base_url();?>index.php/noticias" class="btRed">Ver mais</a>
				-->
			</div>
		</div>
	</div>
	<div class="darkBg clearfix">
		<div class="container clearfix">
			<div class="colHome">
				<a href="http://www.execucaodaestrategia.com.br/" target="_blank">
				<h2><?php echo $this->lang->line('blog.title'); ?><span></span></h2>
					<img src="<?php echo base_url();?>/img/blog.png">
					<p><?php echo $this->lang->line('blog.desc'); ?></p>
				</a>				
			</div>
			<div class="colHome">
				<a href="http://www.youtube.com/user/StrategyExecutionTv" target="_blank">
					<h2><?php echo $this->lang->line('estrategia.title'); ?><span></span></h2>
					<img src="<?php echo base_url();?>/img/tv.png">
					<p><?php echo $this->lang->line('estrategia.desc'); ?></p>
				</a>								
			</div>
			<div class="colHome last">
				<a href="<?php echo base_url();?>/pdfs/evolucao-da-gestao-estrategica-nas-organizacoes-brasileiras.pdf" target="_blank">
				<h2><?php echo $this->lang->line('diagnostico.title'); ?><span></span></h2>
					<img src="<?php echo base_url();?>/img/diagnostico.png">
					<p><?php echo $this->lang->line('diagnostico.desc'); ?></p>
				</a>					
			</div>
		</div>
	</div>
</div>