<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class gestionregionolives extends Sximo  {
	
	protected $table = 'tb_gestion_des_regions_olives';
	protected $primaryKey = 'code';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return " SELECT tb_gestion_des_regions_olives.* FROM tb_gestion_des_regions_olives ";
	}	

	public static function queryWhere(  ){
		
		return " WHERE tb_gestion_des_regions_olives.code IS NOT NULL AND tb_gestion_des_regions_olives.m_id=".session('mid');
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
