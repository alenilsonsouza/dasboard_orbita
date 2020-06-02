<section id="banner">
	<?php if($config['mostrar_banner'] == 1):?>
	<div id="vanilla-slideshow-container">

		<div id="vanilla-slideshow">
			<?php foreach($banners as $banner):?>
	        <div class="vanilla-slide" style="background-image: url('<?=BASE_FILES.$banner['url_arquivo'];?>')"> 
				<a href="<?=BASE_URL;?>blog/artigo/<?=$banner['url'];?>" class="blog-link-box">
				    
				</a>
			</div>
			<?php endforeach;?>
	 
		</div>

		
		<div id="vanilla-indicators"></div>

		
		<div id="vanilla-slideshow-previous">
			<img src="<?=BASE_IMAGES;?>arrow-previous.png" alt="slider arrow">
		</div>
		<div id="vanilla-slideshow-next">
			<img src="<?=BASE_IMAGES;?>arrow-next.png" alt="slider arrow">
		</div>

	</div>
	<?php elseif($config['mostrar_banner'] == 2):?>
		<?php foreach($video as $video):?>
		<video autoplay="autoplay" muted="muted" class="banner-video">
			<source src="<?=BASE_FILES;?><?php echo $video['url_arquivo'];?>" type="video/mp4">
		</video>
	<?php endforeach;?>
	<?php endif;?>
</section>
<script src="<?=BASE_SCRIPT;?>vanillaSlideshow.min.js"></script>
<script>
	/**
	Configuração do banner
	 */
vanillaSlideshow.init({
	slideshow: true,
	delay: 8000,
	arrows: true,
	indicators: true,
	random: false,
	animationSpeed: '1s'
});
</script>

