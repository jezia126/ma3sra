<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class societes extends Sximo  {
	
	protected $table = 'tb_societes';
	protected $primaryKey = 'id';
	protected $fillable = [
       'raison_social', 'adresse','ville','tel','email','matricule_fiscale',
    ];

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return " SELECT societes.* FROM societes ";
	}	

	public static function queryWhere(  ){
		
		return " WHERE societes.id IS NOT NULL AND societes.m_id=".session('mid');
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
