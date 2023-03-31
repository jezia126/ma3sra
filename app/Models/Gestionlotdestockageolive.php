<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class gestionlotdestockageolive extends Sximo  {
	
	protected $table = 'tb_gestion_des_lots_de_stockage_olives';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return " SELECT tb_gestion_des_lots_de_stockage_olives.* FROM tb_gestion_des_lots_de_stockage_olives ";
	}	

	public static function queryWhere(  ){
		
		return " WHERE tb_gestion_des_lots_de_stockage_olives.id IS NOT NULL AND tb_gestion_des_lots_de_stockage_olives.m_id=".session('mid');
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
