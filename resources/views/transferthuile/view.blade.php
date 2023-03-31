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
						<a href="{{ url('transferthuile?return='.$return) }}" class="tips btn btn-danger  btn-sm  " title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>		
						@if($access['is_add'] ==1)
				   		<a href="{{ url('transferthuile/'.$id.'/edit?return='.$return) }}" class="tips btn btn-info btn-sm  " title="{{ __('core.btn_edit') }}"><i class="icon-note"></i></a>
						@endif
					</div>	
				</div>
				<div class="col-md-6 text-right">			
					<div class="btn-group">
				   		<a href="{{ ($prevnext['prev'] != '' ? url('transferthuile/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-primary  btn-sm"><i class="fa fa-arrow-left"></i>  </a>	
						<a href="{{ ($prevnext['next'] != '' ? url('transferthuile/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-primary btn-sm "> <i class="fa fa-arrow-right"></i>  </a>			
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
				
				</tbody>	
			</table>   

		 	

		</div>
			
	</div>
</div>		
@stop
