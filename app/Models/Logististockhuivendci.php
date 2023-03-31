<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class logististockhuivendci extends Sximo  {
	
	protected $table = 'tb_logis_destock_hui_vend_citer';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_logis_destock_hui_vend_citer.* FROM tb_logis_destock_hui_vend_citer  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_logis_destock_hui_vend_citer.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
