;(function ($, window, undefined) {
  'use strict';

  var $doc = $(document),
      Modernizr = window.Modernizr;

  
  $.fn.foundationAlerts           ? $doc.foundationAlerts() : null;
  $.fn.foundationAccordion        ? $doc.foundationAccordion() : null;
  $.fn.foundationTooltips         ? $doc.foundationTooltips() : null;
  $('input, textarea').placeholder();
  
  
  $.fn.foundationButtons          ? $doc.foundationButtons() : null;
  
  
  $.fn.foundationNavigation       ? $doc.foundationNavigation() : null;
  
  
  $.fn.foundationTopBar           ? $doc.foundationTopBar() : null;
  
  $.fn.foundationCustomForms      ? $doc.foundationCustomForms() : null;
  $.fn.foundationMediaQueryViewer ? $doc.foundationMediaQueryViewer() : null;
  
    
    $.fn.foundationTabs             ? $doc.foundationTabs() : null;
    
  
  
    $("#featured").orbit();
  

  // UNCOMMENT THE LINE YOU WANT BELOW IF YOU WANT IE8 SUPPORT AND ARE USING .block-grids
  // $('.block-grid.two-up>li:nth-child(2n+1)').css({clear: 'both'});
  // $('.block-grid.three-up>li:nth-child(3n+1)').css({clear: 'both'});
  // $('.block-grid.four-up>li:nth-child(4n+1)').css({clear: 'both'});
  // $('.block-grid.five-up>li:nth-child(5n+1)').css({clear: 'both'});

  // Hide address bar on mobile devices
  if (Modernizr.touch) {
    $(window).load(function () {
      setTimeout(function () {
        window.scrollTo(0, 1);
      }, 0);
    });
  }


  /*
  $('#container').freetile({
      selector: '.thread',
      animate: true,
	  
  });

  $('.thread').wookmark();

  */
  
  // By Chris Coyier & tweaked by Mathias Bynens
/*
  $(function() {

  	// Find all YouTube videos
  	var $allVideos = $("iframe[src^='http://www.youtube.com']"),

  	    // The element that is fluid width
  	    $fluidEl = $(".thread");

  	// Figure out and save aspect ratio for each video
  	$allVideos.each(function() {

  		$(this)
  			.data('aspectRatio', this.height / this.width)
			
  			// and remove the hard coded width/height
  			.removeAttr('height')
  			.removeAttr('width');

  	});

  	// When the window is resized
  	// (You'll probably want to debounce this)
  	$(window).resize(function() {

  		var newWidth = $fluidEl.width();
		
  		// Resize all videos according to their own aspect ratio
  		$allVideos.each(function() {

  			var $el = $(this);
  			$el
  				.width(newWidth)
  				.height(newWidth * $el.data('aspectRatio'));

  		});

  	// Kick off one resize to fix all videos on page load
  	}).resize();

  });
  
  $("#container").gridalicious({
    gutter: 2,
    width: 50,
	
  });
*/


    var viewportWidth = $(window).width();
    var viewportHeight = $(window).height();

        console.log(viewportWidth);
        console.log(viewportHeight);

            var thirtypc = (60 * viewportWidth) / 100;
            var seventypc = (40 * viewportWidth) / 100;
            thirtypc = parseInt(thirtypc) + 'px'
            seventypc = parseInt(seventypc) + 'px'
            seventypc = viewportWidth - 320;
            seventypcpx = parseInt(seventypc) + 'px'
            $("div.main").css('width',seventypcpx);
            $("div.side").css('width','300px');
            $("div.sideshow").css('width','300px');
            $("div.thread-content").css('width',(seventypc-40) + 'px');
            $("div.thread-content").css('margin-left','80px');
            $("div.thread-content").css('margin-right','100px');
            $("div.thread-content").css('margin-top','40px');
   
            var mid = parseInt(viewportHeight/2) + 'px';

            $("div.left").css('margin-top',mid);
            $("div.right").css('margin-top',mid);



        $(window).resize(function() {

        });

})(jQuery, this);
