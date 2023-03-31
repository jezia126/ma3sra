

		 {!! Form::open(array('url'=>'stockagehuileciter', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> stock_hui_citer</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Lot De Trituration N" class=" control-label col-md-4 "> Lot De Trituration N <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='lot_de_trituration_n' id='lot_de_trituration_n' value='{{ $row['lot_de_trituration_n'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Operation" class=" control-label col-md-4 "> Operation <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='operation' id='operation' value='{{ $row['operation'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date Creation De Lot" class=" control-label col-md-4 "> Date Creation De Lot <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='date_creation_de_lot' id='date_creation_de_lot' value='{{ $row['date_creation_de_lot'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Quantite De Huile" class=" control-label col-md-4 "> Quantite De Huile <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='quantite_de_huile' id='quantite_de_huile' value='{{ $row['quantite_de_huile'] }}' 
						required     class='form-control form-control-sm ' /> 
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
										<label for="Type De Machine" class=" control-label col-md-4 "> Type De Machine <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='type_de_machine' id='type_de_machine' value='{{ $row['type_de_machine'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Taux De Tritution" class=" control-label col-md-4 "> Taux De Tritution <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='taux_de_tritution' id='taux_de_tritution' value='{{ $row['taux_de_tritution'] }}' 
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
