
jQuery(document).ready(function($) {
     
    // A. SCROLL TO LINK JS ++++++++++++++++++++++++++++++++++++++++++

         $(".astd-textLink, .astd-backUp").click(function(event){
             event.preventDefault();
             //calculate destination place
             var dest=0;
             if($(this.hash).offset().top > $(document).height()-$(window).height()){
                  dest=$(document).height()-$(window).height();
             }else{
                  dest=$(this.hash).offset().top;
             }
             //go to destination
             $('html,body').animate({scrollTop:dest}, 1000,'swing');
        });




    // A. END ++++++++++++++++++++++++++++++++++++++++++

    // B. SHOW HIDE LOGO ON SCROLL ++++++++++++++++++++++++++++++++++++++++++

    var t = $(".wrapper").offset().top;

    $(document).scroll(function(){

        if (document.documentElement.clientWidth > 640) {

            // Hide the logo, and show as you scroll
            if($(this).scrollTop() > t)
            {   
                $('.logo').css({"display":"block"});

            }else{
                $('.logo').css({"display":"none"});
            }


        } else {}


    }); 

    // B. END ++++++++++++++++++++++++++++++++++++++++++
    
    // C. TRUNCATE TEXT IN CLASS ++++++++++++++++++++++++++++++++++++++++++
    
    
    $(".event-title").text(function(index, currentText) {
        return currentText.substr(0, 10);
    });
    
    // C. END ++++++++++++++++++++++++++++++++++++++++++
     
     
     
});