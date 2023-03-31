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
						<a href="{{ url('ouvrirloprohui?return='.$return) }}" class="tips btn btn-danger  btn-sm  " title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>		
						@if($access['is_add'] ==1)
				   		<a href="{{ url('ouvrirloprohui/'.$id.'/edit?return='.$return) }}" class="tips btn btn-info btn-sm  " title="{{ __('core.btn_edit') }}"><i class="icon-note"></i></a>
						@endif
					</div>	
				</div>
				<div class="col-md-6 text-right">			
					<div class="btn-group">
				   		<a href="{{ ($prevnext['prev'] != '' ? url('ouvrirloprohui/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-primary  btn-sm"><i class="fa fa-arrow-left"></i>  </a>	
						<a href="{{ ($prevnext['next'] != '' ? url('ouvrirloprohui/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-primary btn-sm "> <i class="fa fa-arrow-right"></i>  </a>			
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
				
				</tbody>	
			</table>   

		 	

		</div>
			
	</div>
</div>		
@stop
