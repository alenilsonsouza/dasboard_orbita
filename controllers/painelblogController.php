<?php
class painelblogController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();

        $u = new Usuarios();
        if(!$u->isLogged()){
            header("Location: ".BASE_URL."login");
            exit;
        }
        
    }

    public function index() {
        $dados = array();

        $blog = new Blog(); 

        $limit = 6;

        $total = $blog->getTotal(); 

        $dados['paginas'] = ceil($total/$limit);

        $dados['paginaAtual'] = 1;
        if(!empty($_GET['p'])){
            $dados['paginaAtual'] = intval($_GET['p']);
        }
        
        $offset = ($dados['paginaAtual'] * $limit) - $limit;
        $dados['blogs'] = $blog->getBlogs($offset, $limit);

        
        
		
        $this->loadTemplateInPainel('painelblog', $dados);
    }


}