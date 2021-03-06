<?php
require 'environment.php';
date_default_timezone_set('America/Sao_Paulo');
global $config;
global $db;

$config = array();
if(ENVIRONMENT == 'development') {

	define("BASE_URL", "http://localhost/agenciaOrbita/dashborad/");
	$config['dbname'] = 'dashboard_orbita';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';

}elseif(ENVIRONMENT == 'preview'){

	define("BASE_URL", "//agenciaorbita.com.br/projeto/");
	$config['dbname'] = 'orbita_dashboard';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'orbita_dashboard';
	$config['dbpass'] = 'c9ipNjkS'; 

} elseif(ENVIRONMENT == 'production') {

	define("BASE_URL", "//agenciaorbita.com.br/");
	$config['dbname'] = 'orbita_dashboard';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'orbita_dashboard';
	$config['dbpass'] = 'c9ipNjkS'; 
}
/**
 * Conexão com o banco de Dados Mysql
 */
$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass'],array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Define o Desenvolvedor do Projeto
define("AUTOR", "Agência Órbita, Ale Evoluções");

//Define o idoma Padrão caso tenha Multilinguagem
$config['defaut_lang'] = 'pt-br';

//Define a url Padrão de Imagems:
define("BASE_IMAGES", BASE_URL.'assets/images/');
//Define a url Padraão de Arquivos:
define("BASE_FILES", BASE_URL.'assets/arquivos/');
//Define a url Padrão de CSS
define("BASE_CSS", BASE_URL.'assets/css/');
//Define a url Padrão de Script
define("BASE_SCRIPT", BASE_URL.'assets/js/');

/**
 * Definição de Redes Sociais
 */
define('FACEBOOK', '#');
define('YOUTUBE', '#');
define('INSTAGRAM', '#');
define('LINKEDIN', '#');

/** 
 * Informações de Endereço
*/
define('ADDRESS1','');
define('ADDRESS2','');

/**
 * Informações de Telefone
 */
define('TELEFONE','');
define('CELULAR','');

/**
 * Informações de email
 */
define('EMAIL_CONTACT','');

/**
 * Páginas do projeto
 * Exemplo define('HOME',BASE_URL);
 * Defina abaixo as páginas do projeto em desenvolvimento e use-as dentro do projeto.
 */
define('HOME',BASE_URL);

