var p = $("#title");
var menu = $("#hiddenMenu");


//Menu appears below fold
$(function(){
  var pTop = p.offset().top;
  menu.hide();

  $(window).scroll(function() { //when window is scrolled
    var position = (pTop - $(window).scrollTop());//position of element w.r.t top
    if (position < 0) {
      menu.slideDown(300);
    } else{
      menu.slideUp(100);
    }
    return;
  });
});

//at screen width, menu changes to hamburger menu
function mobileViewUpdate() {

  if ($(window).width() < 700) {
    $("#desktopMenu").addClass('hide');
    $("#hamburger").removeClass('hide');
    $("#scrollHamburger").removeClass('hide');
    $("#scrollDesktopMenu").addClass('hide');
  } else {
    $("#desktopMenu").removeClass('hide');
    $("#hamburger").addClass('hide');
    $("#scrollHamburger").addClass('hide');
    $("#mobileMenu").addClass('hide');
    $("#scrollDesktopMenu").removeClass('hide');
  }
}
$(window).on('load', mobileViewUpdate());
$(window).resize(mobileViewUpdate);


 //on hamburger click, menu opens
$(function() {
  $("#hamburger, #scrollHamburger").on('click', function() {
    $("#mobileMenu").removeClass('hide');
  });
});
 //on exit click, menu closes
$(function() {
  $("#exit").on('click', function() {
    $("#mobileMenu").addClass('hide');
  });
});

//Map api
function initMap() {
      // Create a map object and specify the DOM element for display.
      var cowork = {lat: 39.1649964, lng: -86.5382334}
      var map = new google.maps.Map(document.getElementById('map'), {
        scrollwheel: false,
        zoom: 18,
        center: cowork
      });
      var marker = new google.maps.Marker({
        position: cowork,
        map: map,
        title: "Cowork"
      });
      var contentString =
      '<div class="info-container center">' + '<a href="https://www.google.com/search?q=cowork+bloomington&oq=cowork+&aqs=chrome.0.69i59j69i60j69i61l3j0.2425j0j7&sourceid=chrome&ie=UTF-8#lrd=0x886c66ddaa8cd77d:0x62d180cce00eb339,1" target="_blank">' +
      '<h3>Cowork</h3>' + '<br/>' + '<h5>213 S Rogers St, Bloomington, IN 47404</h5>' + '<div class="rating-img center"></div>' +
      '<hr/>' + '<h5>(812) 250-9714</h5>' + '</a>' + '</div>';
      var infowindow = new google.maps.InfoWindow({
        content: contentString
       });
      function openInfoWindow () {
        infowindow.open(map, marker);
      }
       $(window).on('load', openInfoWindow());
       $(window).resize(openInfoWindow);
    }
    $(function() {
      $(window).resize(initMap);
    });
