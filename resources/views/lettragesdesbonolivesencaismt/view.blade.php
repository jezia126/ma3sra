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
						<a href="{{ url('lettragesdesbonolivesencaismt?return='.$return) }}" class="tips btn btn-danger  btn-sm  " title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>		
						@if($access['is_add'] ==1)
				   		<a href="{{ url('lettragesdesbonolivesencaismt/'.$id.'/edit?return='.$return) }}" class="tips btn btn-info btn-sm  " title="{{ __('core.btn_edit') }}"><i class="icon-note"></i></a>
						@endif
					</div>	
				</div>
				<div class="col-md-6 text-right">			
					<div class="btn-group">
				   		<a href="{{ ($prevnext['prev'] != '' ? url('lettragesdesbonolivesencaismt/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-primary  btn-sm"><i class="fa fa-arrow-left"></i>  </a>	
						<a href="{{ ($prevnext['next'] != '' ? url('lettragesdesbonolivesencaismt/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-primary btn-sm "> <i class="fa fa-arrow-right"></i>  </a>			
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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Type Paiement', (isset($fields['type_paiement']['language'])? $fields['type_paiement']['language'] : array())) }}</td>
						<td>{{ $row->type_paiement}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Montant', (isset($fields['montant']['language'])? $fields['montant']['language'] : array())) }}</td>
						<td>{{ $row->montant}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Validation Signature', (isset($fields['validation_signature']['language'])? $fields['validation_signature']['language'] : array())) }}</td>
						<td>{{ $row->validation_signature}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Valorisation', (isset($fields['valorisation']['language'])? $fields['valorisation']['language'] : array())) }}</td>
						<td>{{ $row->valorisation}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Echeance', (isset($fields['echeance']['language'])? $fields['echeance']['language'] : array())) }}</td>
						<td>{{ $row->echeance}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Cheque Traite N', (isset($fields['cheque_traite_n']['language'])? $fields['cheque_traite_n']['language'] : array())) }}</td>
						<td>{{ $row->cheque_traite_n}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Date Valorisation', (isset($fields['date_valorisation']['language'])? $fields['date_valorisation']['language'] : array())) }}</td>
						<td>{{ $row->date_valorisation}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Detaille Reglement N', (isset($fields['detaille_reglement_n']['language'])? $fields['detaille_reglement_n']['language'] : array())) }}</td>
						<td>{{ $row->detaille_reglement_n}} </td>
						
					</tr>
				
				</tbody>	
			</table>   

		 	

		</div>
			
	</div>
</div>		
@stop
