$(function() {
  $( '.collapse .navbar-nav a' ).on( 'click', function () {
  	$( '.collapse .navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
  	$( this ).parent( 'li' ).addClass( 'active' );
  });
  console.log('hello');





});
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
$(function(){

  $('#showMore').click(function(){

    $('#box .box:hidden').slice(0,3).slideDown();

      if($('#box .box:hidden').length == 0 ){
        $('#showMore').fadeOut('slow');
      };
  });



});
