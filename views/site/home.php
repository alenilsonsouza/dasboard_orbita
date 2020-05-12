
<!-- Temporário
<section id="banner">
	<?php if($config['mostrar_banner'] == 1):?>
	<div id="vanilla-slideshow-container">

		<div id="vanilla-slideshow">
			<?php foreach($banners as $banner):?>
	        <div class="vanilla-slide" style="background-image: url(<?php echo BASE_URL_FILES;?><?php echo $banner['url_arquivo'];?>)"> 
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
-->
<section id="bannerHome" style="background-image: url(<?php echo BASE_URL;?>assets/images/banner_home.png);">
	<div class="conteudoTexto">
		<div class="barra">
			<svg class="barraBanner" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" width="1920" height="188" viewBox="0 0 1920 188">
  <image xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAB4AAAAC8CAMAAACuY0OsAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAADAFBMVEUAAABan5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5han5gAAAAQl+euAAAA/nRSTlMAIs15JM98K9uLPALpm0wI86tc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PAQYAAABBBgAAAEEGAAAAQQYAAABBBgAAAEEGAAAAQQYAAABBBgAAAEEGAAAAQQYAAABBBgAAAEEGAAAAQQYAAABBBgAAAEEGAAAAQQYAAABBBgAAAEEGAAAAQQYAAABBBgAAAEEGAAAAQQYAAABBBgAAAEEGAAAAQQYAAABBBgAAAEEGAAAAQQYAAABBBgAAAEEGAAAAQQYAAABBBgAAAEEGAAAAQQYAAABBBgAAAEEGAAAAQQYAAABBBgAAAEEGAAAAQQYAAABBBgAAAEEGAAAAQQYAAABBBgAAAEEGAAAAQQYAAABBBgAAAEEGAAAAQQYAAABBBgAAAEEGAAAAQQYAAABBBgAAAEEGAAAAQQYAAABBBgAAAEEGAAAAQQYAAABBBgAAAEEGAAAAQQYAAABBBgAAAEEGAAAAQQYAAABBBgAAAEEGAAAAQQYAAABBBgAAAEEGAAAAQQYAAABBBgAAAEEGAAAAQQYAAABBBgAAAEEGAAAAQQYAAABBBgAAAEEGAAAAQQYAAABBBgAAAEEGAAAAQQYAAABBBgAAAEEGAAAAQQYAAAB/wZeTzOwSay3igAAAABJRU5ErkJggg==" width="1920" height="188"/>
</svg>

		</div>
		<div class="texto">
<p>A utilização de conhecimentos científicos e tecnologias das ciências básicas para a resolução de crimes 
e o auxílio ao sistema de justiça em geral constitui o que chamamos de Ciências Forenses.</p> 
 
<p>Nós, do Instituto Forense, somos comprometidos com a difusão das Ciências Forenses e Criminológicas. Fomentar o interesse da comunidade acadêmica e profissional através de ações de ensino nessa área tão importante ao sistema de justiça, buscando a aproximação entre estudantes, professores e profissionais, constitui um dos objetivos centrais do Instituto.</p>

<p>Tecnologia, inteligência e desenvolvimento humano como ferramentas para desmistificar essas ciências tão próximas do nosso dia a dia e que vêm despertando tanta curiosidade em jovens e adultos nos últimos anos.</p>
		</div>
	</div>	
</section>
<section class="areaCertificado">
	<div class="conteudo conteudoAreaCertificado">
		<div class="forenseIntituto">
			<figure class="logo">
				<img src="<?php echo BASE_URL;?>assets/images/logo_grande.png">
			</figure>
			<nav class="menuMeio">
				<ul>
					<li>
						<a href="<?php echo BASE_URL;?>sobre">Sobre</a>
					</li>
					<li>
						<a href="<?php echo BASE_URL;?>cursos">Cursos e Eventos Educacionais</a>
					</li>
					<li>
						<a href="<?php echo BASE_URL;?>">Área Forense</a>
					</li>
				</ul>
			</nav>

		</div>
		<div class="emissaoCertificado">
			<div class="AreaTitulo">
				<span class="titulo1">Emissão de</span>
				<span class="titulo2">Certificados</span>
			</div>
			<form method="post" class="formCerificado">
				<input type="text" name="certificado" placeholder="Código Validação"> <input type="submit" value="Download">
			</form>
			<div class="areaNews">
				<span class="titulo">Inscreva-se na nossa newsletter</span>
				<form class="news">
					<input type="email" name="email_news" placeholder="Insira o seu E-mail"> <button>></button>
				</fomr>
			</div>
		</div>
	</div>
</section>
<svg id="barraBlog" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" width="1908" height="213" viewBox="0 0 1908 213">
  <image xlink:href="data:img/png;base64,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" width="1908" height="213"/>
</svg>

<section class="areaBlogIntro">
	<div class="conteudo">
		<header class="areaTituloBlog">
			<div class="titulo">blog</div>
			<div class="subtitulo">Curiosidades, informação, o mercado e as novidades do mundo forense, você encontra na nossa página</div>
		</header>
		<section class="conteudoIntro">
			<div class="item">
				<figure>
					<a href="<?php echo BASE_URL;?>blog/artigo">
						<img src="<?php echo BASE_URL;?>assets/images/blog1.png">
					</a>
				</figure>
				<h3 class="titulo">Duis sed odio sit amet</h3>
				<p>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
			</div>
			<div class="item">
				<figure>
					<a href="<?php echo BASE_URL;?>blog/artigo">
						<img src="<?php echo BASE_URL;?>assets/images/blog2.png">
					</a>
				</figure>
				<h3 class="titulo">Duis sed odio sit amet</h3>
				<p>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
			</div>
		</section>

    </div>
</section>


