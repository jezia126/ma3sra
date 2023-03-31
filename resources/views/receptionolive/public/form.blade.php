

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
										  
				
					{!! Form::text('date', $row['date'],array('class'=>'form-control form-control-sm date')) !!} 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date De Tracabilite" class=" control-label col-md-4 "> Date De Tracabilite </label>
										<div class="col-md-8">
										  
				
					{!! Form::text('date_de_tracabilite', $row['date_de_tracabilite'],array('class'=>'form-control form-control-sm date')) !!} 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Operation" class=" control-label col-md-4 "> Operation </label>
										<div class="col-md-8">
										  
					
					<input type='radio' name='operation' value ='acquisations'  @if($row['operation'] == 'acquisations') checked="checked" @endif class='filled-in' id='operation-0'> <label for='operation-0'>Aquisations </label>
					
					<input type='radio' name='operation' value ='services'  @if($row['operation'] == 'services') checked="checked" @endif class='filled-in' id='operation-1'> <label for='operation-1'>Services </label> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Type De Huile" class=" control-label col-md-4 "> Type De Huile </label>
										<div class="col-md-8">
										  
					
					<input type='radio' name='type_de_huile' value ='bio'  @if($row['type_de_huile'] == 'bio') checked="checked" @endif class='filled-in' id='type_de_huile-0'> <label for='type_de_huile-0'>Bio </label>
					
					<input type='radio' name='type_de_huile' value ='conventionnelle'  @if($row['type_de_huile'] == 'conventionnelle') checked="checked" @endif class='filled-in' id='type_de_huile-1'> <label for='type_de_huile-1'>Conventionnelle </label> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Maturite" class=" control-label col-md-4 "> Maturite </label>
										<div class="col-md-8">
										  
					
					<input type='radio' name='maturite' value ='vert'  @if($row['maturite'] == 'vert') checked="checked" @endif class='filled-in' id='maturite-0'> <label for='maturite-0'>Vert </label>
					
					<input type='radio' name='maturite' value ='moyen'  @if($row['maturite'] == 'moyen') checked="checked" @endif class='filled-in' id='maturite-1'> <label for='maturite-1'>Moyen </label>
					
					<input type='radio' name='maturite' value ='noir'  @if($row['maturite'] == 'noir') checked="checked" @endif class='filled-in' id='maturite-2'> <label for='maturite-2'>Noir </label> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Etat Sanitaire Olive" class=" control-label col-md-4 "> Etat Sanitaire Olive </label>
										<div class="col-md-8">
										  
					
					<input type='radio' name='etat_sanitaire_olive' value ='bonne'  @if($row['etat_sanitaire_olive'] == 'bonne') checked="checked" @endif class='filled-in' id='etat_sanitaire_olive-0'> <label for='etat_sanitaire_olive-0'>Bonne </label>
					
					<input type='radio' name='etat_sanitaire_olive' value ='moyenne'  @if($row['etat_sanitaire_olive'] == 'moyenne') checked="checked" @endif class='filled-in' id='etat_sanitaire_olive-1'> <label for='etat_sanitaire_olive-1'>Moyenne </label>
					
					<input type='radio' name='etat_sanitaire_olive' value ='mauvaise'  @if($row['etat_sanitaire_olive'] == 'mauvaise') checked="checked" @endif class='filled-in' id='etat_sanitaire_olive-2'> <label for='etat_sanitaire_olive-2'>Mauvaise </label> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Code Tiers" class=" control-label col-md-4 "> Code Tiers </label>
										<div class="col-md-8">
										  <input  type='text' name='code_tiers' id='code_tiers' value='{{ $row['code_tiers'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Cin" class=" control-label col-md-4 "> Cin </label>
										<div class="col-md-8">
										  <select name='cin' rows='5' id='cin' class='select2 '   ></select> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Tiers Crediteur" class=" control-label col-md-4 "> Tiers Crediteur </label>
										<div class="col-md-8">
										  <input  type='text' name='tiers_crediteur' id='tiers_crediteur' value='{{ $row['tiers_crediteur'] }}' 
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
										<label for="Poids Charge" class=" control-label col-md-4 "> Poids Charge </label>
										<div class="col-md-8">
										  <input  type='text' name='poids_charge' id='poids_charge' value='{{ $row['poids_charge'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Poids Vide" class=" control-label col-md-4 "> Poids Vide </label>
										<div class="col-md-8">
										  <input  type='text' name='poids_vide' id='poids_vide' value='{{ $row['poids_vide'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Poids Net" class=" control-label col-md-4 "> Poids Net </label>
										<div class="col-md-8">
										  <input  type='text' name='poids_net' id='poids_net' value='{{ $row['poids_net'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Stockage Caisse N" class=" control-label col-md-4 "> Stockage Caisse N </label>
										<div class="col-md-8">
										  <input  type='text' name='stockage_caisse_n' id='stockage_caisse_n' value='{{ $row['stockage_caisse_n'] }}' 
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
		
		
		$("#cin").jCombo("{!! url('receptionolive/comboselect?filter=tb_tiers_crediteur:cin:cin') !!}",
		{  selected_value : '{{ $row["cin"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
