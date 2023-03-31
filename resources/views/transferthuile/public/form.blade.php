

		 {!! Form::open(array('url'=>'transferthuile', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> transfe_hui_en_cite</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Coupage N" class=" control-label col-md-4 "> Coupage N <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='coupage_n' id='coupage_n' value='{{ $row['coupage_n'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Lot Recepteur" class=" control-label col-md-4 "> Lot Recepteur <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='lot_recepteur' id='lot_recepteur' value='{{ $row['lot_recepteur'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date Operation" class=" control-label col-md-4 "> Date Operation <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='date_operation' id='date_operation' value='{{ $row['date_operation'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Lot Donneur" class=" control-label col-md-4 "> Lot Donneur <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='lot_donneur' id='lot_donneur' value='{{ $row['lot_donneur'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="La Quantite De Huile Transferer" class=" control-label col-md-4 "> La Quantite De Huile Transferer <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='la_quantite_de_huile_transferer' id='la_quantite_de_huile_transferer' value='{{ $row['la_quantite_de_huile_transferer'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Cout Unitaire Kg" class=" control-label col-md-4 "> Cout Unitaire Kg <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='cout_unitaire_kg' id='cout_unitaire_kg' value='{{ $row['cout_unitaire_kg'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date Debut" class=" control-label col-md-4 "> Date Debut <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  
				
					{!! Form::text('date_debut', $row['date_debut'],array('class'=>'form-control form-control-sm date')) !!} 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date Fin" class=" control-label col-md-4 "> Date Fin <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  
				
					{!! Form::text('date_fin', $row['date_fin'],array('class'=>'form-control form-control-sm date')) !!} 
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
