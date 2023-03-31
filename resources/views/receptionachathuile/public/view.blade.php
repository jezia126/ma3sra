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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Bon Achat N', (isset($fields['bon_achat_n']['language'])? $fields['bon_achat_n']['language'] : array())) }}</td>
						<td>{{ $row->bon_achat_n}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Fournisseur', (isset($fields['fournisseur']['language'])? $fields['fournisseur']['language'] : array())) }}</td>
						<td>{{ $row->fournisseur}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Date', (isset($fields['date']['language'])? $fields['date']['language'] : array())) }}</td>
						<td>{{ $row->date}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Sous Compte', (isset($fields['sous_compte']['language'])? $fields['sous_compte']['language'] : array())) }}</td>
						<td>{{ $row->sous_compte}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Code Mp', (isset($fields['code_mp']['language'])? $fields['code_mp']['language'] : array())) }}</td>
						<td>{{ $row->code_mp}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Designiation', (isset($fields['designiation']['language'])? $fields['designiation']['language'] : array())) }}</td>
						<td>{{ $row->designiation}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Quantite Achete', (isset($fields['quantite_achete']['language'])? $fields['quantite_achete']['language'] : array())) }}</td>
						<td>{{ $row->quantite_achete}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	