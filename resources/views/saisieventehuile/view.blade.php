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
						<a href="{{ url('saisieventehuile?return='.$return) }}" class="tips btn btn-danger  btn-sm  " title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>		
						@if($access['is_add'] ==1)
				   		<a href="{{ url('saisieventehuile/'.$id.'/edit?return='.$return) }}" class="tips btn btn-info btn-sm  " title="{{ __('core.btn_edit') }}"><i class="icon-note"></i></a>
						@endif
					</div>	
				</div>
				<div class="col-md-6 text-right">			
					<div class="btn-group">
				   		<a href="{{ ($prevnext['prev'] != '' ? url('saisieventehuile/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-primary  btn-sm"><i class="fa fa-arrow-left"></i>  </a>	
						<a href="{{ ($prevnext['next'] != '' ? url('saisieventehuile/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-primary btn-sm "> <i class="fa fa-arrow-right"></i>  </a>			
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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Code Citerne', (isset($fields['code_citerne']['language'])? $fields['code_citerne']['language'] : array())) }}</td>
						<td>{{ $row->code_citerne}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Raison Social', (isset($fields['Raison_social']['language'])? $fields['Raison_social']['language'] : array())) }}</td>
						<td>{{ $row->Raison_social}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Adresse', (isset($fields['adresse']['language'])? $fields['adresse']['language'] : array())) }}</td>
						<td>{{ $row->adresse}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Tel', (isset($fields['tel']['language'])? $fields['tel']['language'] : array())) }}</td>
						<td>{{ $row->tel}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Code Fiscal', (isset($fields['code_fiscal']['language'])? $fields['code_fiscal']['language'] : array())) }}</td>
						<td>{{ $row->code_fiscal}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Points De Ventes', (isset($fields['points_de_ventes']['language'])? $fields['points_de_ventes']['language'] : array())) }}</td>
						<td>{{ $row->points_de_ventes}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Nom', (isset($fields['nom']['language'])? $fields['nom']['language'] : array())) }}</td>
						<td>{{ $row->nom}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Adresse De Livraison', (isset($fields['adresse_de_livraison']['language'])? $fields['adresse_de_livraison']['language'] : array())) }}</td>
						<td>{{ $row->adresse_de_livraison}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Solde', (isset($fields['solde']['language'])? $fields['solde']['language'] : array())) }}</td>
						<td>{{ $row->solde}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Bon N', (isset($fields['bon_n']['language'])? $fields['bon_n']['language'] : array())) }}</td>
						<td>{{ $row->bon_n}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Date De Creation', (isset($fields['date_de_creation']['language'])? $fields['date_de_creation']['language'] : array())) }}</td>
						<td>{{ $row->date_de_creation}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Commande N', (isset($fields['commande_n']['language'])? $fields['commande_n']['language'] : array())) }}</td>
						<td>{{ $row->commande_n}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Date Commande', (isset($fields['date_commande']['language'])? $fields['date_commande']['language'] : array())) }}</td>
						<td>{{ $row->date_commande}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Date De Livraison', (isset($fields['date_de_livraison']['language'])? $fields['date_de_livraison']['language'] : array())) }}</td>
						<td>{{ $row->date_de_livraison}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Compte N', (isset($fields['compte_n']['language'])? $fields['compte_n']['language'] : array())) }}</td>
						<td>{{ $row->compte_n}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Facture N', (isset($fields['facture_n']['language'])? $fields['facture_n']['language'] : array())) }}</td>
						<td>{{ $row->facture_n}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Date', (isset($fields['date']['language'])? $fields['date']['language'] : array())) }}</td>
						<td>{{ $row->date}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Montant', (isset($fields['montant']['language'])? $fields['montant']['language'] : array())) }}</td>
						<td>{{ $row->montant}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Timbre Fisccale', (isset($fields['timbre_fisccale']['language'])? $fields['timbre_fisccale']['language'] : array())) }}</td>
						<td>{{ $row->timbre_fisccale}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Net A Payer', (isset($fields['net_a_payer']['language'])? $fields['net_a_payer']['language'] : array())) }}</td>
						<td>{{ $row->net_a_payer}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Frais Export', (isset($fields['frais_export']['language'])? $fields['frais_export']['language'] : array())) }}</td>
						<td>{{ $row->frais_export}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Frais Assuranse', (isset($fields['frais_assuranse']['language'])? $fields['frais_assuranse']['language'] : array())) }}</td>
						<td>{{ $row->frais_assuranse}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Net A Paye', (isset($fields['net_a_paye']['language'])? $fields['net_a_paye']['language'] : array())) }}</td>
						<td>{{ $row->net_a_paye}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Devis', (isset($fields['devis']['language'])? $fields['devis']['language'] : array())) }}</td>
						<td>{{ $row->devis}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Taux Change', (isset($fields['taux_change']['language'])? $fields['taux_change']['language'] : array())) }}</td>
						<td>{{ $row->taux_change}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Note Sur Vente', (isset($fields['note_sur_vente']['language'])? $fields['note_sur_vente']['language'] : array())) }}</td>
						<td>{{ $row->note_sur_vente}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Transporteur', (isset($fields['transporteur']['language'])? $fields['transporteur']['language'] : array())) }}</td>
						<td>{{ $row->transporteur}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Vehicule', (isset($fields['vehicule']['language'])? $fields['vehicule']['language'] : array())) }}</td>
						<td>{{ $row->vehicule}} </td>
						
					</tr>
				
				</tbody>	
			</table>   

		 	

		</div>
			
	</div>
</div>		
@stop
