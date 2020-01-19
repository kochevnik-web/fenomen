jQuery(document).ready(function($){
    $(document).on('click', '.hamburger-1', function(){
        $(this).css({opacity: '0'});
        $('#site-nav').addClass('open');
        $('body').addClass('no-scroll');
        $('.hamburger-2').css({opacity: '1'});
    });
    $(document).on('click', '.hamburger-2', function(){
        $('#site-nav').removeClass('open');
        $('body').removeClass('no-scroll');
        $(this).css({opacity: '0'});
        $('.hamburger-1').css({opacity: '1'});
    });
});