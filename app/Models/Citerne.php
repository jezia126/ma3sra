<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class citerne extends Sximo  {
	
	protected $table = 'tb_gestion_des_citernes_stock_huile';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return " SELECT tb_gestion_des_citernes_stock_huile.* FROM tb_gestion_des_citernes_stock_huile ";
	}	

	public static function queryWhere(  ){
		
		return " WHERE tb_gestion_des_citernes_stock_huile.id IS NOT NULL AND tb_gestion_des_citernes_stock_huile.m_id=".session('mid'); 
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
