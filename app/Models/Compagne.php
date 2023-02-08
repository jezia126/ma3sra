<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class compagne extends Sximo  {
	
	protected $table = 'parametrage';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT parametrage.* FROM parametrage  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE parametrage.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
