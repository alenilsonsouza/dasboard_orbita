<?php
$u = new Usuarios($_SESSION['plogin']);
$nome = $u->getNome();
$s = new Site();
$site = $s->getArray();
$c = new Configuracoes();
$configuracoes = $c->getArray();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Painel</title>
    <meta name="description" content="<?php echo $site['descricao'];?>">
    <meta name="keywords" content="<?php echo $site['palavra_chave'];?>">
<style type="text/css" media="screen,projection">
<?php require 'assets/css/materialize.min.css';?>
</style>
		
		 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="icon" href="<?php echo BASE_URL;?>assets/images/favicon.ico" sizes="16x16 32x32 64x64" type="image/x-icon">
		
		<!--Material Design-->
		<script type="text/javascript" src="assets/js/jquery-1.6.3.min.js"></script>
		<script type="text/javascript" src="assets/js/materialize.min.js"></script>

<body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/materialize.min.js"></script>



<div class="container-fluid"> 
  <div class="menuLateral">
    <a href="<?php echo BASE_URL;?>painel" class="brand-logo">
        <div class="imagem">
         <?php if(!empty($configuracoes['id_imagem'])):?> 
            <img src="<?php echo BASE_URL;?>assets/arquivos/<?php echo $configuracoes['url_arquivo'];?>" alt="<?php echo $configuracoes['nome_arquivo'];?>" >
            <?php else:?>
                SEM LOGO
            <?php endif;?>
        </div>
      </a>
    
      <div class="col s12">
        <div class="perfil">
          <p>Olá <?php echo $nome;?></p>
          <a href="<?php echo BASE_URL;?>menuperfil" class="linkPerfil"><i class="material-icons left">web</i>Meu Perfil</a>
          <a href="<?php echo BASE_URL;?>painelconfiguracoes" class="linkPerfil"><i class="material-icons left">settings</i>Configurações</a>
        </div>    
      </div>
    
    <nav class="menuVertical">
      <ul>
        <li><a href="<?php echo BASE_URL;?>" target="projeto"><i class="material-icons left">web</i>Ver Site</a></li>
        <li><a href="<?php echo BASE_URL;?>painel"><i class="material-icons left">dashboard</i>Painel</a></li>
        <li><a href="<?php echo BASE_URL;?>painelsite"><i class="material-icons left">web</i>Site</a></li>
        <li><a href="<?php echo BASE_URL;?>painelredessociais"><i class="material-icons left">public</i>Redes Sociais</a></li>
        <li><a href="<?php echo BASE_URL;?>painelbanners"><i class="material-icons left">collections</i>Banners</a></li>
        <li><a href="<?php echo BASE_URL;?>painelblog"><i class="material-icons left">collections</i>Blog</a></li>
        
       <li><a href="<?php echo BASE_URL;?>painelusuarios"><i class="material-icons left">supervised_user_circle</i>Usuarios</a></li>
       <li><a href="<?php echo BASE_URL;?>painelsuporte"><i class="material-icons left">help</i>Suporte</a></li>
        <li><a href="<?php echo BASE_URL;?>login/sair"><i class="material-icons left">exit_to_app</i>Sair</a></li>
      </ul>
    </nav>
  </div>
  <div class="conteudoPrincipal">
  	<?php $this->loadViewInPainel($viewName, $viewData); ?> 
  </div>


</div> 
<div class="both"></div>


  
 <script type="text/javascript">
  $(".button-collapse").sideNav();
  $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
    $(document).ready(function() {
    $('select').material_select();
  });
  });
</script>  
<script type="text/javascript">var BASE_URL = '<?php echo BASE_URL;?>';</script>
<script src="<?php echo BASE_URL;?>assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/script_painel.js"></script>
<?php echo $site['scripts'];?>
</body>
</html>