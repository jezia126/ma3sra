@extends('layouts.app')

@section('content')
<div class="page-titles">
  <h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2>
</div>
<div class="card">
	<div class="card-body">


	{!! Form::open(array('url'=>'index?return='.$return, 'class'=>'form-horizontal  validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
	<div class="toolbar-nav">
		<div class="row">
			<div class="col-md-6 " >
				 <a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn btn-danger  btn-sm "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-times"></i></a>
			</div>
			<div class="col-md-6  text-right " >
				<div class="btn-group">
					
						<button name="apply" class="tips btn btn-sm btn-info  "  title="{{ __('core.btn_back') }}" > {{ __('core.sb_apply') }} </button>
						<button name="save" class="tips btn btn-sm btn-primary "  id="saved-button" title="{{ __('core.btn_back') }}" > {{ __('core.sb_save') }} </button> 
						
					
				</div>		
			</div>
			
		</div>
	</div>	


	
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		
	<div class="">
		<div class="col-md-12">
						<fieldset><legend> index</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Trier Par" class=" control-label col-md-4 "> Trier Par <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='trier_par' id='trier_par' value='{{ $row['trier_par'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Bon De Reception Olive" class=" control-label col-md-4 "> Bon De Reception Olive <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  
					
					<input type='radio' name='bon_de_reception_olive' value ='acquisations' required @if($row['bon_de_reception_olive'] == 'acquisations') checked="checked" @endif class='filled-in' id='bon_de_reception_olive-0'> <label for='bon_de_reception_olive-0'>Aquisations </label>
					
					<input type='radio' name='bon_de_reception_olive' value ='tous les bons' required @if($row['bon_de_reception_olive'] == 'tous les bons') checked="checked" @endif class='filled-in' id='bon_de_reception_olive-1'> <label for='bon_de_reception_olive-1'>Tous les bons </label> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Bon De Reception Olive 1" class=" control-label col-md-4 "> Bon De Reception Olive 1 <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  
					
					<input type='radio' name='bon_de_reception_olive_1' value ='tarres' required @if($row['bon_de_reception_olive_1'] == 'tarres') checked="checked" @endif class='filled-in' id='bon_de_reception_olive_1-0'> <label for='bon_de_reception_olive_1-0'>Tarres </label>
					
					<input type='radio' name='bon_de_reception_olive_1' value ='non tarres' required @if($row['bon_de_reception_olive_1'] == 'non tarres') checked="checked" @endif class='filled-in' id='bon_de_reception_olive_1-1'> <label for='bon_de_reception_olive_1-1'>Non tarres </label>
					
					<input type='radio' name='bon_de_reception_olive_1' value ='tous les bons' required @if($row['bon_de_reception_olive_1'] == 'tous les bons') checked="checked" @endif class='filled-in' id='bon_de_reception_olive_1-2'> <label for='bon_de_reception_olive_1-2'>Tous les bons </label> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Bon De Reception Olive 2" class=" control-label col-md-4 "> Bon De Reception Olive 2 <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  
					
					<input type='radio' name='bon_de_reception_olive_2' value ='prix achat valorisé' required @if($row['bon_de_reception_olive_2'] == 'prix achat valorisé') checked="checked" @endif class='filled-in' id='bon_de_reception_olive_2-0'> <label for='bon_de_reception_olive_2-0'>Prix achat valorisé </label>
					
					<input type='radio' name='bon_de_reception_olive_2' value ='prix achat non valorisé' required @if($row['bon_de_reception_olive_2'] == 'prix achat non valorisé') checked="checked" @endif class='filled-in' id='bon_de_reception_olive_2-1'> <label for='bon_de_reception_olive_2-1'>Prix achat non valorisé </label>
					
					<input type='radio' name='bon_de_reception_olive_2' value ='tous les bons de reception' required @if($row['bon_de_reception_olive_2'] == 'tous les bons de reception') checked="checked" @endif class='filled-in' id='bon_de_reception_olive_2-2'> <label for='bon_de_reception_olive_2-2'>Tous les bons de reception </label> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Bon De Reception Services" class=" control-label col-md-4 "> Bon De Reception Services <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  
					
					<input type='radio' name='bon_de_reception_services' value ='livrés' required @if($row['bon_de_reception_services'] == 'livrés') checked="checked" @endif class='filled-in' id='bon_de_reception_services-0'> <label for='bon_de_reception_services-0'>Livrés </label>
					
					<input type='radio' name='bon_de_reception_services' value ='non livrés' required @if($row['bon_de_reception_services'] == 'non livrés') checked="checked" @endif class='filled-in' id='bon_de_reception_services-1'> <label for='bon_de_reception_services-1'>Non livrés </label>
					
					<input type='radio' name='bon_de_reception_services' value ='tous les bons de reception' required @if($row['bon_de_reception_services'] == 'tous les bons de reception') checked="checked" @endif class='filled-in' id='bon_de_reception_services-2'> <label for='bon_de_reception_services-2'>Tous les bons de reception </label> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Aquisition" class=" control-label col-md-4 "> Aquisition <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  
					
					<input type='radio' name='aquisition' value ='base' required @if($row['aquisition'] == 'base') checked="checked" @endif class='filled-in' id='aquisition-0'> <label for='aquisition-0'>Base </label>
					
					<input type='radio' name='aquisition' value ='kg olive' required @if($row['aquisition'] == 'kg olive') checked="checked" @endif class='filled-in' id='aquisition-1'> <label for='aquisition-1'>Kg olive </label>
					
					<input type='radio' name='aquisition' value ='tous les bons' required @if($row['aquisition'] == 'tous les bons') checked="checked" @endif class='filled-in' id='aquisition-2'> <label for='aquisition-2'>Tous les bons </label> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Bon De Reception Olive 3" class=" control-label col-md-4 "> Bon De Reception Olive 3 <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  
					
					<input type='radio' name='bon_de_reception_olive_3' value ='triturés' required @if($row['bon_de_reception_olive_3'] == 'triturés') checked="checked" @endif class='filled-in' id='bon_de_reception_olive_3-0'> <label for='bon_de_reception_olive_3-0'>Triturés </label>
					
					<input type='radio' name='bon_de_reception_olive_3' value ='non triturés' required @if($row['bon_de_reception_olive_3'] == 'non triturés') checked="checked" @endif class='filled-in' id='bon_de_reception_olive_3-1'> <label for='bon_de_reception_olive_3-1'>Non triturés </label>
					
					<input type='radio' name='bon_de_reception_olive_3' value ='tous les bons' required @if($row['bon_de_reception_olive_3'] == 'tous les bons') checked="checked" @endif class='filled-in' id='bon_de_reception_olive_3-2'> <label for='bon_de_reception_olive_3-2'>Tous les bons </label> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Code Fournisseur Debut" class=" control-label col-md-4 "> Code Fournisseur Debut <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='code_fournisseur_debut' id='code_fournisseur_debut' value='{{ $row['code_fournisseur_debut'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Code Fin Fournisseur" class=" control-label col-md-4 "> Code Fin Fournisseur <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='code_fin_fournisseur' id='code_fin_fournisseur' value='{{ $row['code_fin_fournisseur'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Code Client Debut" class=" control-label col-md-4 "> Code Client Debut <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='code_client_debut' id='code_client_debut' value='{{ $row['code_client_debut'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Code Fin Client" class=" control-label col-md-4 "> Code Fin Client <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='code_fin_client' id='code_fin_client' value='{{ $row['code_fin_client'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date Debut" class=" control-label col-md-4 "> Date Debut <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='date_debut' id='date_debut' value='{{ $row['date_debut'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date Fin" class=" control-label col-md-4 "> Date Fin <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='date_fin' id='date_fin' value='{{ $row['date_fin'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Cache Imp" class=" control-label col-md-4 "> Cache Imp <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <?php $cache_imp = explode(",",$row['cache_imp']); ?>
					  
					<input type='checkbox' name='cache_imp[]' value ='caché pour imprimer le rapport' required  class=' filled-in' id='cache_imp-0'
					@if(in_array('caché pour imprimer le rapport',$cache_imp))checked @endif 
					 /> <label for='cache_imp-0'> caché pour imprimer le rapport </label>  
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Qte Olives Val Kg" class=" control-label col-md-4 "> Qte Olives Val Kg <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='qte_olives_val_kg' id='qte_olives_val_kg' value='{{ $row['qte_olives_val_kg'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Qte Huile Val Kg" class=" control-label col-md-4 "> Qte Huile Val Kg <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='qte_huile_val_kg' id='qte_huile_val_kg' value='{{ $row['qte_huile_val_kg'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Trituration %" class=" control-label col-md-4 "> Trituration % <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='trituration_%' id='trituration_%' value='{{ $row['trituration_%'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Prix Unit Kg Olive" class=" control-label col-md-4 "> Prix Unit Kg Olive <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='prix_unit_kg_olive' id='prix_unit_kg_olive' value='{{ $row['prix_unit_kg_olive'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Prix Unit Kg Huile" class=" control-label col-md-4 "> Prix Unit Kg Huile <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='prix_unit_kg_huile' id='prix_unit_kg_huile' value='{{ $row['prix_unit_kg_huile'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Cout Unit Kg Huile" class=" control-label col-md-4 "> Cout Unit Kg Huile <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='cout_unit_kg_huile' id='cout_unit_kg_huile' value='{{ $row['cout_unit_kg_huile'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Montant Achat" class=" control-label col-md-4 "> Montant Achat <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='montant_achat' id='montant_achat' value='{{ $row['montant_achat'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Cout Total Huile" class=" control-label col-md-4 "> Cout Total Huile <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='cout_total_huile' id='cout_total_huile' value='{{ $row['cout_total_huile'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Huile Triture" class=" control-label col-md-4 "> Huile Triture <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='huile_triture' id='huile_triture' value='{{ $row['huile_triture'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> </fieldset></div>

	</div>
	
	<input type="hidden" name="action_task" value="save" />
	{!! Form::close() !!}
	</div>
</div>
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		 	
		 	 

		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("index/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop