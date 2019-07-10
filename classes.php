<?php
class Funcionario{

	private $nome;
	private $salario;
	private $horaTrabalhada;
	private $valorHora;


	public function setNome($nome){
		$this->nome = $nome;
	}

	public function setSalario($valor){
		$this->salario = $valor;
	}

	public function setHoraTrabalhada($valor){
		$this->horaTrabalhada = $valor;
	}

	public function setValorHora($valor){
		$this->valorHora = $valor;
	}

	public function getSalario(){

		$retorno = $this->salario + ($this->horaTrabalhada * $this->valorHora);
		return $retorno;
	}
}