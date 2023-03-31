<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class ouvrirloprohui extends Sximo  {
	
	protected $table = 'tb_ouvrir_lot_de_prod_hui_cit';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_ouvrir_lot_de_prod_hui_cit.* FROM tb_ouvrir_lot_de_prod_hui_cit  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_ouvrir_lot_de_prod_hui_cit.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
