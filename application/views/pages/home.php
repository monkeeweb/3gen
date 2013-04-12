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
				<h2><?php echo $this->lang->line('box1.title'); ?></h2>
				<h5><?php echo $this->lang->line('box1.subtitle'); ?></h5>
				<img src="<?php echo base_url();?>img/img-home-test.jpg" />
				<p class="subtitle"><?php echo $this->lang->line('box1.subtitle2'); ?></p>
				<p><?php echo $this->lang->line('box1.desc'); ?></p>
			</a>
		</div>
		<div class="colHome">
			<a href="">
				<h2><?php echo $this->lang->line('box2.title'); ?></h2>
				<h5><?php echo $this->lang->line('box2.subtitle'); ?></h5>
				<img src="<?php echo base_url();?>img/img-home-test.jpg" />
				<p class="subtitle"><?php echo $this->lang->line('box2.subtitle2'); ?></p>
				<p><?php echo $this->lang->line('box2.desc'); ?></p>
			</a>
		</div>
		<div class="colHome">
			<a href="">
				<h2><?php echo $this->lang->line('box3.title'); ?></h2>
				<h5><?php echo $this->lang->line('box3.subtitle'); ?></h5>
				<img src="<?php echo base_url();?>img/img-home-test.jpg" />
				<p class="subtitle"><?php echo $this->lang->line('box3.subtitle2'); ?></p>
				<p><?php echo $this->lang->line('box3.desc'); ?></p>
			</a>
		</div>
		
		<div class="colHome last">
			<a href="<?php echo base_url();?>index.php/educacao">
				<h2><?php echo $this->lang->line('box4.title'); ?></h2>
				<h5><?php echo $this->lang->line('box4.subtitle'); ?></h5>
				<img src="<?php echo base_url();?>img/img-home-test.jpg" />
				<p class="subtitle"><?php echo $this->lang->line('box4.subtitle2'); ?></p>
				<p><?php echo $this->lang->line('box4.desc'); ?></p>
			</a>		    
		</div>
	</div>
	<div class="darkBg clearfix">
		<div class="container clearfix">
			<div class="colHome mural-publicacoes">
				<a href="">
				    <h2 class="with-arrow"><?php echo $this->lang->line('box5.title'); ?><span></span></h2>
				</a>
				
				<div><a href="">
				    <p>Fusce condimentum dui at lacus molee. Donec ullamcorper molestie aliquam.</p>
				    <span>12 de abril de 2013</span>
				</a></div>
				
				<div class="no-border"><a href="">
				    <p>Fusce condimentum dui at lacus molee. Donec ullamcorper molestie aliquam.</p>
				    <span>12 de abril de 2013</span>
				</a></div>
				
				<a href="" class="bt-vermais">VER MAIS</a>
			</div>
			<div class="colHome">
				<a href="http://www.youtube.com/user/StrategyExecutionTv" target="_blank">
					<h2 class="with-arrow"><?php echo $this->lang->line('box6.title'); ?><span></span></h2>
					<img src="<?php echo base_url();?>img/img-home-test-2.jpg" alt="" class="in-column" />
					<p class="subtitle"><?php echo $this->lang->line('box6.subtitle'); ?></p>
					<p><?php echo $this->lang->line('box6.desc'); ?></p>
					<a href="" class="bt-vermais">VER MAIS</a>
				</a>								
			</div>
			<div class="colHome">
				<a href="http://execucaodaestrategia.com.br/" target="_blank">
					<h2 class="with-arrow"><?php echo $this->lang->line('box7.title'); ?><span></span></h2>
					<img src="<?php echo base_url();?>img/img-home-test-2.jpg" alt="" class="in-column" />
					<p class="subtitle"><?php echo $this->lang->line('box7.subtitle'); ?></p>
					<p><?php echo $this->lang->line('box7.desc'); ?></p>
					<a href="" class="bt-vermais">VER MAIS</a>
				</a>					
			</div>
			<div class="colHome last">
				<a href="http://www.3gen.com.br//pdfs/evolucao-da-gestao-estrategica-nas-organizacoes-brasileiras.pdf" target="_blank">
					<h2 class="with-arrow"><?php echo $this->lang->line('box8.title'); ?><span></span></h2>
					<img src="<?php echo base_url();?>img/img-home-test-2.jpg" alt="" class="in-column" />
					<p class="subtitle"><?php echo $this->lang->line('box8.subtitle'); ?></p>
					<p><?php echo $this->lang->line('box8.desc'); ?></p>
					<a href="" class="bt-vermais">VER MAIS</a>
				</a>					
			</div>
		</div>
	</div>
</div>