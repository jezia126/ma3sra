<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class index extends Sximo  {
	
	protected $table = 'tb_index';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_index.* FROM tb_index  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_index.id IS NOT NULL  AND tb_index.m_id=".session('mid');
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
