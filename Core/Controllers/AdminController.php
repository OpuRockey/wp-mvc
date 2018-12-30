<?php

namespace Core\Controllers ;

use Core\Controllers\BaseController ;
use Core\Helpers\StaticHelper ;

class AdminController extends BaseController{

	public function __construct(){
		parent::__construct();
		echo StaticHelper::addNumber([1,2,3]);
		$this->getBe();
	}

	public function getBe(){
		$this->getBehaviour();
	}


}