<?php
class dashboardLoginController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();

        
    }

    public function index() {
       
        $flash = ''; 
        if(!empty($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            $_SESSION['flash'] = '';
        }
        
        $this->loadViewInDashboard('login', [
            'page' => 'login',
            'flash' => $flash
        ]);
    }

    public function verificarLogin() {

        $email = filter_input(INPUT_POST,'email');
        $senha = filter_input(INPUT_POST,'senha');
        if ($email && $senha) {
            $senha = md5($senha);
            $u = new Usuarios();
            if ($u->fazerLogin($email, $senha)) {
                header("Location: " . BASE_URL . "dashboard");
                exit;
            } else {
                $_SESSION['flash'] = "Usuário ou senha não conferem.";
            }
        }
        header("Location: " . BASE_URL . "dashboardLogin");
        exit;
    }

    public function sair()
    {

        $u = new Usuarios();
        $u->isLogged();
        $u->logout();

        $_SESSION['flash'] = "Você saiu do Sistema!";

        header("Location: " . BASE_URL . "dashboardLogin");
        exit;
    }
}