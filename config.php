<?php
require 'environment.php';
date_default_timezone_set('America/Sao_Paulo');
global $config;
global $db;

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/C02_meusClientes/mvc_padrao/");
	$config['dbname'] = 'mvc_padrao';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'vertrigo';
} else {
	define("BASE_URL", "//www.fimag.com.br/projeto/");
	$config['dbname'] = 'aleevolu_site';
	$config['host'] = '67.23.238.10';
	$config['dbuser'] = 'aleevolu_site';
	$config['dbpass'] = '#amcqFSg~ZP~';
}
define("AUTOR", "Agência Órbita, Ale Evoluções");
$config['defaut_lang'] = 'pt-br';


$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass'],array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);