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

        
		
		
        $this->loadTemplate('home', $dados);
    }

}