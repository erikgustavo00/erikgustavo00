
$(function () {

   var windowSize = $(window)[0].innerWidth;

    if(windowSize <= 668){
        $(" nav.mobile ul li a").click(function(e){   
            let element = $(this).attr('href');
            let scroll = $(element).offset().top;
            $('html,body').animate({scrollTop:scroll});
            setTimeout(() => {    
                $('nav.mobile ul li a').removeClass('activated--mobile');
                $(this).addClass('activated--mobile');
            }, 300);
            e.preventDefault()
        }); 

    }
    });