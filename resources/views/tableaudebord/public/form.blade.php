

		 {!! Form::open(array('url'=>'tableaudebord', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> tableau_de_bord</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Total Ventes" class=" control-label col-md-4 "> Total Ventes <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='total_ventes' id='total_ventes' value='{{ $row['total_ventes'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Cout De Vente" class=" control-label col-md-4 "> Cout De Vente <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='cout_de_vente' id='cout_de_vente' value='{{ $row['cout_de_vente'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Marge En Dinars" class=" control-label col-md-4 "> Marge En Dinars <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='marge_en_dinars' id='marge_en_dinars' value='{{ $row['marge_en_dinars'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Marge En Pourc" class=" control-label col-md-4 "> Marge En Pourc <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='marge_en_pourc' id='marge_en_pourc' value='{{ $row['marge_en_pourc'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Lot N" class=" control-label col-md-4 "> Lot N <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='lot_n' id='lot_n' value='{{ $row['lot_n'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Citerne" class=" control-label col-md-4 "> Citerne <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='citerne' id='citerne' value='{{ $row['citerne'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Type De Huile" class=" control-label col-md-4 "> Type De Huile <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='type_de_huile' id='type_de_huile' value='{{ $row['type_de_huile'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Quantite En Kg" class=" control-label col-md-4 "> Quantite En Kg <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='quantite_en_kg' id='quantite_en_kg' value='{{ $row['quantite_en_kg'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Cout Par Kg" class=" control-label col-md-4 "> Cout Par Kg <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='cout_par_kg' id='cout_par_kg' value='{{ $row['cout_par_kg'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Quantite De Tritu Kg" class=" control-label col-md-4 "> Quantite De Tritu Kg <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='quantite_de_tritu_kg' id='quantite_de_tritu_kg' value='{{ $row['quantite_de_tritu_kg'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Cout Trit Par Kg" class=" control-label col-md-4 "> Cout Trit Par Kg <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='cout_trit_par_kg' id='cout_trit_par_kg' value='{{ $row['cout_trit_par_kg'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Quant Achat Huil" class=" control-label col-md-4 "> Quant Achat Huil <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='quant_achat_huil' id='quant_achat_huil' value='{{ $row['quant_achat_huil'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Cout Achat Huil Kg" class=" control-label col-md-4 "> Cout Achat Huil Kg <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='cout_achat_huil_kg' id='cout_achat_huil_kg' value='{{ $row['cout_achat_huil_kg'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Qte Coupage Enkg" class=" control-label col-md-4 "> Qte Coupage Enkg <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='qte_coupage_enkg' id='qte_coupage_enkg' value='{{ $row['qte_coupage_enkg'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Cout Coupage Enkg" class=" control-label col-md-4 "> Cout Coupage Enkg <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='cout_coupage_enkg' id='cout_coupage_enkg' value='{{ $row['cout_coupage_enkg'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Qte Enkg" class=" control-label col-md-4 "> Qte Enkg <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='qte_enkg' id='qte_enkg' value='{{ $row['qte_enkg'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Coutenkg" class=" control-label col-md-4 "> Coutenkg <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='coutenkg' id='coutenkg' value='{{ $row['coutenkg'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Qte Sor Trs Et Con" class=" control-label col-md-4 "> Qte Sor Trs Et Con <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='qte_sor_trs_et_con' id='qte_sor_trs_et_con' value='{{ $row['qte_sor_trs_et_con'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Qte Vente Hui" class=" control-label col-md-4 "> Qte Vente Hui <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='qte_vente_hui' id='qte_vente_hui' value='{{ $row['qte_vente_hui'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Cout Vente Huile" class=" control-label col-md-4 "> Cout Vente Huile <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='cout_vente_huile' id='cout_vente_huile' value='{{ $row['cout_vente_huile'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Quantite Res Fin" class=" control-label col-md-4 "> Quantite Res Fin <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='quantite_res_fin' id='quantite_res_fin' value='{{ $row['quantite_res_fin'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Quant Sort Res F" class=" control-label col-md-4 "> Quant Sort Res F <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='quant_sort_res_f' id='quant_sort_res_f' value='{{ $row['quant_sort_res_f'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Qte Enkg Resf" class=" control-label col-md-4 "> Qte Enkg Resf <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='qte_enkg_resf' id='qte_enkg_resf' value='{{ $row['qte_enkg_resf'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Cout Par Kg Resf" class=" control-label col-md-4 "> Cout Par Kg Resf <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='cout_par_kg_resf' id='cout_par_kg_resf' value='{{ $row['cout_par_kg_resf'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Acideite" class=" control-label col-md-4 "> Acideite <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='acideite' id='acideite' value='{{ $row['acideite'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Phyroxide" class=" control-label col-md-4 "> Phyroxide <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='phyroxide' id='phyroxide' value='{{ $row['phyroxide'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="K232" class=" control-label col-md-4 "> K232 <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='k232' id='k232' value='{{ $row['k232'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="K270" class=" control-label col-md-4 "> K270 <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='k270' id='k270' value='{{ $row['k270'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Qte En Stock" class=" control-label col-md-4 "> Qte En Stock <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='qte_en_stock' id='qte_en_stock' value='{{ $row['qte_en_stock'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Cout Moyenne" class=" control-label col-md-4 "> Cout Moyenne <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='cout_moyenne' id='cout_moyenne' value='{{ $row['cout_moyenne'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Valeur En Stock" class=" control-label col-md-4 "> Valeur En Stock <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='valeur_en_stock' id='valeur_en_stock' value='{{ $row['valeur_en_stock'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> </fieldset></div>

			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-default btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-default btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
				  </div>	  
			
		</div> 
		 <input type="hidden" name="action_task" value="public" />
		 {!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
