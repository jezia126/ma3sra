@extends('layouts.app')

@section('content')
<div class="page-titles">
  <h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2>
</div>
<div class="card">
	<div class="card-body">


	{!! Form::open(array('url'=>'achat?return='.$return, 'class'=>'form-horizontal  validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
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
						<fieldset><legend> achat</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Code Fournisseur" class=" control-label col-md-4 "> Code Fournisseur <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='code_fournisseur' id='code_fournisseur' value='{{ $row['code_fournisseur'] }}' 
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
										<label for="Nom Et Prenom" class=" control-label col-md-4 "> Nom Et Prenom <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='nom_et_prenom' id='nom_et_prenom' value='{{ $row['nom_et_prenom'] }}' 
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
										<label for="Region Olive" class=" control-label col-md-4 "> Region Olive <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='region_olive' id='region_olive' value='{{ $row['region_olive'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Maturite" class=" control-label col-md-4 "> Maturite <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='maturite' id='maturite' value='{{ $row['maturite'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Nature Olive" class=" control-label col-md-4 "> Nature Olive <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='nature_olive' id='nature_olive' value='{{ $row['nature_olive'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Etat Sanitaire" class=" control-label col-md-4 "> Etat Sanitaire <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='etat_sanitaire' id='etat_sanitaire' value='{{ $row['etat_sanitaire'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Type Olive" class=" control-label col-md-4 "> Type Olive <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='type_olive' id='type_olive' value='{{ $row['type_olive'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Poids Charge" class=" control-label col-md-4 "> Poids Charge <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='poids_charge' id='poids_charge' value='{{ $row['poids_charge'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Poids Vide" class=" control-label col-md-4 "> Poids Vide <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='poids_vide' id='poids_vide' value='{{ $row['poids_vide'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Poids Net" class=" control-label col-md-4 "> Poids Net <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='poids_net' id='poids_net' value='{{ $row['poids_net'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Stockage Caisse N" class=" control-label col-md-4 "> Stockage Caisse N <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='stockage_caisse_n' id='stockage_caisse_n' value='{{ $row['stockage_caisse_n'] }}' 
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
			var removeUrl = '{{ url("achat/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop