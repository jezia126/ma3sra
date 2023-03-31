<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class natureolive extends Sximo  {
	
	protected $table = 'tb_nature_olive';
	protected $primaryKey = 'code';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_nature_olive.* FROM tb_nature_olive  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_nature_olive.code IS NOT NULL AND tb_nature_olive.m_id=".session('mid');
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
