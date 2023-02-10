

		 {!! Form::open(array('url'=>'gestionlotolive', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> gestion lot stockage olive</legend>
									
									  <div class="form-group row  " >
										<label for="Lot De Stockage Olive N" class=" control-label col-md-4 "> Lot De Stockage Olive N </label>
										<div class="col-md-8">
										  <input  type='text' name='lot_de_stockage_olive_n' id='lot_de_stockage_olive_n' value='{{ $row['lot_de_stockage_olive_n'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Lot Saturation" class=" control-label col-md-4 "> Lot Saturation </label>
										<div class="col-md-8">
										  <input  type='text' name='lot_saturation' id='lot_saturation' value='{{ $row['lot_saturation'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Lot Trituration" class=" control-label col-md-4 "> Lot Trituration </label>
										<div class="col-md-8">
										  <input  type='text' name='lot_trituration' id='lot_trituration' value='{{ $row['lot_trituration'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date Stockage" class=" control-label col-md-4 "> Date Stockage </label>
										<div class="col-md-8">
										  <input  type='text' name='date_stockage' id='date_stockage' value='{{ $row['date_stockage'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date Execution" class=" control-label col-md-4 "> Date Execution </label>
										<div class="col-md-8">
										  <input  type='text' name='date_execution' id='date_execution' value='{{ $row['date_execution'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date De Fin Execution" class=" control-label col-md-4 "> Date De Fin Execution </label>
										<div class="col-md-8">
										  <input  type='text' name='date_de_fin_execution' id='date_de_fin_execution' value='{{ $row['date_de_fin_execution'] }}' 
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
										<label for="Nombre Reception" class=" control-label col-md-4 "> Nombre Reception </label>
										<div class="col-md-8">
										  <input  type='text' name='nombre_reception' id='nombre_reception' value='{{ $row['nombre_reception'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Nombre Caisse" class=" control-label col-md-4 "> Nombre Caisse </label>
										<div class="col-md-8">
										  <input  type='text' name='nombre_caisse' id='nombre_caisse' value='{{ $row['nombre_caisse'] }}' 
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
										<label for="Type De Huile" class=" control-label col-md-4 "> Type De Huile </label>
										<div class="col-md-8">
										  <input  type='text' name='type_de_huile' id='type_de_huile' value='{{ $row['type_de_huile'] }}' 
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
