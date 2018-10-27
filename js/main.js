$(document).ready(function() {
  $(".animsition").animsition({
//    inClass: 'fade-in',
//    outClass: 'fade-out',
//    inDuration: 1500,
//    outDuration: 800,
    linkElement: '.animsition-link',
    // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
    loading: false,
    loadingParentElement: 'body', //animsition wrapper element
    loadingClass: 'animsition-loading',
    loadingInner: '', // e.g '<img src="loading.svg" />'
    timeout: false,
    timeoutCountdown: 5000,
    onLoadEvent: true,
    browser: [ 'animation-duration', '-webkit-animation-duration'],
    // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
    // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
    overlay : false,
    overlayClass : 'animsition-overlay-slide',
    overlayParentElement : 'body',
    transition: function(url){ window.location.href = url; }
  });
});

// Rellax parallax
     
  var rellax = new Rellax('.rellax', {
//    wrapper: '.rellax-wrap',
    speed: -1,
    center: true,
    wrapper: null,
    round: true,
    vertical: true,
    horizontal: false
  });

//scroll reveal 

window.sr = ScrollReveal();
sr.reveal('.slide-top', {
	duration: 1000,
	distance: '200px',
	origin: 'top',
	opacity: 0,
	scale: 0,
	reset: true
});
sr.reveal('.fade-in', {
	duration: 2000,
	distance: '0',
	origin: 'center',
	opacity: 0,
	reset: true
});
sr.reveal('.fade-in-slow', {
	duration: 4000,
	delay: 300,
	distance: '0',
	origin: 'center',
	opacity: 0,
	reset: true
});
sr.reveal('.enter-top', {
	duration: 2000,
	distance: '60px',
	origin: 'top',
	opacity: 0,
	reset: true
});
sr.reveal('.enter-left', {
	duration: 2000,
	distance: '150px',
	origin: 'left',
	opacity: 0,
	reset: true
});
sr.reveal('.enter-right', {
	duration: 2000,
	distance: '150px',
	origin: 'right',
	opacity: 0,
	reset: true
});
sr.reveal('.enter-left-slow', {
	duration: 6000,
	delay: 600,
	distance: '60px',
	origin: 'left',
	opacity: 0,
	scale: 0,
	reset: true
});
sr.reveal('.enter-bottom', {
	duration: 2000,
	distance: '60px',
	origin: 'bottom',
	opacity: 0,
    easing: 'cubic-bezier(0.5, 0, 0, 1)',
	reset: true
});
sr.reveal('.enter-bottom-slow', {
	duration: 4000,
	delay: 600,
	distance: '60px',
	origin: 'bottom',
	opacity: 0,
	reset: true
});
sr.reveal('.w-left', {
	duration: 1000,
	delay: 0,
	distance: '60px',
	origin: 'bottom',
	opacity: 0,
	reset: true
});

//back button functionality:  https://jqmtricks.wordpress.com/2014/12/01/detect-back-navigation/
//http://pracheek.blogspot.com/2013/08/hyperlinks-not-working-with-jquery.html

//$(document).ready(function(){
//    $("a").each(function(){
//          $(this).attr("rel","external");
//    });
//}); 



//smooth scroll --> https://css-tricks.com/snippets/jquery/smooth-scrolling/

$(document).ready(function(){
  // Add smooth scrolling to all links
  $("#banner a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
//        window.location.hash = hash;
      });
    } // End if
  });
});


