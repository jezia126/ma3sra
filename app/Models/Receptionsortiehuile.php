<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class receptionsortiehuile extends Sximo  {
	
	protected $table = 'tb_reception_sortie_huile';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_reception_sortie_huile.* FROM tb_reception_sortie_huile  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_reception_sortie_huile.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
