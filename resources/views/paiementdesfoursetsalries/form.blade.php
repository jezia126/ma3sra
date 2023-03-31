@extends('layouts.app')

@section('content')
<div class="page-titles">
  <h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2>
</div>
<div class="card">
	<div class="card-body">


	{!! Form::open(array('url'=>'paiementdesfoursetsalries?return='.$return, 'class'=>'form-horizontal  validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
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
						<fieldset><legend> paiement des fours et salries</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Reglement N" class=" control-label col-md-4 "> Reglement N <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='reglement_n' id='reglement_n' value='{{ $row['reglement_n'] }}' 
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
										<label for="Titre" class=" control-label col-md-4 "> Titre <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='titre' id='titre' value='{{ $row['titre'] }}' 
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
										<label for="Note" class=" control-label col-md-4 "> Note <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='note' id='note' value='{{ $row['note'] }}' 
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
										<label for="Compte Generale" class=" control-label col-md-4 "> Compte Generale <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='compte_generale' id='compte_generale' value='{{ $row['compte_generale'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Total Retenue A La Source" class=" control-label col-md-4 "> Total Retenue A La Source <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='total_retenue_a_la_source' id='total_retenue_a_la_source' value='{{ $row['total_retenue_a_la_source'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Total Charge Financiere" class=" control-label col-md-4 "> Total Charge Financiere <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='total_charge_financiere' id='total_charge_financiere' value='{{ $row['total_charge_financiere'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Compte Rattachee Comptable" class=" control-label col-md-4 "> Compte Rattachee Comptable <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='compte_rattachee_comptable' id='compte_rattachee_comptable' value='{{ $row['compte_rattachee_comptable'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Total Des Factures" class=" control-label col-md-4 "> Total Des Factures <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='total_des_factures' id='total_des_factures' value='{{ $row['total_des_factures'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Montant A Payer" class=" control-label col-md-4 "> Montant A Payer <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='montant_a_payer' id='montant_a_payer' value='{{ $row['montant_a_payer'] }}' 
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
										<label for="Solde" class=" control-label col-md-4 "> Solde <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='solde' id='solde' value='{{ $row['solde'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Total Des Avoirs" class=" control-label col-md-4 "> Total Des Avoirs <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='total_des_avoirs' id='total_des_avoirs' value='{{ $row['total_des_avoirs'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Charge Financiere %" class=" control-label col-md-4 "> Charge Financiere % <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='charge_financiere_%' id='charge_financiere_%' value='{{ $row['charge_financiere_%'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Montant Reglement" class=" control-label col-md-4 "> Montant Reglement <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='montant_reglement' id='montant_reglement' value='{{ $row['montant_reglement'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Annee" class=" control-label col-md-4 "> Annee <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='annee' id='annee' value='{{ $row['annee'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Mois" class=" control-label col-md-4 "> Mois <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='mois' id='mois' value='{{ $row['mois'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Total Avant Retenu" class=" control-label col-md-4 "> Total Avant Retenu <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='total_avant_retenu' id='total_avant_retenu' value='{{ $row['total_avant_retenu'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Charge Financiere" class=" control-label col-md-4 "> Charge Financiere <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='charge_financiere' id='charge_financiere' value='{{ $row['charge_financiere'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Montant Difference" class=" control-label col-md-4 "> Montant Difference <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='montant_difference' id='montant_difference' value='{{ $row['montant_difference'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Type De Paie" class=" control-label col-md-4 "> Type De Paie <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='type_de_paie' id='type_de_paie' value='{{ $row['type_de_paie'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Facture N" class=" control-label col-md-4 "> Facture N <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='facture_n' id='facture_n' value='{{ $row['facture_n'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Avoir N" class=" control-label col-md-4 "> Avoir N <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='avoir_n' id='avoir_n' value='{{ $row['avoir_n'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Reglementt N" class=" control-label col-md-4 "> Reglementt N <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='reglementt_n' id='reglementt_n' value='{{ $row['reglementt_n'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Detaille N" class=" control-label col-md-4 "> Detaille N <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='detaille_n' id='detaille_n' value='{{ $row['detaille_n'] }}' 
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
			var removeUrl = '{{ url("paiementdesfoursetsalries/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop