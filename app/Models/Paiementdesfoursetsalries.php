<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class paiementdesfoursetsalries extends Sximo  {
	
	protected $table = 'tb_paiement_four_sal';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_paiement_four_sal.* FROM tb_paiement_four_sal  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_paiement_four_sal.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
