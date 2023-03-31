

		 {!! Form::open(array('url'=>'executiontrituration', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> execution_trituration</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Lot N" class=" control-label col-md-4 "> Lot N </label>
										<div class="col-md-8">
										  <input  type='text' name='lot_n' id='lot_n' value='{{ $row['lot_n'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date De Stockage" class=" control-label col-md-4 "> Date De Stockage </label>
										<div class="col-md-8">
										  <input  type='text' name='date_de_stockage' id='date_de_stockage' value='{{ $row['date_de_stockage'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Tiers" class=" control-label col-md-4 "> Tiers </label>
										<div class="col-md-8">
										  <input  type='text' name='tiers' id='tiers' value='{{ $row['tiers'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Operation" class=" control-label col-md-4 "> Operation </label>
										<div class="col-md-8">
										  <input  type='text' name='operation' id='operation' value='{{ $row['operation'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Nature Dolive" class=" control-label col-md-4 "> Nature Dolive </label>
										<div class="col-md-8">
										  <input  type='text' name='nature_dolive' id='nature_dolive' value='{{ $row['nature_dolive'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Quantitee" class=" control-label col-md-4 "> Quantitee </label>
										<div class="col-md-8">
										  <input  type='text' name='quantitee' id='quantitee' value='{{ $row['quantitee'] }}' 
						     class='form-control form-control-sm ' /> 
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
