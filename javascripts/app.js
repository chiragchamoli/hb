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




    var viewportWidth = $(window).width();
    var viewportHeight = $(window).height();

        console.log(viewportWidth);
        console.log(viewportHeight);

            var thirtypc = (40 * viewportWidth) / 100;
            var seventypc = (60 * viewportWidth) / 100;
            
            thirtypc = parseInt(thirtypc) + 'px'
            seventypc = parseInt(seventypc) + 'px'
            
            seventypc = viewportWidth - 320;
            
            seventypcpx = parseInt(seventypc) + 'px'
            
            $("div.main").css('width',seventypcpx);
            $("div.side").css('width','300px');
           
            $("div.sideshow").css('width','300px');
           
            var rws = parseInt((60 * viewportWidth) / 100);
            
            
            $("div.thread-content").css('width',(rws-40) + 'px');
            
            $("div.thread-content").css('margin-left','80px');
            $("div.thread-content").css('margin-right','100px');
            $("div.thread-content").css('margin-top','40px');
   
            var mid = parseInt(viewportHeight/2) + 'px';

            $("div.left").css('margin-top',mid);
            $("div.right").css('margin-top',mid);



        $(window).resize(function() {

        });

})(jQuery, this);
