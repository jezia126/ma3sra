<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class receptionolive extends Sximo  {
	
	protected $table = 'tb_reception_olive';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return " SELECT tb_reception_olive.* FROM tb_reception_olive ";
	}	

	public static function queryWhere(  ){
		
		return " WHERE tb_reception_olive.id IS NOT NULL AND tb_reception_olive.m_id=".session('mid');
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
