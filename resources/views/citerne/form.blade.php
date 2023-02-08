@extends('layouts.app')

@section('content')
<div class="page-titles">
  <h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2>
</div>
<div class="card">
	<div class="card-body">


	{!! Form::open(array('url'=>'citerne?return='.$return, 'class'=>'form-horizontal  validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
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
						<fieldset><legend> gestion des citernes huile</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Type De Huile" class=" control-label col-md-4 "> Type De Huile <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  
					
					<input type='radio' name='type_de_huile' value ='conventionelle' required @if($row['type_de_huile'] == 'conventionelle') checked="checked" @endif class='filled-in' id='type_de_huile-0'> <label for='type_de_huile-0'>Conventionelle </label>
					
					<input type='radio' name='type_de_huile' value ='bio' required @if($row['type_de_huile'] == 'bio') checked="checked" @endif class='filled-in' id='type_de_huile-1'> <label for='type_de_huile-1'>Bio </label> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Auto" class=" control-label col-md-4 "> Auto <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='auto' id='auto' value='{{ $row['auto'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Capacité En Kg" class=" control-label col-md-4 "> Capacité En Kg <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='capacité_en_kg' id='capacité_en_kg' value='{{ $row['capacité_en_kg'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Localité" class=" control-label col-md-4 "> Localité <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='localité' id='localité' value='{{ $row['localité'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Zone De Conditionnement" class=" control-label col-md-4 "> Zone De Conditionnement <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='zone_de_conditionnement' id='zone_de_conditionnement' value='{{ $row['zone_de_conditionnement'] }}' 
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
			var removeUrl = '{{ url("citerne/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop