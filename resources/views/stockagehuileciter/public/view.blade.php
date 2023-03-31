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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Lot De Trituration N', (isset($fields['lot_de_trituration_n']['language'])? $fields['lot_de_trituration_n']['language'] : array())) }}</td>
						<td>{{ $row->lot_de_trituration_n}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Operation', (isset($fields['operation']['language'])? $fields['operation']['language'] : array())) }}</td>
						<td>{{ $row->operation}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Date Creation De Lot', (isset($fields['date_creation_de_lot']['language'])? $fields['date_creation_de_lot']['language'] : array())) }}</td>
						<td>{{ $row->date_creation_de_lot}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Quantite De Huile', (isset($fields['quantite_de_huile']['language'])? $fields['quantite_de_huile']['language'] : array())) }}</td>
						<td>{{ $row->quantite_de_huile}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Acidite', (isset($fields['acidite']['language'])? $fields['acidite']['language'] : array())) }}</td>
						<td>{{ $row->acidite}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Type De Machine', (isset($fields['type_de_machine']['language'])? $fields['type_de_machine']['language'] : array())) }}</td>
						<td>{{ $row->type_de_machine}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Taux De Tritution', (isset($fields['taux_de_tritution']['language'])? $fields['taux_de_tritution']['language'] : array())) }}</td>
						<td>{{ $row->taux_de_tritution}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	