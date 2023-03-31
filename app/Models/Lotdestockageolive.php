<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class lotdestockageolive extends Sximo  {
	
	protected $table = 'tb_lot_de_stockage_olives';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return " SELECT tb_lot_de_stockage_olives.* FROM tb_lot_de_stockage_olives ";
	}	

	public static function queryWhere(  ){
		
		return " WHERE tb_lot_de_stockage_olives.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
