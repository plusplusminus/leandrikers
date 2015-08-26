jQuery(document).ready(function(){

    initHeader();
    addListeners();
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
    var height = window.innerHeight;  
    largeHeader = document.getElementById('home_header');
    if (largeHeader) {
        var nav = document.getElementById('main-header').clientHeight;
        largeHeader.style.height = (height-nav+50)+'px';
    } 
}

jQuery(window).load(function() {

  jQuery('.owl-carousel').owlCarousel({
    items:1,
  });


});