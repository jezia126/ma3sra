<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class stockagehuileciter extends Sximo  {
	
	protected $table = 'tb_stockage_huile_dans_une_citerne';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_stockage_huile_dans_une_citerne.* FROM tb_stockage_huile_dans_une_citerne  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_stockage_huile_dans_une_citerne.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
