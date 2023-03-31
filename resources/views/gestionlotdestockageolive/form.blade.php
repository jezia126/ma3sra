@extends('layouts.app')

@section('content')
<div class="page-titles">
  <h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2>
</div>
<div class="card">
	<div class="card-body">


	{!! Form::open(array('url'=>'gestionlotdestockageolive?return='.$return, 'class'=>'form-horizontal  validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
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
						<fieldset><legend> gestion lot stockage olive</legend>
									
									  <div class="form-group row  " >
										<label for="Lot De Stockage Olive N" class=" control-label col-md-4 "> Lot De Stockage Olive N <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='lot_de_stockage_olive_n' id='lot_de_stockage_olive_n' value='{{ $row['lot_de_stockage_olive_n'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Lot Saturation" class=" control-label col-md-4 "> Lot Saturation <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='lot_saturation' id='lot_saturation' value='{{ $row['lot_saturation'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Lot Trituration" class=" control-label col-md-4 "> Lot Trituration <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='lot_trituration' id='lot_trituration' value='{{ $row['lot_trituration'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date Stockage" class=" control-label col-md-4 "> Date Stockage <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  
				
					{!! Form::text('date_stockage', $row['date_stockage'],array('class'=>'form-control form-control-sm date')) !!} 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date Execution" class=" control-label col-md-4 "> Date Execution <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  
				
					{!! Form::text('date_execution', $row['date_execution'],array('class'=>'form-control form-control-sm date')) !!} 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date De Fin Execution" class=" control-label col-md-4 "> Date De Fin Execution <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  
				
					{!! Form::text('date_de_fin_execution', $row['date_de_fin_execution'],array('class'=>'form-control form-control-sm date')) !!} 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Tiers" class=" control-label col-md-4 "> Tiers <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <select name='tiers' rows='5' id='tiers' class='select2 ' required  ></select> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Nombre Reception" class=" control-label col-md-4 "> Nombre Reception <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='nombre_reception' id='nombre_reception' value='{{ $row['nombre_reception'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Nombre Caisse" class=" control-label col-md-4 "> Nombre Caisse <span class="asterix"> * </span></label>
										<div class="col-md-8">
											<select name='nombre_caisse[]' multiple rows='5' id='nombre_caisse' class='select2 ' required  ></select> 

					 </div> 
										 
									  </div> 
									  <div class="form-group row  " >
										<label for="Quantite Olive" class=" control-label col-md-4 ">Quantite Olive <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='quantite_olive' id='quantite_olive' value='{{ $row['quantite_olive'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div>					
									  <div class="form-group row  " >
										<label for="Operation" class=" control-label col-md-4 "> Operation <span class="asterix"> * </span></label>
										<div class="col-md-8">
										  <input  type='text' name='operation' id='operation' value='{{ $row['operation'] }}' 
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
									  {!! Form::hidden('id', $row['id']) !!}
									  <input type="button" onclick="location.href='http://localhost/gestionlotdestockageolive'" class="btn btn-outline-success" value="liste des lots " />
									  </fieldset></div>


	</div>
	
	<input type="hidden" name="action_task" value="save" />
	{!! Form::close() !!}
	</div>
</div>
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		
		$("#tiers").jCombo("{!! url('gestionlotdestockageolive/comboselect?filter=tb_reception_olive:id:tiers_crediteur') !!}",
		{  selected_value : '{{ $row["tiers"] }}' });
		 	



		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("gestionlotdestockageolive/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
		/*	fetch('http://localhost/api/gestiondescaissesplastiques')
  .then(response => response.json())
  .then(data => {
    const select = document.getElementById('nombre_caisse');
    data.forEach(nombre_caisse => {
      const option = document.createElement('option');
     //option.text = item.disponible;
	// $('#nombre_caisse').val(da)
      option.value = data.code;
      select.appendChild(option);
	 //console.log();

    });
  });*/
  
  $(document).ready(function() {
      $.ajax({
        url: 'http://localhost/api/gestiondescaissesplastiques',
        dataType: 'json',
        success: function(data) {
          var options = '';
          $.each(data, function(key, value) {
            options += '<option value="' + value.code + '">' +value.code+  '</option>';
          });
          $('#nombre_caisse').html(options);
        }
      });
    });
	/*function updateUserField(code, disponible, value) {
    fetch(`/gestiondescaissesplastiques/${code}/${disponible}`, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            [disponible]: value
        })
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        console.log(data.message);
    })
    .catch(error => {
        console.error('There was a problem with the fetch operation:', error);
    });
}
*/

$('#tiers').on('change', function() {
  var selectedValue = $(this).val();
  console.log('Selected value:', selectedValue);

  var apiUrl = 'http://localhost/api/receptionolive/' + selectedValue;
  $.ajax({
  url: apiUrl,
  type: 'GET',
  success: function(data) {
    // Do something with the data
	$('#operation').val(data.operation);
	$('#type_de_huile').val(data.type_de_huile);
	$('#nombre_reception').val(data.bon_de_reception);
	
	//$('#date_stockage').val(data.date);




  console.log(data.operation);
   //co(data.tel);
  },
  error: function(jqXHR, textStatus, errorThrown) {
    // Handle errors
    console.log(textStatus + ': ' + errorThrown);
  }
});});
/*$(document).ready(function() {
  $('#saved-button').click(function() {
    var codes = $('#nombre_caisse').val().split(','); // Obtenir un tableau de codes sélectionnés
    var data = { codes: codes }; // Créer un objet data contenant les codes
    
    $.ajax({
      type: 'PUT',
      url: 'http://localhost/api/update-gestiondescaissesplastiques-disponible/' + codes.join(','),
      data: data,
      success: function(response) {
        // La requête AJAX a réussi, afficher un message à l'utilisateur
        $('#message').text(response.message);
      },
      error: function(xhr, status, error) {
        // La requête AJAX a échoué, afficher un message d'erreur à l'utilisateur
        $('#message').text('Erreur : ' + xhr.responseText);
      }
    });
  });
});
*/
/*$(document).ready(function() {
  $('#saved-button').click(function() {
   var code = $('#nombre_caisse').val();
    
    $.ajax({
		type: 'PUT',
           url: 'http://localhost/api/update-gestiondescaissesplastiques-disponible/'+code,
 
    
      success: function(response) {
        var disponible = response.disponible;
        $.ajax({  type: 'GET',
      url: 'http://localhost/api/gestiondescaissesplastiques'+code,
	  
        
          data: {
            disponible: disponible
          },
          success: function(response) {
            console.log(response.message);
          },
          error: function(xhr, status, error) {
            console.log(xhr.responseText);
          }
        });
      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });
  });
});

*/
$(document).ready(function() {
  $('#saved-button').click(function() {
    var codes = $('#nombre_caisse').val();
    
    $.ajax({
      type: 'PUT',
      url: 'http://localhost/api/update-gestiondescaissesplastiques-disponible',
      data: {
        nombre_caisse: codes
      },
      success: function(response) {
        console.log(response.message);
      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });
  });
});

	</script>		 
@stop