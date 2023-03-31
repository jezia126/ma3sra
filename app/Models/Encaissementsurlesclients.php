<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class encaissementsurlesclients extends Sximo  {
	
	protected $table = 'tb_encaissement_sur_clients';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return " SELECT tb_encaissement_sur_clients.* FROM tb_encaissement_sur_clients ";
	}	

	public static function queryWhere(  ){
		
		return " WHERE tb_encaissement_sur_clients.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
