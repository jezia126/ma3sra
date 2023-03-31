@extends('layouts.app')

@section('content')
<div class="page-titles">
  <h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2>
</div>
<div class="card">
	<div class="card-body">

		<div class="toolbar-nav">
			<div class="row">
				<div class="col-md-6 ">
					<div class="btn-group">
						<a href="{{ url('paiementdesfoursetsalries?return='.$return) }}" class="tips btn btn-danger  btn-sm  " title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>		
						@if($access['is_add'] ==1)
				   		<a href="{{ url('paiementdesfoursetsalries/'.$id.'/edit?return='.$return) }}" class="tips btn btn-info btn-sm  " title="{{ __('core.btn_edit') }}"><i class="icon-note"></i></a>
						@endif
					</div>	
				</div>
				<div class="col-md-6 text-right">			
					<div class="btn-group">
				   		<a href="{{ ($prevnext['prev'] != '' ? url('paiementdesfoursetsalries/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-primary  btn-sm"><i class="fa fa-arrow-left"></i>  </a>	
						<a href="{{ ($prevnext['next'] != '' ? url('paiementdesfoursetsalries/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-primary btn-sm "> <i class="fa fa-arrow-right"></i>  </a>			
					</div>			
				</div>	

				
				
			</div>
		</div>
	
		<div class="table-responsive">
			<table class="table  table-bordered " >
				<tbody>	
			
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Reglement N', (isset($fields['reglement_n']['language'])? $fields['reglement_n']['language'] : array())) }}</td>
						<td>{{ $row->reglement_n}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Date', (isset($fields['date']['language'])? $fields['date']['language'] : array())) }}</td>
						<td>{{ $row->date}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Titre', (isset($fields['titre']['language'])? $fields['titre']['language'] : array())) }}</td>
						<td>{{ $row->titre}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Tiers', (isset($fields['tiers']['language'])? $fields['tiers']['language'] : array())) }}</td>
						<td>{{ $row->tiers}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Note', (isset($fields['note']['language'])? $fields['note']['language'] : array())) }}</td>
						<td>{{ $row->note}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Sous Compte', (isset($fields['sous_compte']['language'])? $fields['sous_compte']['language'] : array())) }}</td>
						<td>{{ $row->sous_compte}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Compte Generale', (isset($fields['compte_generale']['language'])? $fields['compte_generale']['language'] : array())) }}</td>
						<td>{{ $row->compte_generale}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Total Retenue A La Source', (isset($fields['total_retenue_a_la_source']['language'])? $fields['total_retenue_a_la_source']['language'] : array())) }}</td>
						<td>{{ $row->total_retenue_a_la_source}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Total Charge Financiere', (isset($fields['total_charge_financiere']['language'])? $fields['total_charge_financiere']['language'] : array())) }}</td>
						<td>{{ $row->total_charge_financiere}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Compte Rattachee Comptable', (isset($fields['compte_rattachee_comptable']['language'])? $fields['compte_rattachee_comptable']['language'] : array())) }}</td>
						<td>{{ $row->compte_rattachee_comptable}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Total Des Factures', (isset($fields['total_des_factures']['language'])? $fields['total_des_factures']['language'] : array())) }}</td>
						<td>{{ $row->total_des_factures}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Montant A Payer', (isset($fields['montant_a_payer']['language'])? $fields['montant_a_payer']['language'] : array())) }}</td>
						<td>{{ $row->montant_a_payer}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Net A Payer', (isset($fields['net_a_payer']['language'])? $fields['net_a_payer']['language'] : array())) }}</td>
						<td>{{ $row->net_a_payer}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Solde', (isset($fields['solde']['language'])? $fields['solde']['language'] : array())) }}</td>
						<td>{{ $row->solde}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Total Des Avoirs', (isset($fields['total_des_avoirs']['language'])? $fields['total_des_avoirs']['language'] : array())) }}</td>
						<td>{{ $row->total_des_avoirs}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Charge Financiere %', (isset($fields['charge_financiere_%']['language'])? $fields['charge_financiere_%']['language'] : array())) }}</td>
						<td>{{ $row->charge_financiere_%}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Montant Reglement', (isset($fields['montant_reglement']['language'])? $fields['montant_reglement']['language'] : array())) }}</td>
						<td>{{ $row->montant_reglement}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Annee', (isset($fields['annee']['language'])? $fields['annee']['language'] : array())) }}</td>
						<td>{{ $row->annee}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Mois', (isset($fields['mois']['language'])? $fields['mois']['language'] : array())) }}</td>
						<td>{{ $row->mois}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Total Avant Retenu', (isset($fields['total_avant_retenu']['language'])? $fields['total_avant_retenu']['language'] : array())) }}</td>
						<td>{{ $row->total_avant_retenu}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Charge Financiere', (isset($fields['charge_financiere']['language'])? $fields['charge_financiere']['language'] : array())) }}</td>
						<td>{{ $row->charge_financiere}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Montant Difference', (isset($fields['montant_difference']['language'])? $fields['montant_difference']['language'] : array())) }}</td>
						<td>{{ $row->montant_difference}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Type De Paie', (isset($fields['type_de_paie']['language'])? $fields['type_de_paie']['language'] : array())) }}</td>
						<td>{{ $row->type_de_paie}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Facture N', (isset($fields['facture_n']['language'])? $fields['facture_n']['language'] : array())) }}</td>
						<td>{{ $row->facture_n}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Avoir N', (isset($fields['avoir_n']['language'])? $fields['avoir_n']['language'] : array())) }}</td>
						<td>{{ $row->avoir_n}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Reglementt N', (isset($fields['reglementt_n']['language'])? $fields['reglementt_n']['language'] : array())) }}</td>
						<td>{{ $row->reglementt_n}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Detaille N', (isset($fields['detaille_n']['language'])? $fields['detaille_n']['language'] : array())) }}</td>
						<td>{{ $row->detaille_n}} </td>
						
					</tr>
				
				</tbody>	
			</table>   

		 	

		</div>
			
	</div>
</div>		
@stop
