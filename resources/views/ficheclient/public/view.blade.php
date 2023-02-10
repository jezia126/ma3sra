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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Code Client', (isset($fields['code_client']['language'])? $fields['code_client']['language'] : array())) }}</td>
						<td>{{ $row->code_client}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Raison Social', (isset($fields['raison_social']['language'])? $fields['raison_social']['language'] : array())) }}</td>
						<td>{{ $row->raison_social}} </td>
						
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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Adresse', (isset($fields['adresse']['language'])? $fields['adresse']['language'] : array())) }}</td>
						<td>{{ $row->adresse}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Matricule Fiscale', (isset($fields['matricule_fiscale']['language'])? $fields['matricule_fiscale']['language'] : array())) }}</td>
						<td>{{ $row->matricule_fiscale}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Registre Rc', (isset($fields['registre_rc']['language'])? $fields['registre_rc']['language'] : array())) }}</td>
						<td>{{ $row->registre_rc}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Adressee', (isset($fields['adressee']['language'])? $fields['adressee']['language'] : array())) }}</td>
						<td>{{ $row->adressee}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Region', (isset($fields['region']['language'])? $fields['region']['language'] : array())) }}</td>
						<td>{{ $row->region}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Delegation', (isset($fields['delegation']['language'])? $fields['delegation']['language'] : array())) }}</td>
						<td>{{ $row->delegation}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Commercial', (isset($fields['commercial']['language'])? $fields['commercial']['language'] : array())) }}</td>
						<td>{{ $row->commercial}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Localite', (isset($fields['localite']['language'])? $fields['localite']['language'] : array())) }}</td>
						<td>{{ $row->localite}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Code Postal', (isset($fields['code_postal']['language'])? $fields['code_postal']['language'] : array())) }}</td>
						<td>{{ $row->code_postal}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Agence', (isset($fields['agence']['language'])? $fields['agence']['language'] : array())) }}</td>
						<td>{{ $row->agence}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Rib', (isset($fields['rib']['language'])? $fields['rib']['language'] : array())) }}</td>
						<td>{{ $row->rib}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Cin', (isset($fields['cin']['language'])? $fields['cin']['language'] : array())) }}</td>
						<td>{{ $row->cin}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Delivre Le', (isset($fields['delivre_le']['language'])? $fields['delivre_le']['language'] : array())) }}</td>
						<td>{{ $row->delivre_le}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('A', (isset($fields['a']['language'])? $fields['a']['language'] : array())) }}</td>
						<td>{{ $row->a}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Tel Inter', (isset($fields['tel_inter']['language'])? $fields['tel_inter']['language'] : array())) }}</td>
						<td>{{ $row->tel_inter}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Nom De Responsable', (isset($fields['nom_de_responsable']['language'])? $fields['nom_de_responsable']['language'] : array())) }}</td>
						<td>{{ $row->nom_de_responsable}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Cin Resp', (isset($fields['cin_resp']['language'])? $fields['cin_resp']['language'] : array())) }}</td>
						<td>{{ $row->cin_resp}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	