<?php
class cursosController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array();

         


        //Informações para o template
        $template = new Template();
        $dados['template'] = $template->getInfo();

        $dados['page'] = 'cursos';
		
		
        $this->loadTemplate('cursos', $dados);
    }

    public function item() {
        $dados = array();

         


        //Informações para o template
        $template = new Template();
        $dados['template'] = $template->getInfo();

        $dados['page'] = 'cursos';
        
        
        $this->loadTemplate('itemcurso', $dados);
    }

    

}