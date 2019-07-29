<?php
class painelController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();

        $u = new Usuarios();
        if(!$u->isLogged()){
            header("Location: ".BASE_URL."login");
        }
        
    }

    public function index() {
        $dados = array();

        $site = new Site();
        $dados['site'] = $site->getArray();

        $redes = new RedeSociais();
        $dados['redes'] = $redes->getTotal(); 

        $banner = new Banners();
        $dados['banners'] = $banner->totalBanners();

        $blog = new Blog();
        $dados['blogs'] = $blog->getTotal();

        $contato = new Contato();
        $dados['contatos'] = $contato->getTotal();

        $usuario = new Usuarios();
        $dados['usuarios'] = $usuario->getTotalUsers();

        
        $dados['page'] = "painel";
        
		
        $this->loadTemplateInPainel('painel', $dados);
    }

    

}