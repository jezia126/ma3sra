<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class achat extends Sximo  {
	
	protected $table = 'tb_achat';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_achat.* FROM tb_achat  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_achat.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
