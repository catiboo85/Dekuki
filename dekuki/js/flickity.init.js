jQuery(document).ready(function($){
    $('.main-carousel').flickity({
        // options
        cellAlign: 'left',
        contain: true,
        autoPlay: 6000,
        wrapAround: true,
        selectedAttraction: 0.009,
        friction: 0.3,
        prevNextButtons: false,
      });
});

