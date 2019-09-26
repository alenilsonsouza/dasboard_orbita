<?php
class contatoController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array();

         


        //Informações para o template
        $template = new Template();
        $dados['template'] = $template->getInfo();

        $dados['page'] = 'contato';
		
		
        $this->loadTemplate('contato', $dados);
    }

}