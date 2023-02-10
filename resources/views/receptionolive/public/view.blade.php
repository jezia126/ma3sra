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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Bon De Reception', (isset($fields['bon_de_reception']['language'])? $fields['bon_de_reception']['language'] : array())) }}</td>
						<td>{{ $row->bon_de_reception}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Date', (isset($fields['date']['language'])? $fields['date']['language'] : array())) }}</td>
						<td>{{ $row->date}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Date De Tracabilite', (isset($fields['date_de_tracabilite']['language'])? $fields['date_de_tracabilite']['language'] : array())) }}</td>
						<td>{{ $row->date_de_tracabilite}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Operation', (isset($fields['operation']['language'])? $fields['operation']['language'] : array())) }}</td>
						<td>{{ $row->operation}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Type De Huile', (isset($fields['type_de_huile']['language'])? $fields['type_de_huile']['language'] : array())) }}</td>
						<td>{{ $row->type_de_huile}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Maturite', (isset($fields['maturite']['language'])? $fields['maturite']['language'] : array())) }}</td>
						<td>{{ $row->maturite}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Etat Sanitaire Olive', (isset($fields['etat_sanitaire_olive']['language'])? $fields['etat_sanitaire_olive']['language'] : array())) }}</td>
						<td>{{ $row->etat_sanitaire_olive}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Code Fournisseur', (isset($fields['code_fournisseur']['language'])? $fields['code_fournisseur']['language'] : array())) }}</td>
						<td>{{ $row->code_fournisseur}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Fournisseur', (isset($fields['fournisseur']['language'])? $fields['fournisseur']['language'] : array())) }}</td>
						<td>{{ $row->fournisseur}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Sous Compte', (isset($fields['sous_compte']['language'])? $fields['sous_compte']['language'] : array())) }}</td>
						<td>{{ $row->sous_compte}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Titre De Compte', (isset($fields['titre_de_compte']['language'])? $fields['titre_de_compte']['language'] : array())) }}</td>
						<td>{{ $row->titre_de_compte}} </td>
						
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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Cin', (isset($fields['cin']['language'])? $fields['cin']['language'] : array())) }}</td>
						<td>{{ $row->cin}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Code Client', (isset($fields['code_client']['language'])? $fields['code_client']['language'] : array())) }}</td>
						<td>{{ $row->code_client}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Client', (isset($fields['client']['language'])? $fields['client']['language'] : array())) }}</td>
						<td>{{ $row->client}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Adresse Client', (isset($fields['adresse_client']['language'])? $fields['adresse_client']['language'] : array())) }}</td>
						<td>{{ $row->adresse_client}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Tel Client', (isset($fields['tel_client']['language'])? $fields['tel_client']['language'] : array())) }}</td>
						<td>{{ $row->tel_client}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Cin Client', (isset($fields['cin_client']['language'])? $fields['cin_client']['language'] : array())) }}</td>
						<td>{{ $row->cin_client}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	