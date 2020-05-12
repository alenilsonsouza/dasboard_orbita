<?php
class homeController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array();

        $config = new Config();
        $dados['config'] = $config->getArray();

        $b = new Banners();
        $dados['banners'] = $b->getArray();

        $v = new Video();
        $dados['video'] = $v->getArray(); 


        //Informações para o template
        $template = new Template();
        $dados['template'] = $template->getInfo();

        $dados['page'] = 'home';
		
		
        $this->loadTemplate('home', $dados);
    }

}