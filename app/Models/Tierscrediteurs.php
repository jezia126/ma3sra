<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class tierscrediteurs extends Sximo  {
	
	protected $table = 'tb_tiers_crediteur';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return " SELECT tb_tiers_crediteur.* FROM tb_tiers_crediteur ";
	}	

	public static function queryWhere(  ){
		
		return " WHERE tb_tiers_crediteur.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
