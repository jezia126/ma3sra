

		 {!! Form::open(array('url'=>'gestionmachinedeproduction', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> gestion machine de production</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Id Machine" class=" control-label col-md-4 "> Id Machine <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='id_machine' id='id_machine' value='{{ $row['id_machine'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Type Machine" class=" control-label col-md-4 "> Type Machine <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='type_machine' id='type_machine' value='{{ $row['type_machine'] }}' 
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
										<label for="Capacite De Broyage" class=" control-label col-md-4 "> Capacite De Broyage <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='capacite_de_broyage' id='capacite_de_broyage' value='{{ $row['capacite_de_broyage'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Puissance Electrique" class=" control-label col-md-4 "> Puissance Electrique <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='puissance_electrique' id='puissance_electrique' value='{{ $row['puissance_electrique'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Vitesse De Rotation" class=" control-label col-md-4 "> Vitesse De Rotation <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='vitesse_de_rotation' id='vitesse_de_rotation' value='{{ $row['vitesse_de_rotation'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Capacite De Pressage" class=" control-label col-md-4 "> Capacite De Pressage <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='capacite_de_pressage' id='capacite_de_pressage' value='{{ $row['capacite_de_pressage'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Pression De Pressage" class=" control-label col-md-4 "> Pression De Pressage <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='pression_de_pressage' id='pression_de_pressage' value='{{ $row['pression_de_pressage'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Capacite De Broyage Dec" class=" control-label col-md-4 "> Capacite De Broyage Dec <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='capacite_de_broyage_dec' id='capacite_de_broyage_dec' value='{{ $row['capacite_de_broyage_dec'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Puissance De Broyage" class=" control-label col-md-4 "> Puissance De Broyage <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='puissance_de_broyage' id='puissance_de_broyage' value='{{ $row['puissance_de_broyage'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Puissance Electrique Dec" class=" control-label col-md-4 "> Puissance Electrique Dec <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='puissance_electrique_dec' id='puissance_electrique_dec' value='{{ $row['puissance_electrique_dec'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Vitesse De Rotation Dec" class=" control-label col-md-4 "> Vitesse De Rotation Dec <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='vitesse_de_rotation_dec' id='vitesse_de_rotation_dec' value='{{ $row['vitesse_de_rotation_dec'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Capacite De Pressage Dec Dec" class=" control-label col-md-4 "> Capacite De Pressage Dec Dec <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='capacite_de_pressage_dec_dec' id='capacite_de_pressage_dec_dec' value='{{ $row['capacite_de_pressage_dec_dec'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Pression De Pressage Dec" class=" control-label col-md-4 "> Pression De Pressage Dec <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='pression_de_pressage_dec' id='pression_de_pressage_dec' value='{{ $row['pression_de_pressage_dec'] }}' 
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
