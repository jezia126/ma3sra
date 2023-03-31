<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class tableaudebord extends Sximo  {
	
	protected $table = 'tableau_de_bord';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tableau_de_bord.* FROM tableau_de_bord  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tableau_de_bord.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
