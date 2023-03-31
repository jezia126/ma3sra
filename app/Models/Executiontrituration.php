<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class executiontrituration extends Sximo  {
	
	protected $table = 'execution_de_trituration';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT execution_de_trituration.* FROM execution_de_trituration  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE execution_de_trituration.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
