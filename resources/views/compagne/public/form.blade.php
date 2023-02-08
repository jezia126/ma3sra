

		 {!! Form::open(array('url'=>'compagne', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> parametragee</legend>
									
									  <div class="form-group row  " >
										<label for="Id Société" class=" control-label col-md-4 "> Id Société </label>
										<div class="col-md-8">
										  <input  type='text' name='id_société' id='id_société' value='{{ $row['id_société'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Raison Social" class=" control-label col-md-4 "> Raison Social </label>
										<div class="col-md-8">
										  <input  type='text' name='Raison_social' id='Raison_social' value='{{ $row['Raison_social'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Annee Debut" class=" control-label col-md-4 "> Annee Debut </label>
										<div class="col-md-8">
										  <input  type='text' name='annee_debut' id='annee_debut' value='{{ $row['annee_debut'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Annee Fin" class=" control-label col-md-4 "> Annee Fin </label>
										<div class="col-md-8">
										  <input  type='text' name='annee_fin' id='annee_fin' value='{{ $row['annee_fin'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Note Sur Exercice" class=" control-label col-md-4 "> Note Sur Exercice </label>
										<div class="col-md-8">
										  <input  type='text' name='note_sur_exercice' id='note_sur_exercice' value='{{ $row['note_sur_exercice'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date Debut" class=" control-label col-md-4 "> Date Debut </label>
										<div class="col-md-8">
										  <input  type='text' name='date_debut' id='date_debut' value='{{ $row['date_debut'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date Fin" class=" control-label col-md-4 "> Date Fin </label>
										<div class="col-md-8">
										  <input  type='text' name='date_fin' id='date_fin' value='{{ $row['date_fin'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Compagne N" class=" control-label col-md-4 "> Compagne N </label>
										<div class="col-md-8">
										  <input  type='text' name='compagne_n' id='compagne_n' value='{{ $row['compagne_n'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Frais Par Kg Huile" class=" control-label col-md-4 "> Frais Par Kg Huile </label>
										<div class="col-md-8">
										  <input  type='text' name='frais_par_kg_huile' id='frais_par_kg_huile' value='{{ $row['frais_par_kg_huile'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Frais Par Kg Olive Trituration" class=" control-label col-md-4 "> Frais Par Kg Olive Trituration </label>
										<div class="col-md-8">
										  <input  type='text' name='frais_par_kg_olive_trituration' id='frais_par_kg_olive_trituration' value='{{ $row['frais_par_kg_olive_trituration'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Compteur Des Contrats" class=" control-label col-md-4 "> Compteur Des Contrats </label>
										<div class="col-md-8">
										  <input  type='text' name='Compteur_des_contrats' id='Compteur_des_contrats' value='{{ $row['Compteur_des_contrats'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Abr Compagne" class=" control-label col-md-4 "> Abr Compagne </label>
										<div class="col-md-8">
										  <input  type='text' name='abr_compagne' id='abr_compagne' value='{{ $row['abr_compagne'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Wiba En Kg" class=" control-label col-md-4 "> Wiba En Kg </label>
										<div class="col-md-8">
										  <input  type='text' name='wiba_en_kg' id='wiba_en_kg' value='{{ $row['wiba_en_kg'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Taux De Grignon Par Wiba" class=" control-label col-md-4 "> Taux De Grignon Par Wiba </label>
										<div class="col-md-8">
										  <input  type='text' name='taux_de_grignon_par_wiba' id='taux_de_grignon_par_wiba' value='{{ $row['taux_de_grignon_par_wiba'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Kg Olivesh" class=" control-label col-md-4 "> Kg Olivesh </label>
										<div class="col-md-8">
										  <input  type='text' name='kg_olivesh' id='kg_olivesh' value='{{ $row['kg_olivesh'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> {!! Form::hidden('id', $row['id']) !!}</fieldset></div>

			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-default btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-default btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
				  </div>	  
			
		</div> 
		 <input type="hidden" name="action_task" value="public" />
		 {!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
