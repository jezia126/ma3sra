<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class societe extends Sximo  {
	
	protected $table = 'tb_societes';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_societes.* FROM tb_societes  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_societes.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
