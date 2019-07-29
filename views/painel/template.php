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
		<title>Painel - <?php echo $site['titulo'];?></title>
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
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/materialize.min.js"></script>

<body>
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
      <?php $p = $viewData['page'];?>
      <div class="col s12">
        <div class="perfil">
          <p>Olá <?php echo $nome;?></p>
          <a href="<?php echo BASE_URL;?>menuperfil" class="linkPerfil <?php echo ($p == 'menuperfil')?'ativo':'';?>"><i class="material-icons left">web</i>Meu Perfil</a>
          <a href="<?php echo BASE_URL;?>painelconfiguracoes" class="linkPerfil <?php echo ($p == 'configuracoes')?'ativo':'';?>"><i class="material-icons left">settings</i>Configurações</a>
        </div>    
      </div>
          <nav class="menuVertical">
      <ul>
        <li><a href="<?php echo BASE_URL;?>painel" class="<?php echo ($p == 'painel')?'ativo':'';?>"><i class="material-icons left">dashboard</i>Painel</a></li>
        <li><a href="<?php echo BASE_URL;?>" target="projeto"><i class="material-icons left">web_asset</i>Ver Site</a></li>
        <li><a href="<?php echo BASE_URL;?>painelsite" class="<?php echo ($p == 'site')?'ativo':'';?>"><i class="material-icons left">web</i>Site</a></li>
        <li><a href="<?php echo BASE_URL;?>painelredessociais" class="<?php echo ($p == 'redes')?'ativo':'';?>"><i class="material-icons left">public</i>Redes Sociais</a></li>
        <li><a href="<?php echo BASE_URL;?>painelbanners" class="<?php echo ($p == 'banners')?'ativo':'';?>"><i class="material-icons left">collections</i>Banners</a></li>
        <li><a href="<?php echo BASE_URL;?>painelblog" class="<?php echo ($p == 'blog')?'ativo':'';?>"><i class="material-icons left">message</i>Blog</a></li>
        <li><a href="<?php echo BASE_URL;?>painelcontato" class="<?php echo ($p == 'contato')?'ativo':'';?>"><i class="material-icons left">email</i>Contato</a></li>
        
       <li><a href="<?php echo BASE_URL;?>painelusuarios" class="<?php echo ($p == 'usuarios')?'ativo':'';?>"><i class="material-icons left">supervised_user_circle</i>Usuarios</a></li>
       <li><a href="<?php echo BASE_URL;?>painelsuporte" class="<?php echo ($p == 'suporte')?'ativo':'';?>"><i class="material-icons left">help</i>Suporte</a></li>
        <li><a href="<?php echo BASE_URL;?>login/sair"><i class="material-icons left">exit_to_app</i>Sair</a></li>
      </ul>
    </nav>
  </div>
  <div class="conteudoPrincipal">
  	<?php $this->loadViewInPainel($viewName, $viewData); ?> 
  </div>


</div> 
<div class="both"></div>


  

<script type="text/javascript">var BASE_URL = '<?php echo BASE_URL;?>';</script>
<script src="<?php echo BASE_URL;?>assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/script_painel.js"></script>

</body>
</html>