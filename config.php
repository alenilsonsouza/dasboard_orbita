<?php
require 'environment.php';
date_default_timezone_set('America/Sao_Paulo');
global $config;
global $db;

$config = array();
if(ENVIRONMENT == 'development') {

	define("BASE_URL", "http://localhost/C01_clientesOrbita/instituoforence.com.br/");
	$config['dbname'] = 'institutoforense';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'vertrigo';

}elseif(ENVIRONMENT == 'preview'){

	define("BASE_URL", "//www.agenciaorbita.com.br/institutoforense/");
	$config['dbname'] = 'orbita_instituto';
	$config['host'] = 'host';
	$config['dbuser'] = 'orbita_institutoadmin';
	$config['dbpass'] = '^m%jSsXBkWZc';

} elseif(ENVIRONMENT == 'production') {

	define("BASE_URL", "//www.seusite.com.br/");
	$config['dbname'] = 'bd_name';
	$config['host'] = 'host';
	$config['dbuser'] = 'user_bd';
	$config['dbpass'] = '#pass_bd';
}

//Define o Desenvolvedor do Projeto
define("AUTOR", "Agência Órbita, Ale Evoluções");

//Define o idoma Padrão caso tenha Multilinguagem
$config['defaut_lang'] = 'pt-br';

//Define a url Padrão de Imagems:
define("BASE_URL_IMAGE", BASE_URL.'assets/images/');
//Define a url Padraão de Arquivos:
define("BASE_URL_FILES", BASE_URL.'assets/arquivos/');
//Define a url Padrão de CSS
define("BASE_URL_CSS", BASE_URL.'assets/css/');
//Define a url Padrão de Script
define("BASE_URL_SCRIPT", BASE_URL.'assets/js/');


$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass'],array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);