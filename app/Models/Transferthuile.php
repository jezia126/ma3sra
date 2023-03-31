<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class transferthuile extends Sximo  {
	
	protected $table = 'tb_transf_hui_en_les_citer';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_transf_hui_en_les_citer.* FROM tb_transf_hui_en_les_citer  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_transf_hui_en_les_citer.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
