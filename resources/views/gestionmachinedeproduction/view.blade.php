@extends('layouts.app')

@section('content')
<div class="page-titles">
  <h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2>
</div>
<div class="card">
	<div class="card-body">

		<div class="toolbar-nav">
			<div class="row">
				<div class="col-md-6 ">
					<div class="btn-group">
						<a href="{{ url('gestionmachinedeproduction?return='.$return) }}" class="tips btn btn-danger  btn-sm  " title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>		
						@if($access['is_add'] ==1)
				   		<a href="{{ url('gestionmachinedeproduction/'.$id.'/edit?return='.$return) }}" class="tips btn btn-info btn-sm  " title="{{ __('core.btn_edit') }}"><i class="icon-note"></i></a>
						@endif
					</div>	
				</div>
				<div class="col-md-6 text-right">			
					<div class="btn-group">
				   		<a href="{{ ($prevnext['prev'] != '' ? url('gestionmachinedeproduction/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-primary  btn-sm"><i class="fa fa-arrow-left"></i>  </a>	
						<a href="{{ ($prevnext['next'] != '' ? url('gestionmachinedeproduction/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-primary btn-sm "> <i class="fa fa-arrow-right"></i>  </a>			
					</div>			
				</div>	

				
				
			</div>
		</div>
	
		<div class="table-responsive">
			<table class="table  table-bordered " >
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
				
				</tbody>	
			</table>   

		 	

		</div>
			
	</div>
</div>		
@stop
