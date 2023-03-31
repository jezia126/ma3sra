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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Type Paiement', (isset($fields['type_paiement']['language'])? $fields['type_paiement']['language'] : array())) }}</td>
						<td>{{ $row->type_paiement}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Montant', (isset($fields['montant']['language'])? $fields['montant']['language'] : array())) }}</td>
						<td>{{ $row->montant}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Validation Signature', (isset($fields['validation_signature']['language'])? $fields['validation_signature']['language'] : array())) }}</td>
						<td>{{ $row->validation_signature}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Valorisation', (isset($fields['valorisation']['language'])? $fields['valorisation']['language'] : array())) }}</td>
						<td>{{ $row->valorisation}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Echeance', (isset($fields['echeance']['language'])? $fields['echeance']['language'] : array())) }}</td>
						<td>{{ $row->echeance}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Cheque Traite N', (isset($fields['cheque_traite_n']['language'])? $fields['cheque_traite_n']['language'] : array())) }}</td>
						<td>{{ $row->cheque_traite_n}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Date Valorisation', (isset($fields['date_valorisation']['language'])? $fields['date_valorisation']['language'] : array())) }}</td>
						<td>{{ $row->date_valorisation}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Detaille Reglement N', (isset($fields['detaille_reglement_n']['language'])? $fields['detaille_reglement_n']['language'] : array())) }}</td>
						<td>{{ $row->detaille_reglement_n}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	