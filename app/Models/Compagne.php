<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class compagne extends Sximo  {
	
	protected $table = 'tb_compagne';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_compagne.* FROM tb_compagne  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_compagne.id IS NOT NULL AND tb_compagne.m_id=".session('mid');
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
