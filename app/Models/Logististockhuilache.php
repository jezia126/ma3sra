<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class logististockhuilache extends Sximo  {
	
	protected $table = 'tb_logist_stock_hui_ache';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_logist_stock_hui_ache.* FROM tb_logist_stock_hui_ache  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_logist_stock_hui_ache.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
