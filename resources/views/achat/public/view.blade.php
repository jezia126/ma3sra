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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Code Fournisseur', (isset($fields['code_fournisseur']['language'])? $fields['code_fournisseur']['language'] : array())) }}</td>
						<td>{{ $row->code_fournisseur}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Cin', (isset($fields['cin']['language'])? $fields['cin']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->cin,'cin','1:tb_tiers_crediteur:id:organisme') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Nom Et Prenom', (isset($fields['nom_et_prenom']['language'])? $fields['nom_et_prenom']['language'] : array())) }}</td>
						<td>{{ $row->nom_et_prenom}} </td>
						
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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Region Olive', (isset($fields['region_olive']['language'])? $fields['region_olive']['language'] : array())) }}</td>
						<td>{{ $row->region_olive}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Maturite', (isset($fields['maturite']['language'])? $fields['maturite']['language'] : array())) }}</td>
						<td>{{ $row->maturite}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Nature Olive', (isset($fields['nature_olive']['language'])? $fields['nature_olive']['language'] : array())) }}</td>
						<td>{{ $row->nature_olive}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Etat Sanitaire', (isset($fields['etat_sanitaire']['language'])? $fields['etat_sanitaire']['language'] : array())) }}</td>
						<td>{{ $row->etat_sanitaire}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Type Olive', (isset($fields['type_olive']['language'])? $fields['type_olive']['language'] : array())) }}</td>
						<td>{{ $row->type_olive}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Poids Charge', (isset($fields['poids_charge']['language'])? $fields['poids_charge']['language'] : array())) }}</td>
						<td>{{ $row->poids_charge}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Poids Vide', (isset($fields['poids_vide']['language'])? $fields['poids_vide']['language'] : array())) }}</td>
						<td>{{ $row->poids_vide}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Poids Net', (isset($fields['poids_net']['language'])? $fields['poids_net']['language'] : array())) }}</td>
						<td>{{ $row->poids_net}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Stockage Caisse N', (isset($fields['stockage_caisse_n']['language'])? $fields['stockage_caisse_n']['language'] : array())) }}</td>
						<td>{{ $row->stockage_caisse_n}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	