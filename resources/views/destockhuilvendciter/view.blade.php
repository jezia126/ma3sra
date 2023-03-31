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
						<a href="{{ url('destockhuilvendciter?return='.$return) }}" class="tips btn btn-danger  btn-sm  " title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>		
						@if($access['is_add'] ==1)
				   		<a href="{{ url('destockhuilvendciter/'.$id.'/edit?return='.$return) }}" class="tips btn btn-info btn-sm  " title="{{ __('core.btn_edit') }}"><i class="icon-note"></i></a>
						@endif
					</div>	
				</div>
				<div class="col-md-6 text-right">			
					<div class="btn-group">
				   		<a href="{{ ($prevnext['prev'] != '' ? url('destockhuilvendciter/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-primary  btn-sm"><i class="fa fa-arrow-left"></i>  </a>	
						<a href="{{ ($prevnext['next'] != '' ? url('destockhuilvendciter/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-primary btn-sm "> <i class="fa fa-arrow-right"></i>  </a>			
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
				
				</tbody>	
			</table>   

		 	

		</div>
			
	</div>
</div>		
@stop
