<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class lotdestockage extends Sximo  {
	
	protected $table = 'lot_de_stockage_olives';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT lot_de_stockage_olives.* FROM lot_de_stockage_olives  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE lot_de_stockage_olives.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
