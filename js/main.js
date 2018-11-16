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

new vUnit({
    CSSMap: {
        '.vh': {
            property: 'height',
            reference: 'vh'
        },
        '.vw': {
            property: 'width',
            reference: 'vw'
        },
        '.vwfs': {
            property: 'font-size',
            reference: 'vw'
        },
        '.vhmt': {
            property: 'margin-top',
            reference: 'vh'
        },
        '.vhmb': {
            property: 'margin-bottom',
            reference: 'vh'
        },
        '.vminw': {
            property: 'width',
            reference: 'vmin'
        },
        '.vmaxw': {
            property: 'width',
            reference: 'vmax'
        }
    }
}).init();

// http://www.web2feel.com/creating-a-fullscreen-hero-div-for-your-site-header/
// https://codepen.io/web2feel/pen/gbjNgw
//jQuery(document).ready(function($){
// // Defining a function to set size for #hero 
//	function fullscreen(){
//		jQuery('#hero').css({
//            width: jQuery(window).width(),
//            height: jQuery(window).height()
//        });
//	}
//  
//	fullscreen();
//
//  // Run the function in case of window resize
//  jQuery(window).resize(function() {
//       fullscreen();         
//    });
//
//});

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

//Barba js scripts (add to footer on each page)
//force scroll top on page change
//window.onbeforeunload = function(){ window.scrollTo(0,0); }
//$('document').ready(function(){
//    $(this).scrollTop(0);
//});
//
//$('document').ready(function(){
//    Barba.Pjax.start();
//});
//
//Barba.Dispatcher.on('newPageReady', function(currentStatus, oldStatus, container) {
//    $('document').ready(function(){
//        AOS.init();
//    });
//});
      
        
//back button functionality:  https://jqmtricks.wordpress.com/2014/12/01/detect-back-navigation/
//http://pracheek.blogspot.com/2013/08/hyperlinks-not-working-with-jquery.html

//$(document).ready(function(){
//    $("a").each(function(){
//          $(this).attr("rel","external");
//    });
//}); 




