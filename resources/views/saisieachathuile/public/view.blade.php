<div class="container" class="pt-3 pb-3">
    <div class="row m-b-lg animated fadeInDown delayp1 text-center">
        <h3> {{ $pageTitle }} <small> {{ $pageNote }} </small></h3>
        <hr />       
    </div>
</div>
<div class="m-t">
	<div class="table-container" > 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
			
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Document', (isset($fields['document']['language'])? $fields['document']['language'] : array())) }}</td>
						<td>{{ $row->document}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Date', (isset($fields['date']['language'])? $fields['date']['language'] : array())) }}</td>
						<td>{{ $row->date}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Code Tier', (isset($fields['code_tier']['language'])? $fields['code_tier']['language'] : array())) }}</td>
						<td>{{ $row->code_tier}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Titre Tier', (isset($fields['titre_tier']['language'])? $fields['titre_tier']['language'] : array())) }}</td>
						<td>{{ $row->titre_tier}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Sous Compte', (isset($fields['sous_compte']['language'])? $fields['sous_compte']['language'] : array())) }}</td>
						<td>{{ $row->sous_compte}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Titre Sous Compte', (isset($fields['titre_sous_compte']['language'])? $fields['titre_sous_compte']['language'] : array())) }}</td>
						<td>{{ $row->titre_sous_compte}} </td>
						
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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Fax', (isset($fields['fax']['language'])? $fields['fax']['language'] : array())) }}</td>
						<td>{{ $row->fax}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Matricule Fiscale', (isset($fields['matricule_fiscale']['language'])? $fields['matricule_fiscale']['language'] : array())) }}</td>
						<td>{{ $row->matricule_fiscale}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Facture Contrat N', (isset($fields['facture_contrat_n']['language'])? $fields['facture_contrat_n']['language'] : array())) }}</td>
						<td>{{ $row->facture_contrat_n}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Montant Facture', (isset($fields['montant_facture']['language'])? $fields['montant_facture']['language'] : array())) }}</td>
						<td>{{ $row->montant_facture}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Montant Timbre', (isset($fields['montant_timbre']['language'])? $fields['montant_timbre']['language'] : array())) }}</td>
						<td>{{ $row->montant_timbre}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Net A Payer', (isset($fields['net_a_payer']['language'])? $fields['net_a_payer']['language'] : array())) }}</td>
						<td>{{ $row->net_a_payer}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Solde Tier', (isset($fields['solde_tier']['language'])? $fields['solde_tier']['language'] : array())) }}</td>
						<td>{{ $row->solde_tier}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	