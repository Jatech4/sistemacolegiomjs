$(document).ready(function(){
$('#ecp').on('change', function() {
      if ( this.value == 'No'){
        $("#medic").fadeIn('slow');
      }
      else{
        $("#medic").fadeOut('slow');
      }
      });
});