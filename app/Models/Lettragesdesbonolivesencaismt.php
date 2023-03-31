<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class lettragesdesbonolivesencaismt extends Sximo  {
	
	protected $table = 'tb_lettrages_bon_olives_encaist';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_lettrages_bon_olives_encaist.* FROM tb_lettrages_bon_olives_encaist  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_lettrages_bon_olives_encaist.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
