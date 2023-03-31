@extends('layouts.app')

@section('content')
<div class="page-titles">
  <h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2>
</div>
<div class="card">
	<div class="card-body">


	{!! Form::open(array('url'=>'lotdestockageolive?return='.$return, 'class'=>'form-horizontal  validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
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
						<fieldset><legend> lot_de_stockageolive</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="M Id" class=" control-label col-md-4 "> M Id </label>
										<div class="col-md-8">
										  <input  type='text' name='m_id' id='m_id' value='{{ $row['m_id'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Lot N" class=" control-label col-md-4 "> Lot N <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='lot_n' id='lot_n' value='{{ $row['lot_n'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date De Stockage" class=" control-label col-md-4 "> Date De Stockage <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='date_de_stockage' id='date_de_stockage' value='{{ $row['date_de_stockage'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Nombre Reception" class=" control-label col-md-4 "> Nombre Reception <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='nombre_reception' id='nombre_reception' value='{{ $row['nombre_reception'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Tiers" class=" control-label col-md-4 "> Tiers <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='tiers' id='tiers' value='{{ $row['tiers'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Nombre Caisse" class=" control-label col-md-4 "> Nombre Caisse <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='nombre_caisse' id='nombre_caisse' value='{{ $row['nombre_caisse'] }}' 
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
										<label for="Type D Huile" class=" control-label col-md-4 "> Type D Huile </label>
										<div class="col-md-8">
										  <input  type='text' name='type_d_huile' id='type_d_huile' value='{{ $row['type_d_huile'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Quantite Olive" class=" control-label col-md-4 "> Quantite Olive </label>
										<div class="col-md-8">
										  <input  type='text' name='quantite_olive' id='quantite_olive' value='{{ $row['quantite_olive'] }}' 
						     class='form-control form-control-sm ' /> 
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
			var removeUrl = '{{ url("lotdestockageolive/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop