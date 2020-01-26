
$( document ).ready(function() {
    console.log( "ready!" );
    $("#carousel").carousel();

    $("#t1_p1_plano_banio").hide();
    $("#t1_p1_plano_sala").hide();
    $("#t1_p1_plano_comedor ").hide();

    $("#t1_p2_plano_lavado").hide();
    $("#t1_p2_plano_banio").hide();

    $("#t1_p3_plano_terraza").hide();
    $("#t1_p3_plano_banio").hide();

    $("#t2_p1_plano_banio").hide();
    $("#t2_p1_plano_sala").hide();
    $("#t2_p1_plano_comedor ").hide();

    $("#t2_p2_plano_banio").hide();
    $("#t2_p2_plano_lavado").hide();

    $("#t2_p3_plano_banio").hide();
    $("#t2_p3_plano_estudio").hide();

    initMap();
    
});

var map;
function initMap() {
  // The location of Uluru
  var location = {lat: 19.4741544, lng: -99.1885065};
  // The map, centered at location
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 17, center: location});
  // The marker, positioned at location
  var marker = new google.maps.Marker({position: location, map: map});
}

//oculta los planos de tipos de secciones 
////// TIPO 1 PISO 1
$("#t1_p1_cocina").hover(function(){
  $('#t1_p1_plano_cocina').show();
  $('#t1_p1_plano_sala').hide();
  $('#t1_p1_plano_comedor').hide();
  $('#t1_p1_plano_banio').hide();
});

$("#t1_p1_sala").hover(function(){
  $('#t1_p1_plano_sala').show();
  $('#t1_p1_plano_cocina').hide();
  $('#t1_p1_plano_comedor').hide();
  $('#t1_p1_plano_banio').hide();
});

$("#t1_p1_comedor").hover(function(){
  $('#t1_p1_plano_comedor').show();
  $('#t1_p1_plano_cocina').hide();
  $('#t1_p1_plano_sala').hide();
  $('#t1_p1_plano_banio').hide();
});

$("#t1_p1_banio").hover(function(){
  $('#t1_p1_plano_banio').show();
  $('#t1_p1_plano_cocina').hide();
  $('#t1_p1_plano_sala').hide();
  $('#t1_p1_plano_comedor').hide();
});
////// TIPO 1 PISO 2
$("#t1_p2_recamara").hover(function(){
  $('#t1_p2_plano_recamara').show();
  $('#t1_p2_plano_lavado').hide();
  $('#t1_p2_plano_banio').hide();
});

$("#t1_p2_lavado").hover(function(){
  $('#t1_p2_plano_lavado').show();
  $('#t1_p2_plano_recamara').hide();
  $('#t1_p2_plano_banio').hide();
});

$("#t1_p2_banio").hover(function(){
  $('#t1_p2_plano_banio').show();
  $('#t1_p2_plano_recamara').hide();
  $('#t1_p2_plano_lavado').hide();
});

////// TIPO 1 PISO 3
$("#t1_p3_recamara").hover(function(){
  $('#t1_p3_plano_recamara').show();
  $('#t1_p3_plano_terraza').hide();
  $('#t1_p3_plano_banio').hide();
});

$("#t1_p3_terraza").hover(function(){
  $('#t1_p3_plano_terraza').show();
  $('#t1_p3_plano_recamara').hide();
  $('#t1_p3_plano_banio').hide();
});

$("#t1_p3_banio").hover(function(){
  $('#t1_p3_plano_banio').show();
  $('#t1_p3_plano_recamara').hide();
  $('#t1_p3_plano_terraza').hide();
});

////// TIPO 2 PISO 1
$("#t2_p1_cocina").hover(function(){
  $('#t2_p1_plano_cocina').show();
  $('#t2_p1_plano_sala').hide();
  $('#t2_p1_plano_comedor').hide();
  $('#t2_p1_plano_banio').hide();
});

$("#t2_p1_sala").hover(function(){
  $('#t2_p1_plano_sala').show();
  $('#t2_p1_plano_cocina').hide();
  $('#t2_p1_plano_comedor').hide();
  $('#t2_p1_plano_banio').hide();
});

$("#t2_p1_comedor").hover(function(){
  $('#t2_p1_plano_comedor').show();
  $('#t2_p1_plano_cocina').hide();
  $('#t2_p1_plano_sala').hide();
  $('#t2_p1_plano_banio').hide();
});

$("#t2_p1_banio").hover(function(){
  $('#t2_p1_plano_banio').show();
  $('#t2_p1_plano_cocina').hide();
  $('#t2_p1_plano_sala').hide();
  $('#t2_p1_plano_comedor').hide();
});

////// TIPO 2 PISO 2
$("#t2_p2_recamara").hover(function(){
  $('#t2_p2_plano_recamara').show();
  $('#t2_p2_plano_lavado').hide();
  $('#t2_p2_plano_banio').hide();
});

$("#t2_p2_lavado").hover(function(){
  $('#t2_p2_plano_lavado').show();
  $('#t2_p2_plano_recamara').hide();
  $('#t2_p2_plano_banio').hide();
});

$("#t2_p2_banio").hover(function(){
  $('#t2_p2_plano_banio').show();
  $('#t2_p2_plano_recamara').hide();
  $('#t2_p2_plano_lavado').hide();
});

////// TIPO 2 PISO 3terraza
$("#t2_p3_terraza").hover(function(){
  console.log('t2_p3_terraz');
  $('#t2_p3_plano_terraza').show();
  $('#t2_p3_plano_estudio').hide();
  $('#t2_p3_plano_banio').hide();
});

$("#t2_p3_estudio").hover(function(){
  console.log('t2_p3_estudi');
  $('#t2_p3_plano_estudio').show();
  $('#t2_p3_plano_terraza').hide();
  $('#t2_p3_plano_banio').hide();
});

$("#t2_p3_banio").hover(function(){
  console.log('t2_p3_banio"');
  $('#t2_p3_plano_banio').show();
  $('#t2_p3_plano_estudio').hide();
  $('#t2_p3_plano_terraza').hide();
});

//Funcionalidad de HEADER redirigir
$("#casas_header").click(function() {
    $('html,body').animate({
        scrollTop: $("#section_1").offset().top},
        'slow');
});

$("#contacto_header").click(function() {
    $('html,body').animate({
        scrollTop: $("#contacto").offset().top},
        'slow');
});

$("#galeria_header").click(function() {
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
var modal = document.getElementById("modal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img1 = document.getElementsByClassName('image1');
  for(var i = 0; i < img1.length; i++) {
      img1[i].onclick = function() {
          modal.style.display = "block";
          $('#carousel_modal').carousel(0);
      }
  }

var img2 = document.getElementsByClassName("image2");
  for(var i = 0; i < img2.length; i++) {
      img2[i].onclick = function() {
          modal.style.display = "block";
          $('#carousel_modal').carousel(1);
      }
  }

var img3 = document.getElementsByClassName("image3");
  for(var i = 0; i < img3.length; i++) {
      img3[i].onclick = function() {
          modal.style.display = "block";
          $('#carousel_modal').carousel(2);
      }
  }

var img4 = document.getElementsByClassName("image4");
  for(var i = 0; i < img4.length; i++) {
      img4[i].onclick = function() {
          modal.style.display = "block";
          $('#carousel_modal').carousel(3);
      }
  }

var img5 = document.getElementsByClassName("image5");
  for(var i = 0; i < img5.length; i++) {
      img5[i].onclick = function() {
          modal.style.display = "block";
          $('#carousel_modal').carousel(4);
      }
  }

var img6 = document.getElementsByClassName("image6");
  for(var i = 0; i < img6.length; i++) {
      img6[i].onclick = function() {
          modal.style.display = "block";
          $('#carousel_modal').carousel(5);
      }
  }

var span = document.getElementsByClassName("close")[0];

span.onclick = function() { 
  modal.style.display = "none";
}

$('#carousel_modal').carousel({
  interval: 6000,
  pause: "false"
});
// MODAL CAROUSEL END


// MODAL CONTACTO

var calendar = document.getElementsByClassName('calendar')[0];
calendar.onclick = function() {
    document.getElementsByClassName("contacto_modal")[0].style.display = "block";
}

var close_contacto = document.getElementsByClassName("close_contacto")[0];
var modal_contacto = document.getElementById("contacto_modal");

close_contacto.onclick = function() { 
  console.log('cierra')
  modal_contacto.style.display = "none";
}