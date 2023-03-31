

		 {!! Form::open(array('url'=>'receptionachathuile', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> recption_achat_huile</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Bon Achat N" class=" control-label col-md-4 "> Bon Achat N <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='bon_achat_n' id='bon_achat_n' value='{{ $row['bon_achat_n'] }}' 
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
										<label for="Date" class=" control-label col-md-4 "> Date <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='date' id='date' value='{{ $row['date'] }}' 
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
										<label for="Code Mp" class=" control-label col-md-4 "> Code Mp <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='code_mp' id='code_mp' value='{{ $row['code_mp'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Designiation" class=" control-label col-md-4 "> Designiation <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='designiation' id='designiation' value='{{ $row['designiation'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Quantite Achete" class=" control-label col-md-4 "> Quantite Achete <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='quantite_achete' id='quantite_achete' value='{{ $row['quantite_achete'] }}' 
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
