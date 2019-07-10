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
<meta property="og:title" content="<?php echo $site['titulo'];?>">
<meta property="og:description" content="<?php echo $site['descricao'];?>">
<meta property="og:image" content="https:<?php echo BASE_URL;?>assets/images/post.png">

<meta name="description" content="<?php echo $site['descricao'];?>">
<meta name="keywords" content="<?php echo $site['palavra_chave'];?>">		
<link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="icon" href="<?php echo BASE_URL;?>assets/images/favicon.ico" sizes="16x16 32x32 64x64" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="<?php echo AUTOR;?>">
<style type="text/css">

	<?php require 'assets/css/geral.css';?>

</style>
</head>
<body>
  

	<?php $this->loadViewInTemplate($viewName, $viewData); ?>

<script type="text/javascript">var BASE_URL = '<?php echo BASE_URL;?>';</script>	
<script src="<?php echo BASE_URL;?>assets/js/jquery-3.4.1.min.js"></script>
<script src="<?php echo BASE_URL;?>assets/js/script.js"></script>
<link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/vanillaSlideshow.css">
<script language="JavaScript" type="text/javascript" src="<?=BASE_URL;?>assets/js/MascaraValidacao.js"></script>
<?php echo $site['scripts'];?>
</body>
</html>