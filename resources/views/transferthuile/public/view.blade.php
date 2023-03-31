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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Coupage N', (isset($fields['coupage_n']['language'])? $fields['coupage_n']['language'] : array())) }}</td>
						<td>{{ $row->coupage_n}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Lot Recepteur', (isset($fields['lot_recepteur']['language'])? $fields['lot_recepteur']['language'] : array())) }}</td>
						<td>{{ $row->lot_recepteur}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Date Operation', (isset($fields['date_operation']['language'])? $fields['date_operation']['language'] : array())) }}</td>
						<td>{{ $row->date_operation}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Lot Donneur', (isset($fields['lot_donneur']['language'])? $fields['lot_donneur']['language'] : array())) }}</td>
						<td>{{ $row->lot_donneur}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('La Quantite De Huile Transferer', (isset($fields['la_quantite_de_huile_transferer']['language'])? $fields['la_quantite_de_huile_transferer']['language'] : array())) }}</td>
						<td>{{ $row->la_quantite_de_huile_transferer}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Cout Unitaire Kg', (isset($fields['cout_unitaire_kg']['language'])? $fields['cout_unitaire_kg']['language'] : array())) }}</td>
						<td>{{ $row->cout_unitaire_kg}} </td>
						
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
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	