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
						<a href="{{ url('tableaudebord?return='.$return) }}" class="tips btn btn-danger  btn-sm  " title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>		
						@if($access['is_add'] ==1)
				   		<a href="{{ url('tableaudebord/'.$id.'/edit?return='.$return) }}" class="tips btn btn-info btn-sm  " title="{{ __('core.btn_edit') }}"><i class="icon-note"></i></a>
						@endif
					</div>	
				</div>
				<div class="col-md-6 text-right">			
					<div class="btn-group">
				   		<a href="{{ ($prevnext['prev'] != '' ? url('tableaudebord/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-primary  btn-sm"><i class="fa fa-arrow-left"></i>  </a>	
						<a href="{{ ($prevnext['next'] != '' ? url('tableaudebord/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-primary btn-sm "> <i class="fa fa-arrow-right"></i>  </a>			
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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Total Ventes', (isset($fields['total_ventes']['language'])? $fields['total_ventes']['language'] : array())) }}</td>
						<td>{{ $row->total_ventes}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Cout De Vente', (isset($fields['cout_de_vente']['language'])? $fields['cout_de_vente']['language'] : array())) }}</td>
						<td>{{ $row->cout_de_vente}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Marge En Dinars', (isset($fields['marge_en_dinars']['language'])? $fields['marge_en_dinars']['language'] : array())) }}</td>
						<td>{{ $row->marge_en_dinars}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Marge En Pourc', (isset($fields['marge_en_pourc']['language'])? $fields['marge_en_pourc']['language'] : array())) }}</td>
						<td>{{ $row->marge_en_pourc}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Lot N', (isset($fields['lot_n']['language'])? $fields['lot_n']['language'] : array())) }}</td>
						<td>{{ $row->lot_n}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Citerne', (isset($fields['citerne']['language'])? $fields['citerne']['language'] : array())) }}</td>
						<td>{{ $row->citerne}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Type De Huile', (isset($fields['type_de_huile']['language'])? $fields['type_de_huile']['language'] : array())) }}</td>
						<td>{{ $row->type_de_huile}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Quantite En Kg', (isset($fields['quantite_en_kg']['language'])? $fields['quantite_en_kg']['language'] : array())) }}</td>
						<td>{{ $row->quantite_en_kg}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Cout Par Kg', (isset($fields['cout_par_kg']['language'])? $fields['cout_par_kg']['language'] : array())) }}</td>
						<td>{{ $row->cout_par_kg}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Quantite De Tritu Kg', (isset($fields['quantite_de_tritu_kg']['language'])? $fields['quantite_de_tritu_kg']['language'] : array())) }}</td>
						<td>{{ $row->quantite_de_tritu_kg}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Cout Trit Par Kg', (isset($fields['cout_trit_par_kg']['language'])? $fields['cout_trit_par_kg']['language'] : array())) }}</td>
						<td>{{ $row->cout_trit_par_kg}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Quant Achat Huil', (isset($fields['quant_achat_huil']['language'])? $fields['quant_achat_huil']['language'] : array())) }}</td>
						<td>{{ $row->quant_achat_huil}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Cout Achat Huil Kg', (isset($fields['cout_achat_huil_kg']['language'])? $fields['cout_achat_huil_kg']['language'] : array())) }}</td>
						<td>{{ $row->cout_achat_huil_kg}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Qte Coupage Enkg', (isset($fields['qte_coupage_enkg']['language'])? $fields['qte_coupage_enkg']['language'] : array())) }}</td>
						<td>{{ $row->qte_coupage_enkg}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Cout Coupage Enkg', (isset($fields['cout_coupage_enkg']['language'])? $fields['cout_coupage_enkg']['language'] : array())) }}</td>
						<td>{{ $row->cout_coupage_enkg}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Qte Enkg', (isset($fields['qte_enkg']['language'])? $fields['qte_enkg']['language'] : array())) }}</td>
						<td>{{ $row->qte_enkg}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Coutenkg', (isset($fields['coutenkg']['language'])? $fields['coutenkg']['language'] : array())) }}</td>
						<td>{{ $row->coutenkg}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Qte Sor Trs Et Con', (isset($fields['qte_sor_trs_et_con']['language'])? $fields['qte_sor_trs_et_con']['language'] : array())) }}</td>
						<td>{{ $row->qte_sor_trs_et_con}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Qte Vente Hui', (isset($fields['qte_vente_hui']['language'])? $fields['qte_vente_hui']['language'] : array())) }}</td>
						<td>{{ $row->qte_vente_hui}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Cout Vente Huile', (isset($fields['cout_vente_huile']['language'])? $fields['cout_vente_huile']['language'] : array())) }}</td>
						<td>{{ $row->cout_vente_huile}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Quantite Res Fin', (isset($fields['quantite_res_fin']['language'])? $fields['quantite_res_fin']['language'] : array())) }}</td>
						<td>{{ $row->quantite_res_fin}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Quant Sort Res F', (isset($fields['quant_sort_res_f']['language'])? $fields['quant_sort_res_f']['language'] : array())) }}</td>
						<td>{{ $row->quant_sort_res_f}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Qte Enkg Resf', (isset($fields['qte_enkg_resf']['language'])? $fields['qte_enkg_resf']['language'] : array())) }}</td>
						<td>{{ $row->qte_enkg_resf}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Cout Par Kg Resf', (isset($fields['cout_par_kg_resf']['language'])? $fields['cout_par_kg_resf']['language'] : array())) }}</td>
						<td>{{ $row->cout_par_kg_resf}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Acideite', (isset($fields['acideite']['language'])? $fields['acideite']['language'] : array())) }}</td>
						<td>{{ $row->acideite}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Phyroxide', (isset($fields['phyroxide']['language'])? $fields['phyroxide']['language'] : array())) }}</td>
						<td>{{ $row->phyroxide}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('K232', (isset($fields['k232']['language'])? $fields['k232']['language'] : array())) }}</td>
						<td>{{ $row->k232}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('K270', (isset($fields['k270']['language'])? $fields['k270']['language'] : array())) }}</td>
						<td>{{ $row->k270}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Qte En Stock', (isset($fields['qte_en_stock']['language'])? $fields['qte_en_stock']['language'] : array())) }}</td>
						<td>{{ $row->qte_en_stock}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Cout Moyenne', (isset($fields['cout_moyenne']['language'])? $fields['cout_moyenne']['language'] : array())) }}</td>
						<td>{{ $row->cout_moyenne}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Valeur En Stock', (isset($fields['valeur_en_stock']['language'])? $fields['valeur_en_stock']['language'] : array())) }}</td>
						<td>{{ $row->valeur_en_stock}} </td>
						
					</tr>
				
				</tbody>	
			</table>   

		 	

		</div>
			
	</div>
</div>		
@stop
