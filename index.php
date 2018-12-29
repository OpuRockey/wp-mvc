<?php
/**
 * @package WP API
 */
/*
Plugin Name: Wordpress API Builder
Plugin URI: https://echche.com/
Description: A cool plugin that can be used for building any type of simple OR complex API.
Version: 1.0.0
Author: Rakib
Author URI: https://echche.com/about-me/
License: GPLv2 or later
Text Domain: wp-api
*/

class Init {

	private $config ;

	public function __construct(){
		$this->config = require_once "config.php";
		$this->defineVar();
		$this->autoLoadClass();
		$this->registerControllers();
		$this->actionCaller();
	}

	private function actionCaller(){
		add_action('wp_enqueue_scripts',[$this,'loadScripts'],9999);
	}

	private function defineVar(){
		$constantVar = $this->config['constantVar'] ;
		foreach ($constantVar as $key => $value) {
			define($key, $value) ;
		}
	}

	private function autoLoadClass(){
		spl_autoload_register(function ($class) {
		    $file = WPAPI_BASEPATH . __NAMESPACE__.'/' . $class . '.php';
		    if(file_exists($file)){
		    	require_once $file ;
		    }
		});
	}

	private function registerControllers(){
		$controllers = $this->config['controllers'] ;
		foreach ($controllers as $controller) {
			new $controller ;
		}
	}

	public function loadScripts(){
		$scripts = $this->config['scripts'] ;
		foreach ($scripts as $script) {
			wp_enqueue_script($script[0] , WPAPI_BASEURL . $script[1] , $script[2] , $script[3] , $script[4]);
		}
		$styles = $this->config['styles'] ;
		foreach ($styles as $style) {
			wp_enqueue_style($style[0] , WPAPI_BASEURL . $style[1]);
		}
	}
}

$wp_api_root = new Init ;
