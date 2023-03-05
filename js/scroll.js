$(function(){
   
   
   
  
      $(" nav.desktop ul li a").click(function(e){   
         let element = $(this).attr('href');
         let scroll = $(element).offset().top;
         $('html,body').animate({scrollTop:scroll});
         setTimeout(() => {
            $('nav.desktop ul li a').removeClass('activated');
         $(this).addClass('activated');
         }, 2000);
         
         e.preventDefault()
      });   
   
   
        
   
   
      $(window).scroll(function(){
         var activedId;
         $('section').each(function(){
            sectionTop = $(this).offset().top;
            sectionHeight = $(this).outerHeight();
            windowHeight = $(window).height();
            halfWindowHeight = windowHeight / 2;
            sectionMiddle = sectionTop + sectionHeight / 2 - halfWindowHeight;
      
           
            if($(document).scrollTop() > sectionMiddle){
               sectId = $(this).attr('id');
               $('main_section').removeClass('activated');
               activedId = $(this).addClass('activated').attr("id");
            }
         });
         $("nav.desktop ul li ").each(function(index, el){
            var liChildren = $(this).children('a');
            var liChildrenHref = $(this).children('a').attr('href');
            if(liChildrenHref === '#'+activedId ){
                  $("nav ul li a").removeClass('activated');
                  $(liChildren).addClass('activated');
               }    
         });
         
      });
});

