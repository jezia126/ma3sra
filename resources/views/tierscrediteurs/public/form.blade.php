

		 {!! Form::open(array('url'=>'tierscrediteurs', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> tiers crediteurs</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Organisme" class=" control-label col-md-4 "> Organisme </label>
										<div class="col-md-8">
										  
					
					<input type='radio' name='organisme' value ='societe'  @if($row['organisme'] == 'societe') checked="checked" @endif class='filled-in' id='organisme-0'> <label for='organisme-0'>Societe </label>
					
					<input type='radio' name='organisme' value ='personne physique'  @if($row['organisme'] == 'personne physique') checked="checked" @endif class='filled-in' id='organisme-1'> <label for='organisme-1'>Personne physique </label> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Personne Physique" class=" control-label col-md-4 "> Personne Physique </label>
										<div class="col-md-8">
										  
					
					<input type='radio' name='personne_physique' value ='patenter'  @if($row['personne_physique'] == 'patenter') checked="checked" @endif class='filled-in' id='personne_physique-0'> <label for='personne_physique-0'>Patenter </label>
					
					<input type='radio' name='personne_physique' value ='non patenter'  @if($row['personne_physique'] == 'non patenter') checked="checked" @endif class='filled-in' id='personne_physique-1'> <label for='personne_physique-1'>Non Patenter </label> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Code" class=" control-label col-md-4 "> Code <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='code' id='code' value='{{ $row['code'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Titre De Compte" class=" control-label col-md-4 "> Titre De Compte <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='titre_de_compte' id='titre_de_compte' value='{{ $row['titre_de_compte'] }}' 
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
										<label for="Fax" class=" control-label col-md-4 "> Fax <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='fax' id='fax' value='{{ $row['fax'] }}' 
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
										<label for="Region" class=" control-label col-md-4 "> Region <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='region' id='region' value='{{ $row['region'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Email" class=" control-label col-md-4 "> Email <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='email' id='email' value='{{ $row['email'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Matricule Fiscale" class=" control-label col-md-4 "> Matricule Fiscale <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='matricule_fiscale' id='matricule_fiscale' value='{{ $row['matricule_fiscale'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Rc" class=" control-label col-md-4 "> Rc <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='rc' id='rc' value='{{ $row['rc'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Nom Du Responsable" class=" control-label col-md-4 "> Nom Du Responsable <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='nom_du_responsable' id='nom_du_responsable' value='{{ $row['nom_du_responsable'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Fonction" class=" control-label col-md-4 "> Fonction <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='fonction' id='fonction' value='{{ $row['fonction'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Cin" class=" control-label col-md-4 "> Cin <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='cin' id='cin' value='{{ $row['cin'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Delivre Le" class=" control-label col-md-4 "> Delivre Le <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  
				
					{!! Form::text('delivre_le', $row['delivre_le'],array('class'=>'form-control form-control-sm date')) !!} 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="A" class=" control-label col-md-4 "> A <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='a' id='a' value='{{ $row['a'] }}' 
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
