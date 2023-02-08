@extends('layouts.app')

@section('content')
<div class="page-titles">
  <h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2>
</div>
<div class="card">
	<div class="card-body">


	{!! Form::open(array('url'=>'societes?return='.$return, 'class'=>'form-horizontal  validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
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
		<div class="col-md-6">
						<fieldset><legend> societes</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Adresse" class=" control-label col-md-4 "> Adresse <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='adresse' id='adresse' value='{{ $row['adresse'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Tel" class=" control-label col-md-4 "> Tel <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='tel' id='tel' value='{{ $row['tel'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Fax" class=" control-label col-md-4 "> Fax <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <textarea name='Fax' rows='5' id='Fax' class='form-control form-control-sm '  
				         required  >{{ $row['Fax'] }}</textarea> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Email" class=" control-label col-md-4 "> Email <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <textarea name='Email' rows='5' id='Email' class='form-control form-control-sm '  
				         required  >{{ $row['Email'] }}</textarea> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Site Web" class=" control-label col-md-4 "> Site Web <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <textarea name='site_web' rows='5' id='site_web' class='form-control form-control-sm '  
				         required  >{{ $row['site_web'] }}</textarea> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Logo" class=" control-label col-md-4 "> Logo <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="logo" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="logo-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["logo"],"/uploads/") !!}
						</div>
					 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Matricule Fiscale" class=" control-label col-md-4 "> Matricule Fiscale <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <textarea name='matricule_fiscale' rows='5' id='matricule_fiscale' class='form-control form-control-sm '  
				         required  >{{ $row['matricule_fiscale'] }}</textarea> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Registre Commercial" class=" control-label col-md-4 "> Registre Commercial <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <textarea name='registre_commercial' rows='5' id='registre_commercial' class='form-control form-control-sm '  
				         required  >{{ $row['registre_commercial'] }}</textarea> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Capital" class=" control-label col-md-4 "> Capital <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <textarea name='capital' rows='5' id='capital' class='form-control form-control-sm '  
				         required  >{{ $row['capital'] }}</textarea> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Banque" class=" control-label col-md-4 "> Banque <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <textarea name='banque' rows='5' id='banque' class='form-control form-control-sm '  
				         required  >{{ $row['banque'] }}</textarea> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Adresse Banque" class=" control-label col-md-4 "> Adresse Banque <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <textarea name='adresse_banque' rows='5' id='adresse_banque' class='form-control form-control-sm '  
				         required  >{{ $row['adresse_banque'] }}</textarea> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Rib" class=" control-label col-md-4 "> Rib <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <textarea name='rib' rows='5' id='rib' class='form-control form-control-sm '  
				         required  >{{ $row['rib'] }}</textarea> 
										 </div> 
										 
									  </div> </fieldset></div><div class="col-md-6">
						<fieldset><legend> </legend>
									
									  <div class="form-group row  " >
										<label for="Raison Social" class=" control-label col-md-4 "> Raison Social <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='raison_social' id='raison_social' value='{{ $row['raison_social'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Ville" class=" control-label col-md-4 "> Ville <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='ville' id='ville' value='{{ $row['ville'] }}' 
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
			var removeUrl = '{{ url("societes/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop