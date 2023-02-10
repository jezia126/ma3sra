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
						<a href="{{ url('ficheclient?return='.$return) }}" class="tips btn btn-danger  btn-sm  " title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>		
						@if($access['is_add'] ==1)
				   		<a href="{{ url('ficheclient/'.$id.'/edit?return='.$return) }}" class="tips btn btn-info btn-sm  " title="{{ __('core.btn_edit') }}"><i class="icon-note"></i></a>
						@endif
					</div>	
				</div>
				<div class="col-md-6 text-right">			
					<div class="btn-group">
				   		<a href="{{ ($prevnext['prev'] != '' ? url('ficheclient/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-primary  btn-sm"><i class="fa fa-arrow-left"></i>  </a>	
						<a href="{{ ($prevnext['next'] != '' ? url('ficheclient/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-primary btn-sm "> <i class="fa fa-arrow-right"></i>  </a>			
					</div>			
				</div>	

				
				
			</div>
		</div>
	
		<div class="table-responsive">
			<table class="table  table-bordered " >
				<tbody>	
			
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Code Client', (isset($fields['code_client']['language'])? $fields['code_client']['language'] : array())) }}</td>
						<td>{{ $row->code_client}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Raison Social', (isset($fields['raison_social']['language'])? $fields['raison_social']['language'] : array())) }}</td>
						<td>{{ $row->raison_social}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Tel', (isset($fields['tel']['language'])? $fields['tel']['language'] : array())) }}</td>
						<td>{{ $row->tel}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Fax', (isset($fields['fax']['language'])? $fields['fax']['language'] : array())) }}</td>
						<td>{{ $row->fax}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Adresse', (isset($fields['adresse']['language'])? $fields['adresse']['language'] : array())) }}</td>
						<td>{{ $row->adresse}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Matricule Fiscale', (isset($fields['matricule_fiscale']['language'])? $fields['matricule_fiscale']['language'] : array())) }}</td>
						<td>{{ $row->matricule_fiscale}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Registre Rc', (isset($fields['registre_rc']['language'])? $fields['registre_rc']['language'] : array())) }}</td>
						<td>{{ $row->registre_rc}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Adressee', (isset($fields['adressee']['language'])? $fields['adressee']['language'] : array())) }}</td>
						<td>{{ $row->adressee}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Region', (isset($fields['region']['language'])? $fields['region']['language'] : array())) }}</td>
						<td>{{ $row->region}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Delegation', (isset($fields['delegation']['language'])? $fields['delegation']['language'] : array())) }}</td>
						<td>{{ $row->delegation}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Commercial', (isset($fields['commercial']['language'])? $fields['commercial']['language'] : array())) }}</td>
						<td>{{ $row->commercial}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Localite', (isset($fields['localite']['language'])? $fields['localite']['language'] : array())) }}</td>
						<td>{{ $row->localite}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Code Postal', (isset($fields['code_postal']['language'])? $fields['code_postal']['language'] : array())) }}</td>
						<td>{{ $row->code_postal}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Agence', (isset($fields['agence']['language'])? $fields['agence']['language'] : array())) }}</td>
						<td>{{ $row->agence}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Rib', (isset($fields['rib']['language'])? $fields['rib']['language'] : array())) }}</td>
						<td>{{ $row->rib}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Cin', (isset($fields['cin']['language'])? $fields['cin']['language'] : array())) }}</td>
						<td>{{ $row->cin}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Delivre Le', (isset($fields['delivre_le']['language'])? $fields['delivre_le']['language'] : array())) }}</td>
						<td>{{ $row->delivre_le}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('A', (isset($fields['a']['language'])? $fields['a']['language'] : array())) }}</td>
						<td>{{ $row->a}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Tel Inter', (isset($fields['tel_inter']['language'])? $fields['tel_inter']['language'] : array())) }}</td>
						<td>{{ $row->tel_inter}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Nom De Responsable', (isset($fields['nom_de_responsable']['language'])? $fields['nom_de_responsable']['language'] : array())) }}</td>
						<td>{{ $row->nom_de_responsable}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Cin Resp', (isset($fields['cin_resp']['language'])? $fields['cin_resp']['language'] : array())) }}</td>
						<td>{{ $row->cin_resp}} </td>
						
					</tr>
				
				</tbody>	
			</table>   

		 	

		</div>
			
	</div>
</div>		
@stop
