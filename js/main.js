// Please note, the DOM should be ready
//https://github.com/luruke/barba.js/issues/158: help with scroll to top after route/page change

//          $('document').ready(function(){
//            var transEffect = Barba.BaseTransition.extend({
//                start: function(){
//                  this.newContainerLoading.then(val => this.fadeInNewcontent($(this.newContainer)));
//                },
//                fadeInNewcontent: function(nc) {
//                  nc.hide();
//                  var _this = this;
//                  $(this.oldContainer).fadeOut(500).promise().done(() => {
//                    nc.css('visibility','visible');
//					$(window).scrollTop(0); //scroll to top on page change
//                    nc.fadeIn(500, function(){
//                      _this.done();
//                    })
//                  });
//                }
//            });
//            Barba.Pjax.getTransition = function() {
//              return transEffect;
//            }
//            Barba.Pjax.start();
//          });
//

//new

          $('document').ready(function(){
            var transEffect = Barba.BaseTransition.extend({
                start: function(){
                  this.newContainerLoading.then(val => this.fadeInNewcontent($(this.newContainer)));
                },
                fadeInNewcontent: function(nc) {
                  nc.hide();
                  var _this = this;
                  $(this.oldContainer).slideUp(1000).promise().done(() => {
                    nc.css('visibility','visible');
					$(window).scrollTop(0); //scroll to top on page change
                    nc.fadeIn(800, function(){
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

// + pages
	
var Homepage = Barba.BaseView.extend({
  namespace: 'homepage',
  onEnter: function() {
      // The new Container is ready and attached to the DOM.
	  $(h2).slideUp(1000);
  },
  onEnterCompleted: function() {
      // The Transition has just finished.
  },
  onLeave: function() {
      // A new Transition toward a new page has just started.
  },
  onLeaveCompleted: function() {
      // The Container has just been removed from the DOM.
  }
});

// Don't forget to init the view!
Homepage.init();
 Barba.Pjax.start();

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
	scale: 0,
	reset: true
});
sr.reveal('.fade-in-slow', {
	duration: 4000,
	delay: 300,
	distance: '0',
	origin: 'center',
	opacity: 0,
	scale: 0,
	reset: true
});
sr.reveal('.enter-top', {
	duration: 2000,
	distance: '60px',
	origin: 'top',
	opacity: 0,
	scale: 0,
	reset: true
});
sr.reveal('.enter-left', {
	duration: 2000,
	distance: '60px',
	origin: 'left',
	opacity: 0,
	scale: 0,
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
	scale: 0,
	reset: true
});
sr.reveal('.enter-bottom-slow', {
	duration: 4000,
	delay: 600,
	distance: '60px',
	origin: 'bottom',
	opacity: 0,
	scale: 0,
	reset: true
});