

		 {!! Form::open(array('url'=>'gestionregionolives', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> gestion region olives</legend>
									
									  <div class="form-group row  " >
										<label for="Id" class=" control-label col-md-4 "> Id </label>
										<div class="col-md-8">
										  <textarea name='id' rows='5' id='id' class='form-control form-control-sm '  
				           >{{ $row['id'] }}</textarea> 
										 </div> 
										 
									  </div> {!! Form::hidden('code', $row['code']) !!}					
									  <div class="form-group row  " >
										<label for="Postale" class=" control-label col-md-4 "> Postale <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='postale' id='postale' value='{{ $row['postale'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Libelle" class=" control-label col-md-4 "> Libelle <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='libelle' id='libelle' value='{{ $row['libelle'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Indicatif" class=" control-label col-md-4 "> Indicatif <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='indicatif' id='indicatif' value='{{ $row['indicatif'] }}' 
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
