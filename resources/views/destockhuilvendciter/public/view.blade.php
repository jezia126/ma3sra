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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Designation', (isset($fields['designation']['language'])? $fields['designation']['language'] : array())) }}</td>
						<td>{{ $row->designation}} </td>
						
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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Qte Stocke', (isset($fields['qte_stocke']['language'])? $fields['qte_stocke']['language'] : array())) }}</td>
						<td>{{ $row->qte_stocke}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Qte Reste A Stoc', (isset($fields['qte_reste_a_stoc']['language'])? $fields['qte_reste_a_stoc']['language'] : array())) }}</td>
						<td>{{ $row->qte_reste_a_stoc}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Sortie N', (isset($fields['sortie_n']['language'])? $fields['sortie_n']['language'] : array())) }}</td>
						<td>{{ $row->sortie_n}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Date', (isset($fields['date']['language'])? $fields['date']['language'] : array())) }}</td>
						<td>{{ $row->date}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Designationn', (isset($fields['designationn']['language'])? $fields['designationn']['language'] : array())) }}</td>
						<td>{{ $row->designationn}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Plomage N', (isset($fields['plomage_n']['language'])? $fields['plomage_n']['language'] : array())) }}</td>
						<td>{{ $row->plomage_n}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Quant Destock', (isset($fields['quant_destock']['language'])? $fields['quant_destock']['language'] : array())) }}</td>
						<td>{{ $row->quant_destock}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Code Citerne', (isset($fields['code_citerne']['language'])? $fields['code_citerne']['language'] : array())) }}</td>
						<td>{{ $row->code_citerne}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Lot De Prod', (isset($fields['lot_de_prod']['language'])? $fields['lot_de_prod']['language'] : array())) }}</td>
						<td>{{ $row->lot_de_prod}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	