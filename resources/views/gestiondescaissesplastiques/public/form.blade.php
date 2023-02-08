

		 {!! Form::open(array('url'=>'gestiondescaissesplastiques', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> gestion des caisses plastiques</legend>
				{!! Form::hidden('code', $row['code']) !!}					
									  <div class="form-group row  " >
										<label for="Création des caisses" class=" control-label col-md-4 "> Création des caisses <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='note' id='note' value='{{ $row['note'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Disponible" class=" control-label col-md-4 "> Disponible <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <?php $disponible = explode(",",$row['disponible']); ?>
					  
					<input type='checkbox' name='disponible[]' value ='oui' required  class=' filled-in' id='disponible-0'
					@if(in_array('oui',$disponible))checked @endif 
					 /> <label for='disponible-0'> Disponible </label> 
					  
					<input type='checkbox' name='disponible[]' value ='non' required  class=' filled-in' id='disponible-1'
					@if(in_array('non',$disponible))checked @endif 
					 /> <label for='disponible-1'> Non Disponible </label>  
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
