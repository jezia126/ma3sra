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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Lot De Stockage Olive N', (isset($fields['lot_de_stockage_olive_n']['language'])? $fields['lot_de_stockage_olive_n']['language'] : array())) }}</td>
						<td>{{ $row->lot_de_stockage_olive_n}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Lot Saturation', (isset($fields['lot_saturation']['language'])? $fields['lot_saturation']['language'] : array())) }}</td>
						<td>{{ $row->lot_saturation}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Lot Trituration', (isset($fields['lot_trituration']['language'])? $fields['lot_trituration']['language'] : array())) }}</td>
						<td>{{ $row->lot_trituration}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Date Stockage', (isset($fields['date_stockage']['language'])? $fields['date_stockage']['language'] : array())) }}</td>
						<td>{{ $row->date_stockage}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Date Execution', (isset($fields['date_execution']['language'])? $fields['date_execution']['language'] : array())) }}</td>
						<td>{{ $row->date_execution}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Date De Fin Execution', (isset($fields['date_de_fin_execution']['language'])? $fields['date_de_fin_execution']['language'] : array())) }}</td>
						<td>{{ $row->date_de_fin_execution}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Tiers', (isset($fields['tiers']['language'])? $fields['tiers']['language'] : array())) }}</td>
						<td>{{ $row->tiers}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Nombre Reception', (isset($fields['nombre_reception']['language'])? $fields['nombre_reception']['language'] : array())) }}</td>
						<td>{{ $row->nombre_reception}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Nombre Caisse', (isset($fields['nombre_caisse']['language'])? $fields['nombre_caisse']['language'] : array())) }}</td>
						<td>{{ $row->nombre_caisse}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Operation', (isset($fields['operation']['language'])? $fields['operation']['language'] : array())) }}</td>
						<td>{{ $row->operation}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Type De Huile', (isset($fields['type_de_huile']['language'])? $fields['type_de_huile']['language'] : array())) }}</td>
						<td>{{ $row->type_de_huile}} </td>
						
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