$(document).ready(function(){
$('#rec_medico').on('change', function() {
      if ( this.value == 'No'){
        $("#medic").fadeIn('slow');
      }
      else{
        $("#medic").fadeOut('slow');
      }
      });
});