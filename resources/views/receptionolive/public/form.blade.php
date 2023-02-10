

		 {!! Form::open(array('url'=>'receptionolive', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> reception olive</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Bon De Reception" class=" control-label col-md-4 "> Bon De Reception </label>
										<div class="col-md-8">
										  <input  type='text' name='bon_de_reception' id='bon_de_reception' value='{{ $row['bon_de_reception'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date" class=" control-label col-md-4 "> Date </label>
										<div class="col-md-8">
										  <input  type='text' name='date' id='date' value='{{ $row['date'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date De Tracabilite" class=" control-label col-md-4 "> Date De Tracabilite </label>
										<div class="col-md-8">
										  <input  type='text' name='date_de_tracabilite' id='date_de_tracabilite' value='{{ $row['date_de_tracabilite'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Operation" class=" control-label col-md-4 "> Operation </label>
										<div class="col-md-8">
										  <input  type='text' name='operation' id='operation' value='{{ $row['operation'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Type De Huile" class=" control-label col-md-4 "> Type De Huile </label>
										<div class="col-md-8">
										  <input  type='text' name='type_de_huile' id='type_de_huile' value='{{ $row['type_de_huile'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Maturite" class=" control-label col-md-4 "> Maturite </label>
										<div class="col-md-8">
										  <input  type='text' name='maturite' id='maturite' value='{{ $row['maturite'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Etat Sanitaire Olive" class=" control-label col-md-4 "> Etat Sanitaire Olive </label>
										<div class="col-md-8">
										  <input  type='text' name='etat_sanitaire_olive' id='etat_sanitaire_olive' value='{{ $row['etat_sanitaire_olive'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Code Fournisseur" class=" control-label col-md-4 "> Code Fournisseur </label>
										<div class="col-md-8">
										  <input  type='text' name='code_fournisseur' id='code_fournisseur' value='{{ $row['code_fournisseur'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Fournisseur" class=" control-label col-md-4 "> Fournisseur </label>
										<div class="col-md-8">
										  <input  type='text' name='fournisseur' id='fournisseur' value='{{ $row['fournisseur'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Sous Compte" class=" control-label col-md-4 "> Sous Compte </label>
										<div class="col-md-8">
										  <input  type='text' name='sous_compte' id='sous_compte' value='{{ $row['sous_compte'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Titre De Compte" class=" control-label col-md-4 "> Titre De Compte </label>
										<div class="col-md-8">
										  <input  type='text' name='titre_de_compte' id='titre_de_compte' value='{{ $row['titre_de_compte'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Adresse" class=" control-label col-md-4 "> Adresse </label>
										<div class="col-md-8">
										  <input  type='text' name='adresse' id='adresse' value='{{ $row['adresse'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Tel" class=" control-label col-md-4 "> Tel </label>
										<div class="col-md-8">
										  <input  type='text' name='tel' id='tel' value='{{ $row['tel'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Cin" class=" control-label col-md-4 "> Cin </label>
										<div class="col-md-8">
										  <input  type='text' name='cin' id='cin' value='{{ $row['cin'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Code Client" class=" control-label col-md-4 "> Code Client </label>
										<div class="col-md-8">
										  <input  type='text' name='code_client' id='code_client' value='{{ $row['code_client'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Client" class=" control-label col-md-4 "> Client </label>
										<div class="col-md-8">
										  <input  type='text' name='client' id='client' value='{{ $row['client'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Adresse Client" class=" control-label col-md-4 "> Adresse Client </label>
										<div class="col-md-8">
										  <input  type='text' name='adresse_client' id='adresse_client' value='{{ $row['adresse_client'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Tel Client" class=" control-label col-md-4 "> Tel Client </label>
										<div class="col-md-8">
										  <input  type='text' name='tel_client' id='tel_client' value='{{ $row['tel_client'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Cin Client" class=" control-label col-md-4 "> Cin Client </label>
										<div class="col-md-8">
										  <input  type='text' name='cin_client' id='cin_client' value='{{ $row['cin_client'] }}' 
						     class='form-control form-control-sm ' /> 
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
