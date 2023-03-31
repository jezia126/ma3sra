

		 {!! Form::open(array('url'=>'saisieventehuile', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> saisie_vente_huile</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Code Citerne" class=" control-label col-md-4 "> Code Citerne <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='code_citerne' id='code_citerne' value='{{ $row['code_citerne'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Raison Social" class=" control-label col-md-4 "> Raison Social <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='Raison_social' id='Raison_social' value='{{ $row['Raison_social'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Adresse" class=" control-label col-md-4 "> Adresse <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='adresse' id='adresse' value='{{ $row['adresse'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Tel" class=" control-label col-md-4 "> Tel <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='tel' id='tel' value='{{ $row['tel'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Code Fiscal" class=" control-label col-md-4 "> Code Fiscal <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='code_fiscal' id='code_fiscal' value='{{ $row['code_fiscal'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Points De Ventes" class=" control-label col-md-4 "> Points De Ventes <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='points_de_ventes' id='points_de_ventes' value='{{ $row['points_de_ventes'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Nom" class=" control-label col-md-4 "> Nom <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='nom' id='nom' value='{{ $row['nom'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Adresse De Livraison" class=" control-label col-md-4 "> Adresse De Livraison <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='adresse_de_livraison' id='adresse_de_livraison' value='{{ $row['adresse_de_livraison'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Solde" class=" control-label col-md-4 "> Solde <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='solde' id='solde' value='{{ $row['solde'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Bon N" class=" control-label col-md-4 "> Bon N <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='bon_n' id='bon_n' value='{{ $row['bon_n'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date De Creation" class=" control-label col-md-4 "> Date De Creation <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='date_de_creation' id='date_de_creation' value='{{ $row['date_de_creation'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Commande N" class=" control-label col-md-4 "> Commande N <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='commande_n' id='commande_n' value='{{ $row['commande_n'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date Commande" class=" control-label col-md-4 "> Date Commande <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='date_commande' id='date_commande' value='{{ $row['date_commande'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date De Livraison" class=" control-label col-md-4 "> Date De Livraison <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='date_de_livraison' id='date_de_livraison' value='{{ $row['date_de_livraison'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Compte N" class=" control-label col-md-4 "> Compte N <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='compte_n' id='compte_n' value='{{ $row['compte_n'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Facture N" class=" control-label col-md-4 "> Facture N <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='facture_n' id='facture_n' value='{{ $row['facture_n'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date" class=" control-label col-md-4 "> Date <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='date' id='date' value='{{ $row['date'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Montant" class=" control-label col-md-4 "> Montant <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='montant' id='montant' value='{{ $row['montant'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Timbre Fisccale" class=" control-label col-md-4 "> Timbre Fisccale <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='timbre_fisccale' id='timbre_fisccale' value='{{ $row['timbre_fisccale'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Net A Payer" class=" control-label col-md-4 "> Net A Payer <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='net_a_payer' id='net_a_payer' value='{{ $row['net_a_payer'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Frais Export" class=" control-label col-md-4 "> Frais Export <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='frais_export' id='frais_export' value='{{ $row['frais_export'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Frais Assuranse" class=" control-label col-md-4 "> Frais Assuranse <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='frais_assuranse' id='frais_assuranse' value='{{ $row['frais_assuranse'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Net A Paye" class=" control-label col-md-4 "> Net A Paye <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='net_a_paye' id='net_a_paye' value='{{ $row['net_a_paye'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Devis" class=" control-label col-md-4 "> Devis <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='devis' id='devis' value='{{ $row['devis'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Taux Change" class=" control-label col-md-4 "> Taux Change <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='taux_change' id='taux_change' value='{{ $row['taux_change'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Note Sur Vente" class=" control-label col-md-4 "> Note Sur Vente <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='note_sur_vente' id='note_sur_vente' value='{{ $row['note_sur_vente'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Transporteur" class=" control-label col-md-4 "> Transporteur <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='transporteur' id='transporteur' value='{{ $row['transporteur'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Vehicule" class=" control-label col-md-4 "> Vehicule <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='vehicule' id='vehicule' value='{{ $row['vehicule'] }}' 
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
