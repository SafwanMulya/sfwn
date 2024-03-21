$(window).scroll(function(){
    if(wScroll > $('.portfolio').offset().top){
        $('.portfolio .thumbnail').addClass('muncul');
    }
});