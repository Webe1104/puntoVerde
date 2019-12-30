
$( document ).ready(function() {
    console.log( "ready!" );
    $("#carousel").carousel();
});


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

// Carousel section_5
$('#recipeCarousel').carousel({
  interval :5000
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


// MODAL CAROUSEL
// Get the modal
var modal = document.getElementById("modal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img1 = document.getElementById("image1");
var img2 = document.getElementById("image2");
var img3 = document.getElementById("image3");
var img4 = document.getElementById("image4");
var img5 = document.getElementById("image5");
var img6 = document.getElementById("image6");
img1.onclick = function(){
  modal.style.display = "block";
  $('#carousel_modal').carousel(0);
}
img2.onclick = function(){
  modal.style.display = "block";
  $('#carousel_modal').carousel(1);
}
img3.onclick = function(){
  modal.style.display = "block";
  $('#carousel_modal').carousel(2);
}
img4.onclick = function(){
  modal.style.display = "block";
  $('#carousel_modal').carousel(3);
}
img5.onclick = function(){
  modal.style.display = "block";
  $('#carousel_modal').carousel(4);
}
img6.onclick = function(){
  modal.style.display = "block";
  $('#carousel_modal').carousel(5);
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}

$('#carousel_modal').carousel({
  interval: 6000,
  pause: "false"
});
// MODAL CAROUSEL END
