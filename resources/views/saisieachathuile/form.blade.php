@extends('layouts.app')

@section('content')
<div class="page-titles">
  <h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2>
</div>
<div class="card">
	<div class="card-body">


	{!! Form::open(array('url'=>'saisieachathuile?return='.$return, 'class'=>'form-horizontal  validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
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
						<fieldset><legend> saisie_achat_huile</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Document" class=" control-label col-md-4 "> Document <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='document' id='document' value='{{ $row['document'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date" class=" control-label col-md-4 "> Date <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='date' id='date' value='{{ $row['date'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Code Tier" class=" control-label col-md-4 "> Code Tier <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='code_tier' id='code_tier' value='{{ $row['code_tier'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Titre Tier" class=" control-label col-md-4 "> Titre Tier <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='titre_tier' id='titre_tier' value='{{ $row['titre_tier'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Sous Compte" class=" control-label col-md-4 "> Sous Compte <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='sous_compte' id='sous_compte' value='{{ $row['sous_compte'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Titre Sous Compte" class=" control-label col-md-4 "> Titre Sous Compte <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='titre_sous_compte' id='titre_sous_compte' value='{{ $row['titre_sous_compte'] }}' 
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
										<label for="Matricule Fiscale" class=" control-label col-md-4 "> Matricule Fiscale <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='matricule_fiscale' id='matricule_fiscale' value='{{ $row['matricule_fiscale'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Facture Contrat N" class=" control-label col-md-4 "> Facture Contrat N <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='facture_contrat_n' id='facture_contrat_n' value='{{ $row['facture_contrat_n'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Montant Facture" class=" control-label col-md-4 "> Montant Facture <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='montant_facture' id='montant_facture' value='{{ $row['montant_facture'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Montant Timbre" class=" control-label col-md-4 "> Montant Timbre <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='montant_timbre' id='montant_timbre' value='{{ $row['montant_timbre'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Net A Payer" class=" control-label col-md-4 "> Net A Payer <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='net_a_payer' id='net_a_payer' value='{{ $row['net_a_payer'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Solde Tier" class=" control-label col-md-4 "> Solde Tier <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='solde_tier' id='solde_tier' value='{{ $row['solde_tier'] }}' 
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
			var removeUrl = '{{ url("saisieachathuile/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop