<?php
class ajaxController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array();
		
    }
   

    public function calendario()
    {
        $recebe_data = filter_input(INPUT_GET, 'mesano');
        $mes = filter_input(INPUT_GET,'mes');
        $ano = filter_input(INPUT_GET,'ano');

        $data = date('Y-m'); //Mês atual
        if($recebe_data) {
            $data = $recebe_data;
        }
        
        $mes_atual = date("m");
        $ano_atual = Date('Y');
        if ($mes && $ano) {
            $data = $ano.'-'.$mes;
            $mes_atual = $mes;
            $ano_atual = $ano;
        }
        
        $dia1 = date('w', strtotime($data));
        $dias = date('t', strtotime($data));
        $linhas = ceil(($dia1 + $dias) / 7);
        $dia1 = -$dia1;
        $data_inicio = date('Y-m-d', strtotime($dia1 . ' days', strtotime($data)));
        $data_fim = date('Y-m-d', strtotime((($dia1 + ($linhas * 7) - 1)) . ' days', strtotime($data)));

        $this->loadViewInDashboard('calendario', [
            'data_inicio' => $data_inicio,
            'data_fim' => $data_fim,
            'linhas' => $linhas,
            'data' => $data,
            'ano_atual' => $ano_atual,
            'mes_atual' => $mes_atual,
        ]);
    }

    public function datahora() {

        $this->loadViewInDashboard('datahora', [
            
        ]);
    }

}