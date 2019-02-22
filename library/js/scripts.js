/*
 * Bones Scripts File
 * Author: Eddie Machado
 *
 * This file should contain any js scripts you want to add to the site.
 * Instead of calling it in the header or throwing it inside wp_head()
 * this file will be called automatically in the footer so as not to
 * slow the page load.
 *
 * There are a lot of example functions and tools in here. If you don't
 * need any of it, just remove it. They are meant to be helpers and are
 * not required. It's your world baby, you can do whatever you want.
*/


/*
 * Get Viewport Dimensions
 * returns object with viewport dimensions to match css in width and height properties
 * ( source: http://andylangton.co.uk/blog/development/get-viewport-size-width-and-height-javascript )
*/
function updateViewportDimensions() {
	var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
	return { width:x,height:y };
}
// setting the viewport width
var viewport = updateViewportDimensions();


/*
 * Throttle Resize-triggered Events
 * Wrap your actions in this function to throttle the frequency of firing them off, for better performance, esp. on mobile.
 * ( source: http://stackoverflow.com/questions/2854407/javascript-jquery-window-resize-how-to-fire-after-the-resize-is-completed )
*/
var waitForFinalEvent = (function () {
	var timers = {};
	return function (callback, ms, uniqueId) {
		if (!uniqueId) { uniqueId = "Don't call this twice without a uniqueId"; }
		if (timers[uniqueId]) { clearTimeout (timers[uniqueId]); }
		timers[uniqueId] = setTimeout(callback, ms);
	};
})();

// how long to wait before deciding the resize has stopped, in ms. Around 50-100 should work ok.
var timeToWaitForLast = 100;


/*
 * Here's an example so you can see how we're using the above function
 *
 * This is commented out so it won't work, but you can copy it and
 * remove the comments.
 *
 *
 *
 * If we want to only do it on a certain page, we can setup checks so we do it
 * as efficient as possible.
 *
 * if( typeof is_home === "undefined" ) var is_home = $('body').hasClass('home');
 *
 * This once checks to see if you're on the home page based on the body class
 * We can then use that check to perform actions on the home page only
 *
 * When the window is resized, we perform this function
 * $(window).resize(function () {
 *
 *    // if we're on the home page, we wait the set amount (in function above) then fire the function
 *    if( is_home ) { waitForFinalEvent( function() {
 *
 *	// update the viewport, in case the window size has changed
 *	viewport = updateViewportDimensions();
 *
 *      // if we're above or equal to 768 fire this off
 *      if( viewport.width >= 768 ) {
 *        console.log('On home page and window sized to 768 width or more.');
 *      } else {
 *        // otherwise, let's do this instead
 *        console.log('Not on home page, or window sized to less than 768.');
 *      }
 *
 *    }, timeToWaitForLast, "your-function-identifier-string"); }
 * });
 *
 * Pretty cool huh? You can create functions like this to conditionally load
 * content and other stuff dependent on the viewport.
 * Remember that mobile devices and javascript aren't the best of friends.
 * Keep it light and always make sure the larger viewports are doing the heavy lifting.
 *
*/

/*
 * We're going to swap out the gravatars.
 * In the functions.php file, you can see we're not loading the gravatar
 * images on mobile to save bandwidth. Once we hit an acceptable viewport
 * then we can swap out those images since they are located in a data attribute.
*/
function loadGravatars() {
  // set the viewport using the function above
  viewport = updateViewportDimensions();
  // if the viewport is tablet or larger, we load in the gravatars
  if (viewport.width >= 768) {
  jQuery('.comment img[data-gravatar]').each(function(){
    jQuery(this).attr('src',jQuery(this).attr('data-gravatar'));
  });
	}
} // end function


/* This is the bit that makes the scroll animation

Uncomment  the below to exclude first section from animation
*/


//sr.reveal('.single-post:not(:first-child)');

sr.reveal('.single-post');




/*
 * Put all your regular jQuery in here.
*/
jQuery(document).ready(function($) {

	$("#mobile-nav").click(function(){
        $(".nav").toggleClass("show");
				$("#mobile-nav").toggleClass("show");
			});

			$(function() {
		    var city = $(".city");
				var large_white = $(".cloud-large-white");
				var medium_white = $(".cloud-medium-white");
		    $(window).scroll(function() {
		        var scroll = $(window).scrollTop();

		        if (scroll >= 30) {
		            city.addClass("fade");
								large_white.addClass("fade");
								medium_white.addClass("fade");
		        } else {
		            city.removeClass("fade");
								large_white.removeClass("fade");
								medium_white.removeClass("fade");
		        }

						if (scroll >= 200) {
		            city.removeClass('fade').addClass("relative");
								large_white.removeClass('fade').addClass("relative");
								medium_white.removeClass('fade').addClass("relative");
		        } else {
		            city.removeClass("relative");
								large_white.removeClass("relative");
								medium_white.removeClass("relative");
		        }
		    });
		});

			var cloud1path = {
					entry : {
						curviness: 1.0,
						autoRotate: false,
						values: [

							{x: 5,	y: -10}

							]
					},

					exit : {
					curviness: 1.0,
					autoRotate: false,
					values: [

							{x: -200,	y: 70},


						]
				},
				};

			var cloud2path = {
					entry : {
						curviness: 1.0,
						autoRotate: false,
						values: [

							{x: 200,	y: 10}

							]
					},

					exit : {
					curviness: 1.0,
					autoRotate: false,
					values: [

							{x: 200,	y: 70},


						]
				},
				};
			// init controller
			var controller = new ScrollMagic.Controller();

			// create cloud1 tween
				var tweenCloud1 = new TimelineMax()
					.add(TweenMax.to($("#cloud-md-sm-wt-1"), 1, {css:{bezier:cloud1path.exit}}))

				//build Cloud 1 Scene
				var sceneCloud1 = new ScrollMagic.Scene({
					duration: '200%',
					offset: 0
				})
				.setPin("#trigger-cloud-md-sm-wt-1", {pushFollowers: false})
				.setTween(tweenCloud1)
				//.addIndicators({
				//	name: "cloud-1",
				//	indent: 100
				//}) // add indicators (requires plugin)
				.addTo(controller);

			// create cloud2 tween
				var tweenCloud2 = new TimelineMax()
					.add(TweenMax.to($("#cloud-md-sm-wt-2"), 1, {css:{bezier:cloud2path.entry}}))

				//build Cloud 1 Scene
				var sceneCloud1 = new ScrollMagic.Scene({
					duration: '100%',
					offset: 0
				})
				.setPin("#trigger-cloud-md-sm-wt-2", {pushFollowers: false})
				.setTween(tweenCloud2)
				//.addIndicators({
				//	name: "cloud-1",
				//	indent: 100
				//}) // add indicators (requires plugin)
				.addTo(controller);

}); /* end of as page load scripts */
