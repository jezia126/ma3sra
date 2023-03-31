@extends('layouts.app')

@section('content')
<div class="page-titles">
  <h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2>
</div>
<div class="card">
	<div class="card-body">


	{!! Form::open(array('url'=>'encaissementsurlesclients?return='.$return, 'class'=>'form-horizontal  validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
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
						<fieldset><legend> encaissement sur les clients</legend>
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
										<label for="Client" class=" control-label col-md-4 "> Client <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='client' id='client' value='{{ $row['client'] }}' 
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
										<label for="Id Client" class=" control-label col-md-4 "> Id Client <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='id_client' id='id_client' value='{{ $row['id_client'] }}' 
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
										<label for="Nombre Echeance" class=" control-label col-md-4 "> Nombre Echeance <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='nombre_echeance' id='nombre_echeance' value='{{ $row['nombre_echeance'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Tranche" class=" control-label col-md-4 "> Tranche <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='tranche' id='tranche' value='{{ $row['tranche'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Retenu A La Source" class=" control-label col-md-4 "> Retenu A La Source <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='retenu_a_la_source' id='retenu_a_la_source' value='{{ $row['retenu_a_la_source'] }}' 
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
										<label for="Acompte" class=" control-label col-md-4 "> Acompte <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='acompte' id='acompte' value='{{ $row['acompte'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Type Paiement" class=" control-label col-md-4 "> Type Paiement <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='type_paiement' id='type_paiement' value='{{ $row['type_paiement'] }}' 
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
										<label for="Total Retenu A La Source" class=" control-label col-md-4 "> Total Retenu A La Source <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='total_retenu_a_la_source' id='total_retenu_a_la_source' value='{{ $row['total_retenu_a_la_source'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="En Deduire" class=" control-label col-md-4 "> En Deduire <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='en_deduire' id='en_deduire' value='{{ $row['en_deduire'] }}' 
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
										<label for="Montant A Payer" class=" control-label col-md-4 "> Montant A Payer <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='montant_a_payer' id='montant_a_payer' value='{{ $row['montant_a_payer'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Premiere Echeance" class=" control-label col-md-4 "> Premiere Echeance </label>
										<div class="col-md-8">
										  <textarea name='premiere_echeance' rows='5' id='premiere_echeance' class='form-control form-control-sm '  
				           >{{ $row['premiere_echeance'] }}</textarea> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Prix" class=" control-label col-md-4 "> Prix <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='prix' id='prix' value='{{ $row['prix'] }}' 
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
										<label for="Montant" class=" control-label col-md-4 "> Montant <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='montant' id='montant' value='{{ $row['montant'] }}' 
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
			var removeUrl = '{{ url("encaissementsurlesclients/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop