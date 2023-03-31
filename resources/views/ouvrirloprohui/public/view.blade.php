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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Lot De Production N', (isset($fields['lot_de_production_n']['language'])? $fields['lot_de_production_n']['language'] : array())) }}</td>
						<td>{{ $row->lot_de_production_n}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Citerne De Stockage', (isset($fields['citerne_de_stockage']['language'])? $fields['citerne_de_stockage']['language'] : array())) }}</td>
						<td>{{ $row->citerne_de_stockage}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Liste Des Citernes Disponibles', (isset($fields['liste_des_citernes_disponibles']['language'])? $fields['liste_des_citernes_disponibles']['language'] : array())) }}</td>
						<td>{{ $row->liste_des_citernes_disponibles}} </td>
						
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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Fermeture De Lot', (isset($fields['fermeture_de_lot']['language'])? $fields['fermeture_de_lot']['language'] : array())) }}</td>
						<td>{{ $row->fermeture_de_lot}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Visa De Vente', (isset($fields['visa_de_vente']['language'])? $fields['visa_de_vente']['language'] : array())) }}</td>
						<td>{{ $row->visa_de_vente}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Liberer Citerne', (isset($fields['liberer_citerne']['language'])? $fields['liberer_citerne']['language'] : array())) }}</td>
						<td>{{ $row->liberer_citerne}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Type Huile', (isset($fields['type_huile']['language'])? $fields['type_huile']['language'] : array())) }}</td>
						<td>{{ $row->type_huile}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Acidite', (isset($fields['acidite']['language'])? $fields['acidite']['language'] : array())) }}</td>
						<td>{{ $row->acidite}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Pyroxde', (isset($fields['pyroxde']['language'])? $fields['pyroxde']['language'] : array())) }}</td>
						<td>{{ $row->pyroxde}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('K232', (isset($fields['k232']['language'])? $fields['k232']['language'] : array())) }}</td>
						<td>{{ $row->k232}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Inferieur', (isset($fields['inferieur']['language'])? $fields['inferieur']['language'] : array())) }}</td>
						<td>{{ $row->inferieur}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Superieur', (isset($fields['superieur']['language'])? $fields['superieur']['language'] : array())) }}</td>
						<td>{{ $row->superieur}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	