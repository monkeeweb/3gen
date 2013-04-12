<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->

<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->

<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->

<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>3GEN - <?php echo $title; ?></title>
	<meta name="description" content="">
	<meta name="author" content="Monkee">
	<meta name="format-detection" content="telephone=no">

	<!--<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=device-width, maximum-scale=1.0" />-->
	<meta name="viewport" content="width=1050, maximum-scale=0.8" />

	<link rel="stylesheet" href="<?php echo base_url();?>css/bg-slider.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/style.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/style2.css">
	<link rel="shortcut icon" href="<?php echo base_url();?>img/favicon.ico" />	

	<script src="<?php echo base_url();?>js/libs/modernizr-2.5.3.min.js"></script>

	<script type="text/javascript">
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-9632650-16']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>	
	

</head>
<body>
	<?php $this->lang->load('header', CURRENT_LANGUAGE); ?>
	<aside class="topStrip">
		<div class="container">
			<span>+55 11 3071-3123</span>
			
			<ul>
				<li><a href="?lang=br"><img src="<?php echo base_url();?>/img/br.png" /></a></li>
				<li><a href="?lang=en"><img src="<?php echo base_url();?>/img/en.png" /></a></li>
				<!--<li><a href=""><img src="<?php echo base_url();?>/img/es.png" /></a></li>-->
			</ul>
			
				
		</div>
	</aside>
<header id="topNav">
	<div class="container">
		<h1 class="ir"><a href="<?php echo base_url();?>" class="ir">3GEN - Gestão estratégica</a></h1>
		<nav>
			<a href="<?php echo base_url();?>index.php/3gen">3GEN</a>
			<a href="<?php echo base_url();?>index.php/consultoria"><?php echo $this->lang->line('consultoria'); ?></a>
			<a href="<?php echo base_url();?>index.php/educacao"><?php echo $this->lang->line('educacao'); ?></a>
			<a href="<?php echo base_url();?>index.php/clientes"><?php echo $this->lang->line('clientes'); ?></a>
			<a href="<?php echo base_url();?>index.php/equipe"><?php echo $this->lang->line('equipe'); ?></a>
			<a href="<?php echo base_url();?>index.php/trabalhe"><?php echo $this->lang->line('carreira'); ?></a>
			<!--<a href="http://www.youtube.com/user/StrategyExecutionTv" target="_blank">Strategy Execution TV</a>-->
			<a href="<?php echo base_url();?>index.php/contato"><?php echo $this->lang->line('contato'); ?></a>
			
		</nav>
	</div>
</header>