<?php
class certificadosController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array();

         


        //Informações para o template
        $template = new Template();
        $dados['template'] = $template->getInfo();

        $dados['page'] = 'certificados';
		
		
        $this->loadTemplate('certificados', $dados);
    }

}