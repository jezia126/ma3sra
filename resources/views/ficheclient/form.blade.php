@extends('layouts.app')

@section('content')
<div class="page-titles">
  <h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2>
</div>
<div class="card">
	<div class="card-body">


	{!! Form::open(array('url'=>'ficheclient?return='.$return, 'class'=>'form-horizontal  validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
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
						<fieldset><legend> fiche client</legend>
				{!! Form::hidden('code_client', $row['code_client']) !!}					
									  <div class="form-group row  " >
										<label for="Raison Social" class=" control-label col-md-4 "> Raison Social <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='raison_social' id='raison_social' value='{{ $row['raison_social'] }}' 
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
										  <input  type='text' name='fax' id='fax' value='{{ $row['fax'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Adresse" class=" control-label col-md-4 "> Adresse <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='adresse' id='adresse' value='{{ $row['adresse'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Matricule Fiscale" class=" control-label col-md-4 "> Matricule Fiscale <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='matricule_fiscale' id='matricule_fiscale' value='{{ $row['matricule_fiscale'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Registre Rc" class=" control-label col-md-4 "> Registre Rc <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='registre_rc' id='registre_rc' value='{{ $row['registre_rc'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Adressee" class=" control-label col-md-4 "> Adressee <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='adressee' id='adressee' value='{{ $row['adressee'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Region" class=" control-label col-md-4 "> Region <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='region' id='region' value='{{ $row['region'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Delegation" class=" control-label col-md-4 "> Delegation <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='delegation' id='delegation' value='{{ $row['delegation'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Commercial" class=" control-label col-md-4 "> Commercial <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='commercial' id='commercial' value='{{ $row['commercial'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Localite" class=" control-label col-md-4 "> Localite <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='localite' id='localite' value='{{ $row['localite'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Code Postal" class=" control-label col-md-4 "> Code Postal <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='code_postal' id='code_postal' value='{{ $row['code_postal'] }}' 
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
										<label for="Rib" class=" control-label col-md-4 "> Rib <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='rib' id='rib' value='{{ $row['rib'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Cin" class=" control-label col-md-4 "> Cin <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='cin' id='cin' value='{{ $row['cin'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Delivre Le" class=" control-label col-md-4 "> Delivre Le <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  
				
					{!! Form::text('delivre_le', $row['delivre_le'],array('class'=>'form-control form-control-sm date')) !!} 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="A" class=" control-label col-md-4 "> A <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='a' id='a' value='{{ $row['a'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Tel Inter" class=" control-label col-md-4 "> Tel Inter <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='tel_inter' id='tel_inter' value='{{ $row['tel_inter'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Nom De Responsable" class=" control-label col-md-4 "> Nom De Responsable <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='nom_de_responsable' id='nom_de_responsable' value='{{ $row['nom_de_responsable'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Cin Resp" class=" control-label col-md-4 "> Cin Resp <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='cin_resp' id='cin_resp' value='{{ $row['cin_resp'] }}' 
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
			var removeUrl = '{{ url("ficheclient/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop