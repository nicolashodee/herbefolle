


jQuery(document).ready(function($){
    
    $('.ept_swipe').addClass('ept_swipe--animate');
    wp_page_reload_on_back_button_js();
    
      //When an anchor link with the class of transitionLink is clicked stop the link from linking.
      //Then remove the 'showContent' class from the body, making it fade out. Then link to the correct link.
      $("a").click(function(event){
        event.preventDefault();
        var link = $(this).attr("href");
        var target = $(this).attr("target");
        if(link.startsWith('#')){
          //Don't run animation
        }
        else{
              if(target == '_blank'){
                window.open(link, '_blank');
              }else{
                $('.ept_swipe').removeClass('ept_swipe--animate');
                setTimeout(function() {
                    window.location.href = link;
                }, 500);
              }
            }
      });

});


