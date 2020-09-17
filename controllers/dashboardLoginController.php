<?php
class dashboardLoginController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();

        
    }

    public function index() {
        $dados = array();
        
        $dados['page'] = "login";
        
        $this->loadViewInDashboard('login', $dados);
    }

    

}