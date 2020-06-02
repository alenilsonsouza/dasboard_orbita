<?php
$s = new Site();
$site = $s->getArray();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title><?=$site['titulo'];?></title>
<meta property="og:url" content="https:<?=BASE_URL;?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<?=$viewData['template']['site']['titulo'];?>">
<meta property="og:description" content="<?=$viewData['template']['site']['descricao'];?>">
<meta property="og:image" content="https:<?=BASE_URL;?>assets/images/post.png">

<meta name="description" content="<?=$viewData['template']['site']['descricao'];?>">
<meta name="keywords" content="<?=$viewData['template']['site']['palavra_chave'];?>">		
<link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="icon" href="<?=BASE_URL;?>assets/images/favicon.ico" sizes="16x16 32x32 64x64" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="<?=AUTOR;?>">
<link rel="stylesheet" href="<?=BASE_CSS;?>vanillaSlideshow.css">
<style type="text/css">
<?php require 'assets/css/geral.css';?>
</style>
</head>
<body>

	<?php $this->loadViewInTemplate($viewName, $viewData); ?>

<script type="text/javascript">var BASE_URL = '<?=BASE_URL;?>';</script>	
<script src="<?=BASE_SCRIPT;?>jquery-3.4.1.min.js"></script>
<script src="<?=BASE_SCRIPT;?>script.js"></script>
<script language="JavaScript" type="text/javascript" src="<?=BASE_SCRIPT;?>MascaraValidacao.js"></script>
<?=$site['scripts'];?>
</body>
</html>