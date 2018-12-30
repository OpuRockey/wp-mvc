<?php

namespace Core\Controllers ;

class BaseController{

	public function __construct(){
		//echo 'Base Controller Loaded' ;
	}

	protected function getBehaviour(){
		echo 'Behaviour found' ;
	}
}