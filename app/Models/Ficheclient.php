<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class ficheclient extends Sximo  {
	
	protected $table = 'tb_fiche_client';
	protected $primaryKey = 'code_client';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_fiche_client.* FROM tb_fiche_client  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_fiche_client.code_client IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
