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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id Société', (isset($fields['id_société']['language'])? $fields['id_société']['language'] : array())) }}</td>
						<td>{{ $row->id_société}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Raison Social', (isset($fields['Raison_social']['language'])? $fields['Raison_social']['language'] : array())) }}</td>
						<td>{{ $row->Raison_social}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Annee Debut', (isset($fields['annee_debut']['language'])? $fields['annee_debut']['language'] : array())) }}</td>
						<td>{{ $row->annee_debut}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Annee Fin', (isset($fields['annee_fin']['language'])? $fields['annee_fin']['language'] : array())) }}</td>
						<td>{{ $row->annee_fin}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Note Sur Exercice', (isset($fields['note_sur_exercice']['language'])? $fields['note_sur_exercice']['language'] : array())) }}</td>
						<td>{{ $row->note_sur_exercice}} </td>
						
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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Compagne N', (isset($fields['compagne_n']['language'])? $fields['compagne_n']['language'] : array())) }}</td>
						<td>{{ $row->compagne_n}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Frais Par Kg Huile', (isset($fields['frais_par_kg_huile']['language'])? $fields['frais_par_kg_huile']['language'] : array())) }}</td>
						<td>{{ $row->frais_par_kg_huile}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Frais Par Kg Olive Trituration', (isset($fields['frais_par_kg_olive_trituration']['language'])? $fields['frais_par_kg_olive_trituration']['language'] : array())) }}</td>
						<td>{{ $row->frais_par_kg_olive_trituration}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Compteur Des Contrats', (isset($fields['Compteur_des_contrats']['language'])? $fields['Compteur_des_contrats']['language'] : array())) }}</td>
						<td>{{ $row->Compteur_des_contrats}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Abr Compagne', (isset($fields['abr_compagne']['language'])? $fields['abr_compagne']['language'] : array())) }}</td>
						<td>{{ $row->abr_compagne}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Wiba En Kg', (isset($fields['wiba_en_kg']['language'])? $fields['wiba_en_kg']['language'] : array())) }}</td>
						<td>{{ $row->wiba_en_kg}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Taux De Grignon Par Wiba', (isset($fields['taux_de_grignon_par_wiba']['language'])? $fields['taux_de_grignon_par_wiba']['language'] : array())) }}</td>
						<td>{{ $row->taux_de_grignon_par_wiba}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Kg Olivesh', (isset($fields['kg_olivesh']['language'])? $fields['kg_olivesh']['language'] : array())) }}</td>
						<td>{{ $row->kg_olivesh}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	