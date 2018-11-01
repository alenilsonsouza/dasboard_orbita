<?php
$s = new Site();
$site = $s->getArray();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title><?php echo $site['titulo'];?></title>
<meta name="description" content="<?php echo $site['descricao'];?>">
<meta name="keywords" content="<?php echo $site['palavra_chave'];?>">		
<link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="icon" href="<?php echo BASE_URL;?>assets/images/favicon.ico" sizes="16x16 32x32 64x64" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="<?php echo AUTOR;?>">
<style type="text/css">

	

</style>
</head>
<body>

    

	<?php $this->loadViewInTemplate($viewName, $viewData); ?>

<link href="<?=BASE_URL;?>assets/css/geral.css" rel="stylesheet" type="text/css">	
<script src="<?=BASE_URL;?>assets/js/jquery-1.6.3.min.js"></script>
<script src="<?=BASE_URL;?>assets/js/script.js"></script>
<script src="<?php echo BASE_URL;?>assets/js/jquery-1.6.3.min.js"></script>
<script src="<?php echo BASE_URL;?>assets/js/menuscrol.js"></script>
<link rel="stylesheet" href="<?=BASE_URL;?>assets/css/vanillaSlideshow.css">
<script language="JavaScript" type="text/javascript" src="<?=BASE_URL;?>assets/js/MascaraValidacao.js"></script>

<?php echo $site['scripts'];?>
</body>
</html>