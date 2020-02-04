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

    if($(this).scrollTop() > 50){
        $('header').addClass('slideup');
    } else {
        $('header').removeClass('slideup');
    }

    $(window).scroll(function(){
        if($(this).scrollTop() > 50){
            $('header').addClass('slideup');
        } else {
            $('header').removeClass('slideup');
        }
    });

    $(document).on('click', '#reviews_btn', function(){
        if($(window).width() <= 992 ) {
            $('.review_hide').detach().appendTo($('#rev_column'));
        }
        $('.review_hide').fadeIn();

    });

    function thoughtsBg () {
        let w = $('#thoughts .container').width();
        let l = $('#thoughts .container').offset().left;
        $('#thoughts').css({'background-position-x': (l - 285 ) + 'px, ' + (w + l - 130) + 'px', 'background-position-y': '-26px, -26px'});
    }

    $(window).resize(function(){
        thoughtsBg ();
    });

    thoughtsBg ();

    //Маска под телефонный номер для поля Input
    $('input[name="fenomen-phone"]').mask("+7 (999) 999-99-99");
});