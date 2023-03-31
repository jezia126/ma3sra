@extends('layouts.app')

@section('content')
<div class="page-titles">
  <h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2>
</div>
<div class="card">
	<div class="card-body">


	{!! Form::open(array('url'=>'destockhuilvendciter?return='.$return, 'class'=>'form-horizontal  validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
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
						<fieldset><legend> destock_hui_vend_citer</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Du" class=" control-label col-md-4 "> Du <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='du' id='du' value='{{ $row['du'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Designation" class=" control-label col-md-4 "> Designation <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='designation' id='designation' value='{{ $row['designation'] }}' 
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
										<label for="Qte Stocke" class=" control-label col-md-4 "> Qte Stocke <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='qte_stocke' id='qte_stocke' value='{{ $row['qte_stocke'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Qte Reste A Stoc" class=" control-label col-md-4 "> Qte Reste A Stoc <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='qte_reste_a_stoc' id='qte_reste_a_stoc' value='{{ $row['qte_reste_a_stoc'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Sortie N" class=" control-label col-md-4 "> Sortie N <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='sortie_n' id='sortie_n' value='{{ $row['sortie_n'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date" class=" control-label col-md-4 "> Date <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  
				
					{!! Form::text('date', $row['date'],array('class'=>'form-control form-control-sm date')) !!} 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Designationn" class=" control-label col-md-4 "> Designationn <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='designationn' id='designationn' value='{{ $row['designationn'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Plomage N" class=" control-label col-md-4 "> Plomage N <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='plomage_n' id='plomage_n' value='{{ $row['plomage_n'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Quant Destock" class=" control-label col-md-4 "> Quant Destock <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='quant_destock' id='quant_destock' value='{{ $row['quant_destock'] }}' 
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
										<label for="Lot De Prod" class=" control-label col-md-4 "> Lot De Prod <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='lot_de_prod' id='lot_de_prod' value='{{ $row['lot_de_prod'] }}' 
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
			var removeUrl = '{{ url("destockhuilvendciter/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop