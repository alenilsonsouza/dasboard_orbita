<?php
$s = new Site();
$site = $s->getArray();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title><?php echo $site['titulo'];?></title>
<meta property="og:url" content="https:<?php echo BASE_URL;?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo $viewData['template']['site']['titulo'];?>">
<meta property="og:description" content="<?php echo $viewData['template']['site']['descricao'];?>">
<meta property="og:image" content="https:<?php echo BASE_URL;?>assets/images/post.png">

<meta name="description" content="<?php echo $viewData['template']['site']['descricao'];?>">
<meta name="keywords" content="<?php echo $viewData['template']['site']['palavra_chave'];?>">		
<link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="icon" href="<?php echo BASE_URL;?>assets/images/favicon.ico" sizes="16x16 32x32 64x64" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="<?php echo AUTOR;?>">
<style type="text/css">
/*Fontes*/
/*Montserrat*/
@font-face {
    font-family: 'montserratblack';
    src: url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-black-webfont.woff2') format('woff2'),
         url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-black-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}
@font-face {
    font-family: 'montserratblack_italic';
    src: url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-blackitalic-webfont.woff2') format('woff2'),
         url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-blackitalic-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}
@font-face {
    font-family: 'montserratbold';
    src: url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-bold-webfont.woff2') format('woff2'),
         url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-bold-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}
@font-face {
    font-family: 'montserratbold_italic';
    src: url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-bolditalic-webfont.woff2') format('woff2'),
         url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-bolditalic-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}
@font-face {
    font-family: 'montserratextrabold';
    src: url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-extrabold-webfont.woff2') format('woff2'),
         url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-extrabold-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}
@font-face {
    font-family: 'montserratextrabold_italic';
    src: url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-extrabolditalic-webfont.woff2') format('woff2'),
         url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-extrabolditalic-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}
@font-face {
    font-family: 'montserratextralight';
    src: url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-extralight-webfont.woff2') format('woff2'),
         url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-extralight-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}
@font-face {
    font-family: 'montserratextralight_italic';
    src: url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-extralightitalic-webfont.woff2') format('woff2'),
         url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-extralightitalic-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}
@font-face {
    font-family: 'montserratitalic';
    src: url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-italic-webfont.woff2') format('woff2'),
         url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-italic-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}
@font-face {
    font-family: 'montserratlight';
    src: url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-light-webfont.woff2') format('woff2'),
         url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-light-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}
@font-face {
    font-family: 'montserratlight_italic';
    src: url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-lightitalic-webfont.woff2') format('woff2'),
         url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-lightitalic-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}
@font-face {
    font-family: 'montserratmedium';
    src: url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-medium-webfont.woff2') format('woff2'),
         url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-medium-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}
@font-face {
    font-family: 'montserratmedium_italic';
    src: url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-mediumitalic-webfont.woff2') format('woff2'),
         url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-mediumitalic-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}
@font-face {
    font-family: 'montserratregular';
    src: url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-regular-webfont.woff2') format('woff2'),
         url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-regular-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}
@font-face {
    font-family: 'montserratsemibold';
    src: url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-semibold-webfont.woff2') format('woff2'),
         url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-semibold-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}
@font-face {
    font-family: 'montserratsemibold_italic';
    src: url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-semibolditalic-webfont.woff2') format('woff2'),
         url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-semibolditalic-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}
@font-face {
    font-family: 'montserratthin';
    src: url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-thin-webfont.woff2') format('woff2'),
         url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-thin-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}
@font-face {
    font-family: 'montserratthin_italic';
    src: url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-thinitalic-webfont.woff2') format('woff2'),
         url('<?php echo BASE_URL;?>assets/fonts/montserrat/montserrat-thinitalic-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal; 

}
/*Acta*/
@font-face {
    font-family: 'actadisplayw01-bolditalicRg';
    src: url('<?php echo BASE_URL;?>assets/fonts/acta/acta_display_w01_bold_italic-webfont.woff2') format('woff2'),
         url('<?php echo BASE_URL;?>assets/fonts/acta/acta_display_w01_bold_italic-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}
@font-face {
    font-family: 'actadisplayw01-lightitalicRg';
    src: url('<?php echo BASE_URL;?>assets/fonts/acta/acta_display_w01_light_italic-webfont.woff2') format('woff2'),
         url('<?php echo BASE_URL;?>assets/fonts/acta/acta_display_w01_light_italic-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}
/*Didot*/
@font-face {
  font-family: 'Didot';
  src: 	url('<?php echo BASE_URL;?>assets/fonts/didot/Didot.eot?#iefix') format('embedded-opentype'),  
  		url('<?php echo BASE_URL;?>assets/fonts/didot/Didot.woff') format('woff'), 
  		url('<?php echo BASE_URL;?>assets/fonts/didot/Didot.ttf')  format('truetype'), 
  		url('<?php echo BASE_URL;?>assets/fonts/didot/Didot.svg#Didot') format('svg');
  font-weight: normal;
  font-style: normal;
}
@font-face {
  font-family: 'Didot-HTF-B06-Bold';
  src: 	url('<?php echo BASE_URL;?>assets/fonts/didot/Didot-HTF-B06-Bold.eot?#iefix') format('embedded-opentype'),  
  		url('<?php echo BASE_URL;?>assets/fonts/didot/Didot-HTF-B06-Bold.woff') format('woff'), 
  		url('<?php echo BASE_URL;?>assets/fonts/didot/Didot-HTF-B06-Bold.ttf')  format('truetype'), 
  		url('<?php echo BASE_URL;?>assets/fonts/didot/Didot-HTF-B06-Bold.svg#Didot-HTF-B06-Bold') format('svg');
  font-weight: normal;
  font-style: normal;
}
	<?php require 'assets/css/geral.css';?>

</style>
</head>
<body>
<header id="topo">
	<div class="conteudo conteudoTopo">
		<figure id="logo">
			<a href="<?php echo BASE_URL;?>">
				<img src="<?php echo BASE_URL;?>assets/images/logo_instituto_forense.png">
			</a>
		</figure>
		<nav id="menuTopo">
			<ul>
				<li>
					<a href="<?php echo BASE_URL;?>" class="<?php echo $viewData['page'] == 'home'?'ativo':'';?>">Home</a>
				</li>
				<li>
					<a href="<?php echo BASE_URL;?>certificados" class="<?php echo $viewData['page'] == 'certificados'?'ativo':'';?>">Certificados</a>
				</li>
        <li>
          <a href="<?php echo BASE_URL;?>cursos" class="<?php echo $viewData['page'] == 'cursos'?'ativo':'';?>">Cursos</a>
        </li>
				<li>
					<a href="<?php echo BASE_URL;?>blog" class="<?php echo $viewData['page'] == 'blog'?'ativo':'';?>">Blog</a>
				</li>
				<li>
					<a href="<?php echo BASE_URL;?>contato" class="<?php echo $viewData['page'] == 'contato'?'ativo':'';?>">Contato</a>
				</li>
			</ul>
		</nav>
	</div>
</header>


	<?php $this->loadViewInTemplate($viewName, $viewData); ?>
<footer id="rodape">
	<div class="conteudo conteudoRodape">
		<div class="infoContato">
			<figure>
				<img src="<?php echo BASE_URL;?>assets/images/icone_tel.png"alt="Telefone">
			</figure>
			<span>+55 (55) 5555 5555 | 55 (55) 5555 5555</span>
			<figure>
				<img src="<?php echo BASE_URL;?>assets/images/icone_email.png"alt="Email"> 
			</figure>
			<span>email@email.com.br</span>
		</div>
		<div class="infoRedes">
			<div class="texto">
				<span>acompanhe</span>
				<span class="t2">as nossas redes</span>
			</div>
			<figure>
				<a href="">
					<img src="<?php echo BASE_URL;?>assets/images/icone_face.png" alt="Facebook">
				</a>
			</figure>
			<figure>
				<a href="">
					<img src="<?php echo BASE_URL;?>assets/images/icone_linkdin.png" alt="Linkdin">
				</a>
			</figure>
			<figure>
				<a href="">
					<img src="<?php echo BASE_URL;?>assets/images/icone_instagram.png" alt="Instagram">
				</a>
			</figure>
		</div>
	</div>
</footer>

<script type="text/javascript">var BASE_URL = '<?php echo BASE_URL;?>';</script>	
<script src="<?php echo BASE_URL_SCRIPT;?>jquery-3.4.1.min.js"></script>
<script src="<?php echo BASE_URL_SCRIPT;?>script.js"></script>
<link rel="stylesheet" href="<?php echo BASE_URL_CSS;?>vanillaSlideshow.css">
<script language="JavaScript" type="text/javascript" src="<?php echo BASE_URL_SCRIPT;?>MascaraValidacao.js"></script>
<?php echo $site['scripts'];?>
</body>
</html>