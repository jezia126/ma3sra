<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class gestiondescaissesplastiques extends Sximo  {
	
	protected $table = 'tb_gestion_des_caisses_plastique';
	protected $primaryKey = 'code';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return " SELECT tb_gestion_des_caisses_plastique.* FROM tb_gestion_des_caisses_plastique ";
	}	

	public static function queryWhere(  ){
		
		return " WHERE tb_gestion_des_caisses_plastique.code IS NOT NULL AND tb_gestion_des_caisses_plastique.m_id=".session('mid');
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
