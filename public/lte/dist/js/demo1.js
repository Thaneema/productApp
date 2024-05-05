$(document).ready(function() {
  $('#example1 tbody').on( 'focusin', 'tr', function () {
    $('tr').css('background-color','white');
      $(this).closest('tr').css('background-color','#d5dfe4');
  });

});



