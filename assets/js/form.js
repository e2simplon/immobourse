$( document ).ready(function() {
  $('#search-unsuccessful-1').hide();
  $('#search-unsuccessful-2').hide();
});


$( "#suggestion1" ).click(function() {
  $( "#search-unsuccessful-1" ).toggle();
});

$( "#suggestion2" ).click(function() {
  $( "#search-unsuccessful-2" ).toggle();
});
