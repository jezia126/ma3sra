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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Date', (isset($fields['date']['language'])? $fields['date']['language'] : array())) }}</td>
						<td>{{ $row->date}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Designiation', (isset($fields['designiation']['language'])? $fields['designiation']['language'] : array())) }}</td>
						<td>{{ $row->designiation}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Code', (isset($fields['code']['language'])? $fields['code']['language'] : array())) }}</td>
						<td>{{ $row->code}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Qte Achat', (isset($fields['qte_achat']['language'])? $fields['qte_achat']['language'] : array())) }}</td>
						<td>{{ $row->qte_achat}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Qte Reste A Stocke', (isset($fields['qte_reste_a_stocke']['language'])? $fields['qte_reste_a_stocke']['language'] : array())) }}</td>
						<td>{{ $row->qte_reste_a_stocke}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Reception N', (isset($fields['reception_n']['language'])? $fields['reception_n']['language'] : array())) }}</td>
						<td>{{ $row->reception_n}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Date Rec', (isset($fields['date_rec']['language'])? $fields['date_rec']['language'] : array())) }}</td>
						<td>{{ $row->date_rec}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Observation', (isset($fields['observation']['language'])? $fields['observation']['language'] : array())) }}</td>
						<td>{{ $row->observation}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Plombage N', (isset($fields['plombage_n']['language'])? $fields['plombage_n']['language'] : array())) }}</td>
						<td>{{ $row->plombage_n}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Quantite Stockee', (isset($fields['quantite_stockee']['language'])? $fields['quantite_stockee']['language'] : array())) }}</td>
						<td>{{ $row->quantite_stockee}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Code Citerne', (isset($fields['code_citerne']['language'])? $fields['code_citerne']['language'] : array())) }}</td>
						<td>{{ $row->code_citerne}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Lot De Production', (isset($fields['lot_de_production']['language'])? $fields['lot_de_production']['language'] : array())) }}</td>
						<td>{{ $row->lot_de_production}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	