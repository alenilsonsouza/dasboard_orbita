<section id="banner">
	<?php if($config['mostrar_banner'] == 1):?>
	<div id="vanilla-slideshow-container">

		<div id="vanilla-slideshow">
			<?php foreach($banners as $banner):?>
	        <div class="vanilla-slide" style="background-image: url('<?php echo BASE_URL_FILES;?><?php echo $banner['url_arquivo'];?>')"> 
				<a href="<?php echo BASE_URL;?>blog/artigo/<?php echo $banner['url'];?>" class="blog-link-box">
				    
				</a>
			</div>
			<?php endforeach;?>
	 
		</div>

		
		<div id="vanilla-indicators"></div>

		
		<div id="vanilla-slideshow-previous">
			<img src="<?php echo BASE_URL_IMAGE;?>arrow-previous.png" alt="slider arrow">
		</div>
		<div id="vanilla-slideshow-next">
			<img src="<?php echo BASE_URL_IMAGE;?>arrow-next.png" alt="slider arrow">
		</div>

	</div>
	<?php elseif($config['mostrar_banner'] == 2):?>
		<?php foreach($video as $video):?>
		<video autoplay="autoplay" muted="muted" class="banner-video">
			<source src="<?php echo BASE_URL_FILES;?><?php echo $video['url_arquivo'];?>" type="video/mp4">
		</video>
	<?php endforeach;?>
	<?php endif;?>
</section>


<script src="<?php echo BASE_URL_SCRIPT;?>vanillaSlideshow.min.js"></script>
<script>
vanillaSlideshow.init({
	slideshow: true,
	delay: 8000,
	arrows: true,
	indicators: true,
	random: false,
	animationSpeed: '1s'
});
</script>

