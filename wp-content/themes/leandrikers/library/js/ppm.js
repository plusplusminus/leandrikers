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
    equalheight('.contact_image.js-height');

    var width = window.innerWidth; 
    if (width > 992) {
        equalheight('article > .js-height');
        jQuery('.article_image').each(function(){
            var div = jQuery(this);
            var image = div.find('img');
            div.css('background-image','url('+image.attr('src')+')');
        })
    } else {
        jQuery('.article_image').each(function(){
            var div = jQuery(this);
            div.css('background-image','none');
            div.css('height','auto');
        })
        
    }

}

jQuery(window).load(function() {

    jQuery('.owl-carousel').owlCarousel({
        items:1,
    });

    equalheight('.section_contact .js-height');

    var width = window.innerWidth; 
    if (width > 992) {
        equalheight('article > .js-height');
        jQuery('.article_image').each(function(){
            var div = jQuery(this);
            var image = div.find('img');
            div.css('background-image','url('+image.attr('src')+')');
        })
    } 
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

