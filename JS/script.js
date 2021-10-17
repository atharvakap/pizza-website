$(document).ready(function() {
   $('.js--sectionFeatures').waypoint(function(direction) {
       if (direction == "down") {
           $('.stickyCont').css('visibility', 'visible');
       } else {
           $('.stickyCont').css('visibility', 'hidden');
       }
   }, {
       offset: '60px;'
   });

   $('.js--scrollToBestSeller').click(function() {
       $('html, body').animate({scrollTop: $('.js--sectionBestseller').offset().top}, 2000);
   });

    $('.js--scrollToVeg').click(function() {
        $('html, body').animate({scrollTop: $('.js--sectionVeg').offset().top}, 2000);
    });

    $('.js--scrollToNonVeg').click(function() {
        $('html, body').animate({scrollTop: $('.js--sectionNonVeg').offset().top}, 2000);
    });

    $('.js--scrollToNewest').click(function() {
        $('html, body').animate({scrollTop: $('.js--sectionNewest').offset().top}, 2000);
    });

    $('.js--scrollToMeals').click(function() {
        $('html, body').animate({scrollTop: $('.js--sectionMeals').offset().top}, 2000);
    });

    $('.js--scrollToAboutUs').click(function() {
        $('html, body').animate({scrollTop: $('.js--sectionFeatures').offset().top}, 2000);
    });

//    $('.header').waypoint(function(direction) {
//        if (direction == "down") {
//            $
//        } else {

//        }
//    });

    $('.back').click(function() {
        $('.signUP').css('visibility', 'hidden');
    });

    $('.signUp').click(function() {
        $('.signUP').css('visibility', 'visible');
    });

    $('.back').click(function() {
        $('.signUP').css('visibility', 'hidden');
    });

    $('.button').click(function() {
        $('.signUP').css('visibility', 'visible');
    });

});