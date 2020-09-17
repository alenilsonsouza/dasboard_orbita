<?php
class controller {

	protected $db;
	protected $lang;

	public function __construct() {
		global $config;
		$this->lang = new Language;
	}
	
	public function loadView($viewName, $viewData = array()) {
		extract($viewData);
		include 'views/'.$viewName.'.php';
	}

	public function loadTemplate($viewName, $viewData = array()) {
		include 'views/site/template.php';
	}

	public function loadTemplateInPainel($viewName, $viewData = array()) {
		include 'views/painel/template.php';
	}

	public function loadTemplateInDashboard($viewName, $viewData = array()) {
		include 'views/dashboard/template.php';
	}

	public function loadViewInTemplate($viewName, $viewData) {
		extract($viewData);
		include 'views/site/'.$viewName.'.php';
	}

	public function loadViewInPainel($viewName, $viewData) {
		extract($viewData);
		include 'views/painel/'.$viewName.'.php';
	}

	public function loadViewInDashboard($viewName, $viewData) {
		extract($viewData);
		include 'views/dashboard/'.$viewName.'.php';
	}

}