@extends('layouts.app')

@section('content')
<div class="page-titles">
  <h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2>
</div>
<div class="card">
	<div class="card-body">


	{!! Form::open(array('url'=>'societe?return='.$return, 'class'=>'form-horizontal  validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
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
						<fieldset><legend> societe</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Raison Social" class=" control-label col-md-4 "> Raison Social </label>
										<div class="col-md-8">
										  <input  type='text' name='raison_social' id='raison_social' value='{{ $row['raison_social'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Adresse" class=" control-label col-md-4 "> Adresse </label>
										<div class="col-md-8">
										  <input  type='text' name='adresse' id='adresse' value='{{ $row['adresse'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Ville" class=" control-label col-md-4 "> Ville </label>
										<div class="col-md-8">
										  <input  type='text' name='ville' id='ville' value='{{ $row['ville'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Tel" class=" control-label col-md-4 "> Tel </label>
										<div class="col-md-8">
										  <input  type='text' name='tel' id='tel' value='{{ $row['tel'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Fax" class=" control-label col-md-4 "> Fax </label>
										<div class="col-md-8">
										  <input  type='text' name='Fax' id='Fax' value='{{ $row['Fax'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Email" class=" control-label col-md-4 "> Email </label>
										<div class="col-md-8">
										  <input  type='text' name='Email' id='Email' value='{{ $row['Email'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Site Web" class=" control-label col-md-4 "> Site Web </label>
										<div class="col-md-8">
										  <input  type='text' name='site_web' id='site_web' value='{{ $row['site_web'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Logo" class=" control-label col-md-4 "> Logo </label>
										<div class="col-md-8">
										  <textarea name='logo' rows='5' id='logo' class='form-control form-control-sm '  
				           >{{ $row['logo'] }}</textarea> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Matricule Fiscale" class=" control-label col-md-4 "> Matricule Fiscale </label>
										<div class="col-md-8">
										  <input  type='text' name='matricule_fiscale' id='matricule_fiscale' value='{{ $row['matricule_fiscale'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Registre Commercial" class=" control-label col-md-4 "> Registre Commercial </label>
										<div class="col-md-8">
										  <input  type='text' name='registre_commercial' id='registre_commercial' value='{{ $row['registre_commercial'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Capital" class=" control-label col-md-4 "> Capital </label>
										<div class="col-md-8">
										  <input  type='text' name='capital' id='capital' value='{{ $row['capital'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Banque" class=" control-label col-md-4 "> Banque </label>
										<div class="col-md-8">
										  <input  type='text' name='banque' id='banque' value='{{ $row['banque'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Adresse Banque" class=" control-label col-md-4 "> Adresse Banque </label>
										<div class="col-md-8">
										  <input  type='text' name='adresse_banque' id='adresse_banque' value='{{ $row['adresse_banque'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Rib" class=" control-label col-md-4 "> Rib </label>
										<div class="col-md-8">
										  <input  type='text' name='rib' id='rib' value='{{ $row['rib'] }}' 
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
			var removeUrl = '{{ url("societe/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop