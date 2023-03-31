@extends('layouts.app')

@section('content')
<div class="page-titles">
  <h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2>
</div>
<div class="card">
	<div class="card-body">


	{!! Form::open(array('url'=>'stockagehuileciter?return='.$return, 'class'=>'form-horizontal  validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
	<div class="toolbar-nav">
		<div class="row">
			<div class="col-md-6 " >
				 <a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn btn-danger  btn-sm "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-times"></i></a>
			</div>
			<div class="col-md-6  text-right " >
				<div class="btn-group">
					
						<button name="apply" class="tips btn btn-sm btn-info  "  title="{{ __('core.btn_back') }}" > {{ __('core.sb_apply') }} </button>
						<button name="save" class="tips btn btn-sm btn-primary "  id="saved-button" title="{{ __('core.btn_back') }}" > {{ __('core.sb_save') }} </button> 
						
					
				</div>		
			</div>
			
		</div>
	</div>	


	
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		
	<div class="">
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

	</div>
	
	<input type="hidden" name="action_task" value="save" />
	{!! Form::close() !!}
	</div>
</div>
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		 	
		 	 

		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("stockagehuileciter/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop