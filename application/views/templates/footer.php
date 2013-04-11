<?php $this->lang->load('footer', CURRENT_LANGUAGE); ?>

<footer>
	<div class="container">
		<a href="" target="_blank" class="ir social facebook">Facebook</a>
		<a href="http://www.linkedin.com/company/301427?trk=tyah" target="_blank" class="ir social linkedin">Linkedin</a>
		<!--<a href="" class="ir social twitter">Twitter</a>-->
		<a href="http://www.youtube.com/user/StrategyExecutionTv" target="_blank" class="ir social youtube">Youtube</a>
		<a href="http://www.execucaodaestrategia.com.br/" target="_blank" class="ir social gmp">GMP</a>
		<a href="http://www.monkee.com.br" target="_blank" class="by-monkee"><img src="<?php echo base_url();?>/img/by-monkee.png" alt="<?php echo $this->lang->line('desenvolvido'); ?> Monkee" /></a>
		<span class="copyright">© Copyright 3GEN Gestão Estratégica</span>
	</div>
</footer>



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<script>window.jQuery || document.write('<script src="<?php echo base_url();?>js/libs/jquery-1.7.2.min.js"><\/script>')</script>


<script src="<?php echo base_url();?>js/libs/jquery.validate.js"></script>
<script src="<?php echo base_url();?>js/libs/jquery.ui.youtube.rss.js"></script>
<script type="text/javascript">
var photos = [
<?php 

if(isset($banners)) { 
		foreach ($banners as $banner) {?>
	{
		"image" : "<?php echo base_url() . 'uploads/' . $banner['imagem']; ?>",
		"url" : "<?php echo $banner['url']; ?>",
                "secondline" : "<?php echo $banner['texto']; ?>"                
	}, 
		<?php }
}
?>
];
</script>
<script src="<?php echo base_url();?>js/bg-slider.js?a"></script>
<script src="<?php echo base_url();?>js/script.js"></script>

</body>
</html>
