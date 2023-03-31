<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class stohuiachecite extends Sximo  {
	
	protected $table = 'tb_stochui_ache_da_cite';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_stochui_ache_da_cite.* FROM tb_stochui_ache_da_cite  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_stochui_ache_da_cite.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
