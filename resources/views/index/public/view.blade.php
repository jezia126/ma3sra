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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Trier Par', (isset($fields['trier_par']['language'])? $fields['trier_par']['language'] : array())) }}</td>
						<td>{{ $row->trier_par}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Bon De Reception Olive', (isset($fields['bon_de_reception_olive']['language'])? $fields['bon_de_reception_olive']['language'] : array())) }}</td>
						<td>{{ $row->bon_de_reception_olive}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Bon De Reception Olive 1', (isset($fields['bon_de_reception_olive_1']['language'])? $fields['bon_de_reception_olive_1']['language'] : array())) }}</td>
						<td>{{ $row->bon_de_reception_olive_1}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Bon De Reception Olive 2', (isset($fields['bon_de_reception_olive_2']['language'])? $fields['bon_de_reception_olive_2']['language'] : array())) }}</td>
						<td>{{ $row->bon_de_reception_olive_2}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Bon De Reception Services', (isset($fields['bon_de_reception_services']['language'])? $fields['bon_de_reception_services']['language'] : array())) }}</td>
						<td>{{ $row->bon_de_reception_services}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Aquisition', (isset($fields['aquisition']['language'])? $fields['aquisition']['language'] : array())) }}</td>
						<td>{{ $row->aquisition}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Bon De Reception Olive 3', (isset($fields['bon_de_reception_olive_3']['language'])? $fields['bon_de_reception_olive_3']['language'] : array())) }}</td>
						<td>{{ $row->bon_de_reception_olive_3}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Code Fournisseur Debut', (isset($fields['code_fournisseur_debut']['language'])? $fields['code_fournisseur_debut']['language'] : array())) }}</td>
						<td>{{ $row->code_fournisseur_debut}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Code Fin Fournisseur', (isset($fields['code_fin_fournisseur']['language'])? $fields['code_fin_fournisseur']['language'] : array())) }}</td>
						<td>{{ $row->code_fin_fournisseur}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Code Client Debut', (isset($fields['code_client_debut']['language'])? $fields['code_client_debut']['language'] : array())) }}</td>
						<td>{{ $row->code_client_debut}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Code Fin Client', (isset($fields['code_fin_client']['language'])? $fields['code_fin_client']['language'] : array())) }}</td>
						<td>{{ $row->code_fin_client}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Date Debut', (isset($fields['date_debut']['language'])? $fields['date_debut']['language'] : array())) }}</td>
						<td>{{ $row->date_debut}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Date Fin', (isset($fields['date_fin']['language'])? $fields['date_fin']['language'] : array())) }}</td>
						<td>{{ $row->date_fin}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Cache Imp', (isset($fields['cache_imp']['language'])? $fields['cache_imp']['language'] : array())) }}</td>
						<td>{{ $row->cache_imp}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Qte Olives Val Kg', (isset($fields['qte_olives_val_kg']['language'])? $fields['qte_olives_val_kg']['language'] : array())) }}</td>
						<td>{{ $row->qte_olives_val_kg}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Qte Huile Val Kg', (isset($fields['qte_huile_val_kg']['language'])? $fields['qte_huile_val_kg']['language'] : array())) }}</td>
						<td>{{ $row->qte_huile_val_kg}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Trituration %', (isset($fields['trituration_%']['language'])? $fields['trituration_%']['language'] : array())) }}</td>
						<td>{{ $row->trituration_%}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Prix Unit Kg Olive', (isset($fields['prix_unit_kg_olive']['language'])? $fields['prix_unit_kg_olive']['language'] : array())) }}</td>
						<td>{{ $row->prix_unit_kg_olive}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Prix Unit Kg Huile', (isset($fields['prix_unit_kg_huile']['language'])? $fields['prix_unit_kg_huile']['language'] : array())) }}</td>
						<td>{{ $row->prix_unit_kg_huile}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Cout Unit Kg Huile', (isset($fields['cout_unit_kg_huile']['language'])? $fields['cout_unit_kg_huile']['language'] : array())) }}</td>
						<td>{{ $row->cout_unit_kg_huile}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Montant Achat', (isset($fields['montant_achat']['language'])? $fields['montant_achat']['language'] : array())) }}</td>
						<td>{{ $row->montant_achat}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Cout Total Huile', (isset($fields['cout_total_huile']['language'])? $fields['cout_total_huile']['language'] : array())) }}</td>
						<td>{{ $row->cout_total_huile}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Huile Triture', (isset($fields['huile_triture']['language'])? $fields['huile_triture']['language'] : array())) }}</td>
						<td>{{ $row->huile_triture}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	