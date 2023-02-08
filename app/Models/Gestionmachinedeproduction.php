<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class gestionmachinedeproduction extends Sximo  {
	
	protected $table = 'tb_gestion_machine_olives';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_gestion_machine_olives.* FROM tb_gestion_machine_olives  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_gestion_machine_olives.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
