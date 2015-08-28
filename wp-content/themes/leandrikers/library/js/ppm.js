jQuery(document).ready(function(){

    initHeader();
    addListeners();

    jQuery('.js-comments').on('click', function(e){
        e.preventDefault();
        var disqus_shortname = 'theprettyblog';
        jQuery.ajax({
              type: "GET",
              url: "http://" + disqus_shortname + ".disqus.com/embed.js",
              dataType: "script",
              cache: true
        });
        jQuery(this).fadeOut();
    });


})

function initHeader() {
    var height = window.innerHeight;
    largeHeader = document.getElementById('home_header');
    if (largeHeader) {
        var nav = document.getElementById('main-header').clientHeight;      
        largeHeader.style.height = (height-nav+50)+'px';
    } 
}

function addListeners() {
    window.addEventListener('resize', resize);
}

function resize() {
     equalheight('.js-height');
}

jQuery(window).load(function() {

    jQuery('.owl-carousel').owlCarousel({
        items:1,
    });

    equalheight('article > .js-height');

});

equalheight = function(container){

    var currentTallest = 0,
       currentRowStart = 0,
       rowDivs = new Array(),
       $el,
       topPosition = 0;
    jQuery(container).each(function() {

        $el = jQuery(this);
        jQuery($el).height('auto')
        topPostion = $el.position().top;

        if (currentRowStart != topPostion) {
            for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
                rowDivs[currentDiv].height(currentTallest);
            }
            rowDivs.length = 0; // empty the array
            currentRowStart = topPostion;
            currentTallest = $el.height();
            rowDivs.push($el);
        } else {
            rowDivs.push($el);
            currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
        }
        for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
            rowDivs[currentDiv].height(currentTallest);
        }
    });
}

