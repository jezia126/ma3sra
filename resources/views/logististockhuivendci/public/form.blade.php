

		 {!! Form::open(array('url'=>'logististockhuivendci', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> logisti_stock_hui_vend_ci</legend>
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
										<label for="Sorti Mat Prem" class=" control-label col-md-4 "> Sorti Mat Prem <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  
					
					<input type='radio' name='sorti_mat_prem' value ='Tous les clients' required @if($row['sorti_mat_prem'] == 'Tous les clients') checked="checked" @endif class='filled-in' id='sorti_mat_prem-0'> <label for='sorti_mat_prem-0'>Tous les clients </label>
					
					<input type='radio' name='sorti_mat_prem' value ='Par Client' required @if($row['sorti_mat_prem'] == 'Par Client') checked="checked" @endif class='filled-in' id='sorti_mat_prem-1'> <label for='sorti_mat_prem-1'>Par Client </label> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Situati Stock" class=" control-label col-md-4 "> Situati Stock <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  
					
					<input type='radio' name='situati_stock' value ='tous les ventes premieres' required @if($row['situati_stock'] == 'tous les ventes premieres') checked="checked" @endif class='filled-in' id='situati_stock-0'> <label for='situati_stock-0'>tous les ventes premieres </label>
					
					<input type='radio' name='situati_stock' value ='vente stocke' required @if($row['situati_stock'] == 'vente stocke') checked="checked" @endif class='filled-in' id='situati_stock-1'> <label for='situati_stock-1'>vente stocke </label>
					
					<input type='radio' name='situati_stock' value ='vente non stocke' required @if($row['situati_stock'] == 'vente non stocke') checked="checked" @endif class='filled-in' id='situati_stock-2'> <label for='situati_stock-2'>vente non stocke </label> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Code Client" class=" control-label col-md-4 "> Code Client <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='code_client' id='code_client' value='{{ $row['code_client'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Client" class=" control-label col-md-4 "> Client <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='client' id='client' value='{{ $row['client'] }}' 
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
