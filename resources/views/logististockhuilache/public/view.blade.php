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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Du', (isset($fields['du']['language'])? $fields['du']['language'] : array())) }}</td>
						<td>{{ $row->du}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Au', (isset($fields['au']['language'])? $fields['au']['language'] : array())) }}</td>
						<td>{{ $row->au}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Date Activee', (isset($fields['date_activee']['language'])? $fields['date_activee']['language'] : array())) }}</td>
						<td>{{ $row->date_activee}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Achat Matiere Premieres', (isset($fields['achat_matiere_premieres']['language'])? $fields['achat_matiere_premieres']['language'] : array())) }}</td>
						<td>{{ $row->achat_matiere_premieres}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Logistique', (isset($fields['logistique']['language'])? $fields['logistique']['language'] : array())) }}</td>
						<td>{{ $row->logistique}} </td>
						
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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Titre De Sous Compte', (isset($fields['titre_de_sous_compte']['language'])? $fields['titre_de_sous_compte']['language'] : array())) }}</td>
						<td>{{ $row->titre_de_sous_compte}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	