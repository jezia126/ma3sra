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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('M Id', (isset($fields['m_id']['language'])? $fields['m_id']['language'] : array())) }}</td>
						<td>{{ $row->m_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Lot N', (isset($fields['lot_n']['language'])? $fields['lot_n']['language'] : array())) }}</td>
						<td>{{ $row->lot_n}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Date De Stockage', (isset($fields['date_de_stockage']['language'])? $fields['date_de_stockage']['language'] : array())) }}</td>
						<td>{{ $row->date_de_stockage}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Nombre Reception', (isset($fields['nombre_reception']['language'])? $fields['nombre_reception']['language'] : array())) }}</td>
						<td>{{ $row->nombre_reception}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Tiers', (isset($fields['tiers']['language'])? $fields['tiers']['language'] : array())) }}</td>
						<td>{{ $row->tiers}} </td>
						
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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Type D Huile', (isset($fields['type_d_huile']['language'])? $fields['type_d_huile']['language'] : array())) }}</td>
						<td>{{ $row->type_d_huile}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Quantite Olive', (isset($fields['quantite_olive']['language'])? $fields['quantite_olive']['language'] : array())) }}</td>
						<td>{{ $row->quantite_olive}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	