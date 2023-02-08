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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id Machine', (isset($fields['id_machine']['language'])? $fields['id_machine']['language'] : array())) }}</td>
						<td>{{ $row->id_machine}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Type Machine', (isset($fields['type_machine']['language'])? $fields['type_machine']['language'] : array())) }}</td>
						<td>{{ $row->type_machine}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Type De Huile', (isset($fields['type_de_huile']['language'])? $fields['type_de_huile']['language'] : array())) }}</td>
						<td>{{ $row->type_de_huile}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Capacite De Broyage', (isset($fields['capacite_de_broyage']['language'])? $fields['capacite_de_broyage']['language'] : array())) }}</td>
						<td>{{ $row->capacite_de_broyage}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Puissance Electrique', (isset($fields['puissance_electrique']['language'])? $fields['puissance_electrique']['language'] : array())) }}</td>
						<td>{{ $row->puissance_electrique}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Vitesse De Rotation', (isset($fields['vitesse_de_rotation']['language'])? $fields['vitesse_de_rotation']['language'] : array())) }}</td>
						<td>{{ $row->vitesse_de_rotation}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Capacite De Pressage', (isset($fields['capacite_de_pressage']['language'])? $fields['capacite_de_pressage']['language'] : array())) }}</td>
						<td>{{ $row->capacite_de_pressage}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Pression De Pressage', (isset($fields['pression_de_pressage']['language'])? $fields['pression_de_pressage']['language'] : array())) }}</td>
						<td>{{ $row->pression_de_pressage}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Capacite De Broyage Dec', (isset($fields['capacite_de_broyage_dec']['language'])? $fields['capacite_de_broyage_dec']['language'] : array())) }}</td>
						<td>{{ $row->capacite_de_broyage_dec}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Puissance De Broyage', (isset($fields['puissance_de_broyage']['language'])? $fields['puissance_de_broyage']['language'] : array())) }}</td>
						<td>{{ $row->puissance_de_broyage}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Puissance Electrique Dec', (isset($fields['puissance_electrique_dec']['language'])? $fields['puissance_electrique_dec']['language'] : array())) }}</td>
						<td>{{ $row->puissance_electrique_dec}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Vitesse De Rotation Dec', (isset($fields['vitesse_de_rotation_dec']['language'])? $fields['vitesse_de_rotation_dec']['language'] : array())) }}</td>
						<td>{{ $row->vitesse_de_rotation_dec}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Capacite De Pressage Dec Dec', (isset($fields['capacite_de_pressage_dec_dec']['language'])? $fields['capacite_de_pressage_dec_dec']['language'] : array())) }}</td>
						<td>{{ $row->capacite_de_pressage_dec_dec}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Pression De Pressage Dec', (isset($fields['pression_de_pressage_dec']['language'])? $fields['pression_de_pressage_dec']['language'] : array())) }}</td>
						<td>{{ $row->pression_de_pressage_dec}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	