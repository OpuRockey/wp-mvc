<?php

namespace Core\Helpers ;

use Core\Helpers\ViewBuilderHelper ;

class StaticHelper{

	public static function addNumber($param = []){

		$vbh = new ViewBuilderHelper ;

		$endNumber = 0 ;
		if(count($param) > 0){
			foreach ($param as $prm) {
				$endNumber += $vbh->multiply2($prm) ;
			}
		}
		return $endNumber ;
	}
}