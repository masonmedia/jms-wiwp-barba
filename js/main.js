$(document).click(function(e) {
	if (!$(e.target).is('.navbar-collapse')) {
    	$('.collapse').collapse('hide');	    
    }
});

$(document).ready(function() {
  AOS.init();
});

//ajax no page load --> https://www.youtube.com/watch?v=ytKc0QsVRY4
//$(document).ready(function(){
////  init  
//    $('#content').load('content/index.php');
//    
////    handle menu clicks
//    $('#menu nav li a').click(function() {
//       var page = $(this).attr('href');
//        $('#content').load('content/' + page + '.php');
//        return false
//    });
//});

// http://www.web2feel.com/creating-a-fullscreen-hero-div-for-your-site-header/
// https://codepen.io/web2feel/pen/gbjNgw
jQuery(document).ready(function($){
 // Defining a function to set size for #hero 
	function fullscreen(){
		jQuery('#hero').css({
            width: jQuery(window).width(),
            height: jQuery(window).height()
        });
	}
  
	fullscreen();

  // Run the function in case of window resize
  jQuery(window).resize(function() {
       fullscreen();         
    });

});







//add rel="external" to each link
//$(function () {
//    $('a').each(function () {
//        $(this).attr('rel', 'external');
//    });
//});

//add rel="back" to each link
//$(function () {
//    $('a').each(function () {
//        $(this).attr('data-rel', 'back');
//    });
//});

//add rel="back" to each link
//$(function () {
//    $('a').each(function () {
//        $(this).attr('data-dom-cache', 'true');
//    });
//});


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

//force scroll top on page change

//$(document).ready(function(){
//    $(this).scrollTop(0);
//});
//
//window.onbeforeunload = function () {
//  window.scrollTo(0, 0);
//}

//back button functionality:  https://jqmtricks.wordpress.com/2014/12/01/detect-back-navigation/
//http://pracheek.blogspot.com/2013/08/hyperlinks-not-working-with-jquery.html

//$(document).ready(function(){
//    $("a").each(function(){
//          $(this).attr("rel","external");
//    });
//}); 

//barba

$('document').ready(function(){
            var transEffect = Barba.BaseTransition.extend({
                start: function(){
                  this.newContainerLoading.then(val => this.fadeInNewcontent($(this.newContainer)));
                },
                fadeInNewcontent: function(nc) {
                  nc.hide();
                  var _this = this;
                  $(this.oldContainer).fadeOut(1000).promise().done(() => {
                    nc.css('visibility','visible');
                    nc.fadeIn(1000, function(){
                      _this.done();
                    })
                  });
                }
            });
            Barba.Pjax.getTransition = function() {
              return transEffect;
            }
            Barba.Pjax.start();
          });


