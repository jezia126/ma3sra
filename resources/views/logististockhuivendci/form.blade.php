@extends('layouts.app')

@section('content')
<div class="page-titles">
  <h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2>
</div>
<div class="card">
	<div class="card-body">


	{!! Form::open(array('url'=>'logististockhuivendci?return='.$return, 'class'=>'form-horizontal  validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
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

	</div>
	
	<input type="hidden" name="action_task" value="save" />
	{!! Form::close() !!}
	</div>
</div>
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		 	
		 	 

		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("logististockhuivendci/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop