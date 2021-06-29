
  var screenWidth = $(window).width();
  if ( screenWidth >= 991) {
      $('.sub-menu').addClass('animate__animated animate__fadeInDown');
     

  };


  // Do something on click...

  var scrnWidth = $(window).width();
  if ( scrnWidth <= 991) {
    $(".menu-item a").click(function () {

      $('.main-nav ul ul').not($(this).siblings()).slideUp();
      $(this).siblings(".main-nav ul ul").slideToggle();
    });

  };
