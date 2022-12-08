
var owl = $('.owl-carousel');
owl.owlCarousel({
    items:3,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    //autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[3000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})
var owl2 = $('.owl-carousel_two');
owl2.owlCarousel({
    items:3,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    //autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl2.trigger('play.owl.autoplay',[3000])
})
$('.stop').on('click',function(){
    owl2.trigger('stop.owl.autoplay')
})