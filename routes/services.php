<?php
        
// Start Routes for societes 
Route::resource('services/societes','Services\SocietesController');
// End Routes for societes 

                    
// Start Routes for citerne 
Route::resource('services/citerne','Services\CiterneController');
// End Routes for citerne 

                    
// Start Routes for compagne 
Route::resource('services/compagne','Services\CompagneController');
// End Routes for compagne 

                    
// Start Routes for gestionregionolives 
Route::resource('services/gestionregionolives','Services\GestionregionolivesController');
// End Routes for gestionregionolives 

                    
// Start Routes for natureolive 
Route::resource('services/natureolive','Services\NatureoliveController');
// End Routes for natureolive 

                    
// Start Routes for gestiondescaissesplastiques 
Route::resource('services/gestiondescaissesplastiques','Services\GestiondescaissesplastiquesController');
// End Routes for gestiondescaissesplastiques 

                    
// Start Routes for tierscrediteurs 
Route::resource('services/tierscrediteurs','Services\TierscrediteursController');
// End Routes for tierscrediteurs 

                    
// Start Routes for gestionmachinedeproduction 
Route::resource('services/gestionmachinedeproduction','Services\GestionmachinedeproductionController');
// End Routes for gestionmachinedeproduction 

                    ?>