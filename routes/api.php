<?php

use App\Http\Controllers\ReceptionoliveController;
use Illuminate\Http\Request;
use App\Http\Controllers\FicheclientController;
use App\Http\Controllers\TierscrediteursController;
use App\Http\Controllers\GestionlotdestockageoliveController;

use App\Http\Controllers\GestiondescaissesplastiquesController;
use Illuminate\Support\Facades\DB;
use App\Models\Gestiondescaissesplastiques;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:api')->get('/user', function (Request $request) {
    //return $request->user();

});
Route::get('services/info', 'Services\SiteController@info');
Route::get('/ficheclient/{id}',[FicheclientController::class,'getlotdestockageolive']);
Route::get('/tierscrediteurs/{id}',[TierscrediteursController::class,'gettiers']);
Route::get('/receptionolive/{id}',[ReceptionoliveController::class,'getreceptionolive']);
Route::get('/gestionlotdestockageolive/{id}',[GestionlotdestockageoliveController::class,'getgestionlotstockageolive']);

Route::get('/gestiondescaissesplastiques', 'GestiondescaissesplastiquesController@getcaisses');
//Route::put('/gestiondescaissesplastiques/{code}/{disponible}', 'GestiondescaissesplastiquesController@updatecaisses');

/*Route::put('/update-gestiondescaissesplastiques-disponible/{code}', function ($id) {

	
    DB::table('tb_gestion_des_caisses_plastique')
       // ->join('tb_gestion_des_lots_de_stockage_olives', 'tb_gestion_des_caisses_plastique.code', '=', 'tb_gestion_des_lots_de_stockage_olives.id')
        ->where('tb_gestion_des_caisses_plastique.code', $id)
        ->update(['tb_gestion_des_caisses_plastique.disponible' => "non"]);

    return response()->json([
        'message' => 'Le champ "dispo" de l\'utilisateur a été mis à jour avec succès !'
    ]);
});
*/

Route::put('/update-gestiondescaissesplastiques-disponible', function (Request $request) {
    $codes = $request->input('nombre_caisse');

    DB::table('tb_gestion_des_caisses_plastique')
        ->whereIn('code', $codes)
        ->update(['disponible' => "non"]);

    return response()->json([        'message' => 'Les champs "dispo" des enregistrements ont été mis à jour avec succès !'    ]);
});


Route::get('services/cruds', 'Services\SiteController@cruds');
Route::group(['middleware' => 'sximoauth'], function () {
	Route::get('services/profile', 'Services\SiteController@profile');
	Route::post('services/saveprofile', 'Services\SiteController@Saveprofile');
	Route::get('services/notification', 'Services\SiteController@notification');

	
	include('services.php');
});

