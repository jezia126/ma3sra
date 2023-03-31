

		 {!! Form::open(array('url'=>'ouvrirloprohui', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> ouvr_lot_pro_hui_cit</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Lot De Production N" class=" control-label col-md-4 "> Lot De Production N <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='lot_de_production_n' id='lot_de_production_n' value='{{ $row['lot_de_production_n'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Citerne De Stockage" class=" control-label col-md-4 "> Citerne De Stockage <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='citerne_de_stockage' id='citerne_de_stockage' value='{{ $row['citerne_de_stockage'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Liste Des Citernes Disponibles" class=" control-label col-md-4 "> Liste Des Citernes Disponibles <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='liste_des_citernes_disponibles' id='liste_des_citernes_disponibles' value='{{ $row['liste_des_citernes_disponibles'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date Debut" class=" control-label col-md-4 "> Date Debut <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='date_debut' id='date_debut' value='{{ $row['date_debut'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date Fin" class=" control-label col-md-4 "> Date Fin <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='date_fin' id='date_fin' value='{{ $row['date_fin'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Fermeture De Lot" class=" control-label col-md-4 "> Fermeture De Lot <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  
					
					<input type='radio' name='fermeture_de_lot' value ='non' required @if($row['fermeture_de_lot'] == 'non') checked="checked" @endif class='filled-in' id='fermeture_de_lot-0'> <label for='fermeture_de_lot-0'>non </label>
					
					<input type='radio' name='fermeture_de_lot' value ='oui' required @if($row['fermeture_de_lot'] == 'oui') checked="checked" @endif class='filled-in' id='fermeture_de_lot-1'> <label for='fermeture_de_lot-1'>oui </label> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Visa De Vente" class=" control-label col-md-4 "> Visa De Vente <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  
					
					<input type='radio' name='visa_de_vente' value ='non' required @if($row['visa_de_vente'] == 'non') checked="checked" @endif class='filled-in' id='visa_de_vente-0'> <label for='visa_de_vente-0'>non </label>
					
					<input type='radio' name='visa_de_vente' value ='oui' required @if($row['visa_de_vente'] == 'oui') checked="checked" @endif class='filled-in' id='visa_de_vente-1'> <label for='visa_de_vente-1'>oui </label> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Liberer Citerne" class=" control-label col-md-4 "> Liberer Citerne <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  
					
					<input type='radio' name='liberer_citerne' value ='oui' required @if($row['liberer_citerne'] == 'oui') checked="checked" @endif class='filled-in' id='liberer_citerne-0'> <label for='liberer_citerne-0'>oui </label>
					
					<input type='radio' name='liberer_citerne' value ='non' required @if($row['liberer_citerne'] == 'non') checked="checked" @endif class='filled-in' id='liberer_citerne-1'> <label for='liberer_citerne-1'>non </label> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Type Huile" class=" control-label col-md-4 "> Type Huile <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  
					
					<input type='radio' name='type_huile' value ='Bio' required @if($row['type_huile'] == 'Bio') checked="checked" @endif class='filled-in' id='type_huile-0'> <label for='type_huile-0'>Bio </label>
					
					<input type='radio' name='type_huile' value ='conventionelle' required @if($row['type_huile'] == 'conventionelle') checked="checked" @endif class='filled-in' id='type_huile-1'> <label for='type_huile-1'>conventionelle </label> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Acidite" class=" control-label col-md-4 "> Acidite <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='acidite' id='acidite' value='{{ $row['acidite'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Pyroxde" class=" control-label col-md-4 "> Pyroxde <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='pyroxde' id='pyroxde' value='{{ $row['pyroxde'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="K232" class=" control-label col-md-4 "> K232 <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='k232' id='k232' value='{{ $row['k232'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Inferieur" class=" control-label col-md-4 "> Inferieur <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='inferieur' id='inferieur' value='{{ $row['inferieur'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Superieur" class=" control-label col-md-4 "> Superieur <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='superieur' id='superieur' value='{{ $row['superieur'] }}' 
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
