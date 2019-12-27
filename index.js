$("#casas_header").click(function() {
  console.log('click')
    $('html,body').animate({
        scrollTop: $("#section_1").offset().top},
        'slow');
});

$("#contacto_header").click(function() {
  console.log('click')
    $('html,body').animate({
        scrollTop: $("#contacto").offset().top},
        'slow');
});




$( document ).ready(function() {
    console.log( "ready!" );
    $("#carousel").carousel();
    //Carousel section 5 
    // $('.carousel[data-type="multi"] .item').each(function() {
    //   var next = $(this).next();
    //   if (!next.length) {
    //     next = $(this).siblings(':first');
    //   }
    //   next.children(':first-child').clone().appendTo($(this));

    //   for (var i = 0; i < 2; i++) {
    //     next = next.next();
    //     if (!next.length) {
    //       next = $(this).siblings(':first');
    //     }

    //     next.children(':first-child').clone().appendTo($(this));
    //   }
    // });
});