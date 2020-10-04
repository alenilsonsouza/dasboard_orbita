<?php
class configuracoesController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();

        $u = new Usuarios();
        if(!$u->isLogged()){
            header("Location: ".BASE_URL."dashboardLogin");
        }
        
    }

    public function index() {
        $dados = array();

        $dados['page'] = "configuracoes";
        
		
        $this->loadTemplateInDashboard('configuracoes', $dados);
    }

    

}