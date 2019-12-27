$("#casas_header").click(function() {
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

$("#galeria_header").click(function() {
  console.log('click')
    $('html,body').animate({
        scrollTop: $("#section_5").offset().top},
        'slow');
});




$( document ).ready(function() {
    console.log( "ready!" );
    $("#carousel").carousel();
});



// Carousel section_5
$('#recipeCarousel').carousel({
  interval :20000
})

$('#section_5 .carousel .carousel-item').each(function(){
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    
    for (var i=0;i<2;i++) {
      next=next.next();
      if (!next.length) {
        next = $(this).siblings(':first');
      }
      
      next.children(':first-child').clone().appendTo($(this));
    }
});
// Carousel section_5 END
