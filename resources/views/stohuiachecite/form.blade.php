@extends('layouts.app')

@section('content')
<div class="page-titles">
  <h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2>
</div>
<div class="card">
	<div class="card-body">


	{!! Form::open(array('url'=>'stohuiachecite?return='.$return, 'class'=>'form-horizontal  validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
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
						<fieldset><legend> stock_hui_ache_cite</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Date" class=" control-label col-md-4 "> Date <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='date' id='date' value='{{ $row['date'] }}' 
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
										<label for="Code" class=" control-label col-md-4 "> Code <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='code' id='code' value='{{ $row['code'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Qte Achat" class=" control-label col-md-4 "> Qte Achat <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='qte_achat' id='qte_achat' value='{{ $row['qte_achat'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Qte Reste A Stocke" class=" control-label col-md-4 "> Qte Reste A Stocke <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='qte_reste_a_stocke' id='qte_reste_a_stocke' value='{{ $row['qte_reste_a_stocke'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Reception N" class=" control-label col-md-4 "> Reception N <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='reception_n' id='reception_n' value='{{ $row['reception_n'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date Rec" class=" control-label col-md-4 "> Date Rec <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='date_rec' id='date_rec' value='{{ $row['date_rec'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Observation" class=" control-label col-md-4 "> Observation <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='observation' id='observation' value='{{ $row['observation'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Plombage N" class=" control-label col-md-4 "> Plombage N <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='plombage_n' id='plombage_n' value='{{ $row['plombage_n'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Quantite Stockee" class=" control-label col-md-4 "> Quantite Stockee <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='quantite_stockee' id='quantite_stockee' value='{{ $row['quantite_stockee'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Code Citerne" class=" control-label col-md-4 "> Code Citerne <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='code_citerne' id='code_citerne' value='{{ $row['code_citerne'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Lot De Production" class=" control-label col-md-4 "> Lot De Production <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='lot_de_production' id='lot_de_production' value='{{ $row['lot_de_production'] }}' 
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
			var removeUrl = '{{ url("stohuiachecite/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop