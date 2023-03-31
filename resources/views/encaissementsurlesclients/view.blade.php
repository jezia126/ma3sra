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
						<a href="{{ url('encaissementsurlesclients?return='.$return) }}" class="tips btn btn-danger  btn-sm  " title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>		
						@if($access['is_add'] ==1)
				   		<a href="{{ url('encaissementsurlesclients/'.$id.'/edit?return='.$return) }}" class="tips btn btn-info btn-sm  " title="{{ __('core.btn_edit') }}"><i class="icon-note"></i></a>
						@endif
					</div>	
				</div>
				<div class="col-md-6 text-right">			
					<div class="btn-group">
				   		<a href="{{ ($prevnext['prev'] != '' ? url('encaissementsurlesclients/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-primary  btn-sm"><i class="fa fa-arrow-left"></i>  </a>	
						<a href="{{ ($prevnext['next'] != '' ? url('encaissementsurlesclients/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-primary btn-sm "> <i class="fa fa-arrow-right"></i>  </a>			
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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Client', (isset($fields['client']['language'])? $fields['client']['language'] : array())) }}</td>
						<td>{{ $row->client}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Solde', (isset($fields['solde']['language'])? $fields['solde']['language'] : array())) }}</td>
						<td>{{ $row->solde}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id Client', (isset($fields['id_client']['language'])? $fields['id_client']['language'] : array())) }}</td>
						<td>{{ $row->id_client}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Note', (isset($fields['note']['language'])? $fields['note']['language'] : array())) }}</td>
						<td>{{ $row->note}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Nombre Echeance', (isset($fields['nombre_echeance']['language'])? $fields['nombre_echeance']['language'] : array())) }}</td>
						<td>{{ $row->nombre_echeance}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Tranche', (isset($fields['tranche']['language'])? $fields['tranche']['language'] : array())) }}</td>
						<td>{{ $row->tranche}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Retenu A La Source', (isset($fields['retenu_a_la_source']['language'])? $fields['retenu_a_la_source']['language'] : array())) }}</td>
						<td>{{ $row->retenu_a_la_source}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Total Avant Retenu', (isset($fields['total_avant_retenu']['language'])? $fields['total_avant_retenu']['language'] : array())) }}</td>
						<td>{{ $row->total_avant_retenu}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Acompte', (isset($fields['acompte']['language'])? $fields['acompte']['language'] : array())) }}</td>
						<td>{{ $row->acompte}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Type Paiement', (isset($fields['type_paiement']['language'])? $fields['type_paiement']['language'] : array())) }}</td>
						<td>{{ $row->type_paiement}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Total Des Factures', (isset($fields['total_des_factures']['language'])? $fields['total_des_factures']['language'] : array())) }}</td>
						<td>{{ $row->total_des_factures}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Total Retenu A La Source', (isset($fields['total_retenu_a_la_source']['language'])? $fields['total_retenu_a_la_source']['language'] : array())) }}</td>
						<td>{{ $row->total_retenu_a_la_source}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('En Deduire', (isset($fields['en_deduire']['language'])? $fields['en_deduire']['language'] : array())) }}</td>
						<td>{{ $row->en_deduire}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Total Des Avoirs', (isset($fields['total_des_avoirs']['language'])? $fields['total_des_avoirs']['language'] : array())) }}</td>
						<td>{{ $row->total_des_avoirs}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Montant A Payer', (isset($fields['montant_a_payer']['language'])? $fields['montant_a_payer']['language'] : array())) }}</td>
						<td>{{ $row->montant_a_payer}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Premiere Echeance', (isset($fields['premiere_echeance']['language'])? $fields['premiere_echeance']['language'] : array())) }}</td>
						<td>{{ $row->premiere_echeance}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Prix', (isset($fields['prix']['language'])? $fields['prix']['language'] : array())) }}</td>
						<td>{{ $row->prix}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Charge Financiere %', (isset($fields['charge_financiere_%']['language'])? $fields['charge_financiere_%']['language'] : array())) }}</td>
						<td>{{ $row->charge_financiere_%}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Montant', (isset($fields['montant']['language'])? $fields['montant']['language'] : array())) }}</td>
						<td>{{ $row->montant}} </td>
						
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
