jQuery(document).ready(function($) {
    
 $(".reveal").on('click touchstart', function (e) {

    var target = $(this).attr('href');

    if ($(target).css('display') === 'none') {
      $(target).removeClass('not-active');
    }

    else {
      $(target).addClass('not-active');
    }

    e.preventDefault(); 

});
    
});