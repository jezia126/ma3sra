@extends('layouts.app')

@section('content')
<div class="page-titles">
  <h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2>
</div>
<div class="card">
	<div class="card-body">


	{!! Form::open(array('url'=>'lettragesdesbonolives?return='.$return, 'class'=>'form-horizontal  validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
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
						<fieldset><legend> lettrages des bon olives</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Type Paiement" class=" control-label col-md-4 "> Type Paiement <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='type_paiement' id='type_paiement' value='{{ $row['type_paiement'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Detaille N" class=" control-label col-md-4 "> Detaille N <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='detaille_n' id='detaille_n' value='{{ $row['detaille_n'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Montant" class=" control-label col-md-4 "> Montant <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='montant' id='montant' value='{{ $row['montant'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Echeance" class=" control-label col-md-4 "> Echeance <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='echeance' id='echeance' value='{{ $row['echeance'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Cheque Traite N" class=" control-label col-md-4 "> Cheque Traite N <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='cheque_traite_n' id='cheque_traite_n' value='{{ $row['cheque_traite_n'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date Valorisation" class=" control-label col-md-4 "> Date Valorisation <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='date_valorisation' id='date_valorisation' value='{{ $row['date_valorisation'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Rib" class=" control-label col-md-4 "> Rib <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='rib' id='rib' value='{{ $row['rib'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Agence" class=" control-label col-md-4 "> Agence <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='agence' id='agence' value='{{ $row['agence'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Payeur" class=" control-label col-md-4 "> Payeur <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='payeur' id='payeur' value='{{ $row['payeur'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Validation Signiature" class=" control-label col-md-4 "> Validation Signiature <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='validation_signiature' id='validation_signiature' value='{{ $row['validation_signiature'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Valorisation" class=" control-label col-md-4 "> Valorisation <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='valorisation' id='valorisation' value='{{ $row['valorisation'] }}' 
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
			var removeUrl = '{{ url("lettragesdesbonolives/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop