@extends('layouts.app')

@section('content')
<div class="page-titles">
  <h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2>
</div>
<div class="card">
	<div class="card-body">


	{!! Form::open(array('url'=>'gestionregionolives?return='.$return, 'class'=>'form-horizontal  validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
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
						<fieldset><legend> gestion region olives</legend>
									
									  <div class="form-group row  " >
										<label for="Id" class=" control-label col-md-4 "> Id </label>
										<div class="col-md-8">
										  <textarea name='id' rows='5' id='id' class='form-control form-control-sm '  
				           >{{ $row['id'] }}</textarea> 
										 </div> 
										 
									  </div> {!! Form::hidden('code', $row['code']) !!}					
									  <div class="form-group row  " >
										<label for="Postale" class=" control-label col-md-4 "> Postale <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='postale' id='postale' value='{{ $row['postale'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Libelle" class=" control-label col-md-4 "> Libelle <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='libelle' id='libelle' value='{{ $row['libelle'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Indicatif" class=" control-label col-md-4 "> Indicatif <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='indicatif' id='indicatif' value='{{ $row['indicatif'] }}' 
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
			var removeUrl = '{{ url("gestionregionolives/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop