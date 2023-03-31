

		 {!! Form::open(array('url'=>'logististockhuilache', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> logisti_stock_hui_ache</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Du" class=" control-label col-md-4 "> Du <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='du' id='du' value='{{ $row['du'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Au" class=" control-label col-md-4 "> Au <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='au' id='au' value='{{ $row['au'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date Activee" class=" control-label col-md-4 "> Date Activee </label>
										<div class="col-md-8">
										  <?php $date_activee = explode(",",$row['date_activee']); ?>
					  
					<input type='checkbox' name='date_activee[]' value ='Date Activee'   class=' filled-in' id='date_activee-0'
					@if(in_array('Date Activee',$date_activee))checked @endif 
					 /> <label for='date_activee-0'> Date Activee </label>  
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Achat Matiere Premieres" class=" control-label col-md-4 "> Achat Matiere Premieres <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  
					
					<input type='radio' name='achat_matiere_premieres' value ='tous les fournisseurs' required @if($row['achat_matiere_premieres'] == 'tous les fournisseurs') checked="checked" @endif class='filled-in' id='achat_matiere_premieres-0'> <label for='achat_matiere_premieres-0'>tous les fournisseurs </label>
					
					<input type='radio' name='achat_matiere_premieres' value ='par fournisseur' required @if($row['achat_matiere_premieres'] == 'par fournisseur') checked="checked" @endif class='filled-in' id='achat_matiere_premieres-1'> <label for='achat_matiere_premieres-1'>par fournisseur </label> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Logistique" class=" control-label col-md-4 "> Logistique <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  
					
					<input type='radio' name='logistique' value ='tous les achats matieres premieres' required @if($row['logistique'] == 'tous les achats matieres premieres') checked="checked" @endif class='filled-in' id='logistique-0'> <label for='logistique-0'>tous les achats matieres premieres </label>
					
					<input type='radio' name='logistique' value ='Achats stocke' required @if($row['logistique'] == 'Achats stocke') checked="checked" @endif class='filled-in' id='logistique-1'> <label for='logistique-1'>Achats stocke </label>
					
					<input type='radio' name='logistique' value ='Achats non stockés' required @if($row['logistique'] == 'Achats non stockés') checked="checked" @endif class='filled-in' id='logistique-2'> <label for='logistique-2'>Achats non stockés </label>
					
					<input type='radio' name='logistique' value ='Achats a stocker' required @if($row['logistique'] == 'Achats a stocker') checked="checked" @endif class='filled-in' id='logistique-3'> <label for='logistique-3'>Achats a stocker </label> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Code Fournisseur" class=" control-label col-md-4 "> Code Fournisseur <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='code_fournisseur' id='code_fournisseur' value='{{ $row['code_fournisseur'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Fournisseur" class=" control-label col-md-4 "> Fournisseur <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='fournisseur' id='fournisseur' value='{{ $row['fournisseur'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Sous Compte" class=" control-label col-md-4 "> Sous Compte <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='sous_compte' id='sous_compte' value='{{ $row['sous_compte'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Titre De Sous Compte" class=" control-label col-md-4 "> Titre De Sous Compte <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='titre_de_sous_compte' id='titre_de_sous_compte' value='{{ $row['titre_de_sous_compte'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> </fieldset></div>

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
