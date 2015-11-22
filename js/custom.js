/**
 * http://tutatheme.com
 * Copyright (c) 2014 tutatheme
 *
 * Licensed under the GPL license:
 *  http://www.gnu.org/licenses/gpl.html
  **/

/**
 *   1- Main menu
 *   2- Mobile menu
 *   3- Owl Carousel
 *   4- Accordion
 *   5- Toggle
 *   6- Google Map
 *   7- Vertical Menu
 *   8- Waypoint
 *-----------------------------------------------------------------
 **/

 var tuta_variable = {
    "contact": {
        "address": "Lorem ipsum dolor sit amet, consectetur adipiscing elit",
        "marker": "/url image"
    },
    "i18n": {
        "VIEW": "View",
        "VIEWS": "Views",
        "validate": {
            "form": {
                "SUBMIT": "Submit",
                "SENDING": "Sending..."
            },
            "name": {
                "REQUIRED": "Please enter your name",
                "MINLENGTH": "At least {0} characters required"
            },
            "email": {
                "REQUIRED": "Please enter your email",
                "EMAIL": "Please enter a valid email"
            },
            "url": {
                "REQUIRED": "Please enter your url",
                "URL": "Please enter a valid url"
            },
            "message": {
                "REQUIRED": "Please enter a comment",
                "MINLENGTH": "At least {0} characters required"
            }
        }
    }
};

/* =========================================================
1. Main menu
============================================================ */

Modernizr.load([
    {
        load: 'js/superfish.js',
        complete: function () {

            //Main menu
            jQuery('#main-menu').superfish({
                delay: 400,
                speed: 'fast',
                cssArrows: false
            });

        }
    }
]);

/* =========================================================
2. Mobile menu
============================================================ */

Modernizr.load([
  {
    load: 'js/jquery.navgoco.js',
    complete: function () {

        jQuery("#mobile-menu").navgoco({accordion: true});
        jQuery("#main-nav").find("i").click(function(){
            jQuery( "#mobile-menu" ).stop().slideToggle( "slow" );
        });
    }
  }
]);

/* =========================================================
3. Owl Carousel
============================================================ */

if (jQuery('#tuta-owl-top-slide').length > 0) {

    Modernizr.load([
        {
            load: 'js/owl.carousel.min.js',
            complete: function () {

                var $slide = $("#tuta-owl-top-slide");
                var $control_top_slide = $slide.next();
                var $control_item = $control_top_slide.find('li');
                var $find_cars = $(".find-cars");
                var $intro = $slide.find(".intro");
                var setIndex = 0;

                $control_item.each(function(index) {
                     if($(this).hasClass('active')) {
                        setIndex = index;
                     }
                });

                $slide.owlCarousel({
                    items : 1,
                    itemsDesktop : [1210,1],
                    itemsDesktopSmall : [992,1],
                    itemsTablet : [768,1],
                    itemsMobile : [480,1],
                    autoHeight: false,
                    lazyLoad : true,
                    navigation : false,
                    pagination: false,
                    navigationText: false,
                    slideSpeed: 600,
                    paginationSpeed: 600,
                    autoPlay: 10000,
                    afterAction: afterAction

                });

                var owl = $slide.data('owlCarousel');
                owl.goTo(setIndex);


                function afterAction() {
                    $control_item.removeClass("active");
                    $control_item.eq(this.owl.currentItem).addClass('active');

                    //position
                    var height_slide = $slide.outerHeight();
                    if($intro.length <= 0) { //slide home 1
                        if($(window).width() > 1210) {
                            height_slide -= 64;
                        }
                    }
                    
                    $control_top_slide.css("top",  (height_slide - $control_top_slide.outerHeight())/2);
                    $find_cars.css("top", (height_slide - $find_cars.outerHeight())/2);
                    $intro.css("top", (height_slide - $intro.outerHeight())/2);

                    //reset height:auto
                    //$(".tuta-top-slide").css("height", "auto");
                    //$(".slide-wrapper-outer").css("height", "auto");

                    //show
                    $(".tuta-home-1").find(".find-cars").fadeIn(300);
                    $(".control-top-slide").fadeIn(300);
                }

                $control_item.click(function() {
                    owl.goTo($(this).index());
                    return false;
                });

                if($slide.parents(".tuta-home-2").length) {
                    $control_top_slide.mouseenter(function() {
                        //$(".mask").css("opacity", 0);
                        $(".mask").toggleClass("opacity-0");
                    });
                    $control_top_slide.mouseleave(function() {
                        //$(".mask").css("opacity", 1);
                        $(".mask").toggleClass("opacity-0");
                    });
                }                
            }
        }
    ]);
}

if (jQuery('.owl-carosel-fd-1').length > 0) {

    Modernizr.load([
        {
            load: 'js/owl.carousel.min.js',
            complete: function () {
                jQuery('.owl-carosel-fd-1').owlCarousel({
                    items : 1,
                    itemsDesktop : [1210,1],
                    itemsDesktopSmall : [992, 1],
                    itemsTablet : [768,1],
                    itemsMobile : [480,1],
                    lazyLoad : true,
                    navigation : false,
                    pagination: true,
                    navigationText : false
                });
            }
        }
    ]);
}

if (jQuery('.owl-carosel-fd-2').length > 0) {

    Modernizr.load([
        {
            load: 'js/owl.carousel.min.js',
            complete: function () {
                jQuery('.owl-carosel-fd-2').owlCarousel({
                    items : 1,
                    itemsDesktop : [1210,1],
                    itemsDesktopSmall : [992,1],
                    itemsTablet : [768,1],
                    itemsMobile : [480,1],
                    lazyLoad : true,
                    navigation : false,
                    pagination: true,
                    navigationText : false
                });
            }
        }
    ]);
}

if (jQuery('.sub-page-slide').length > 0) {

    var $sub_page_slide = jQuery(".sub-page-slide");

    Modernizr.load([
      {
        load: 'js/owl.carousel.min.js',
        complete: function () {

            var $control_sub_page_slide = $sub_page_slide.next(".control-sub-page-slide").children();

            $sub_page_slide.owlCarousel({
                items : 1,
                itemsDesktop : [1210,1],
                itemsDesktopSmall : [992,1],
                itemsTablet : [768,1],
                itemsMobile : [480,1],
                lazyLoad : true,
                navigation : false,
                pagination: false,
                navigationText : false,
                afterAction: afterAction
            });

            var owl = $sub_page_slide.data('owlCarousel');

            function afterAction() {
                $control_sub_page_slide.parent().fadeIn(300);
                $control_sub_page_slide.removeClass("active");
                $control_sub_page_slide.eq(this.owl.currentItem).addClass('active');
            }

            $control_sub_page_slide.click(function() {
                owl.goTo($(this).index());
                return false;
            });
        }
      }
    ]);
}

if (jQuery('.owl-carosel-la-1').length > 0) {

    Modernizr.load([
        {
            load: 'js/owl.carousel.min.js',
            complete: function () {
                jQuery('.owl-carosel-la-1').owlCarousel({
                    items : 1,
                    itemsDesktop : [1210,1],
                    itemsDesktopSmall : [992,1],
                    itemsTablet : [768,1],
                    itemsMobile : [480,1],
                    lazyLoad : true,
                    navigation : false,
                    pagination: true,
                    navigationText : false
                });
            }
        }
    ]);
}

if (jQuery('.owl-carousel-fp').length > 0) { //featured products - home3

     Modernizr.load([
         {
             load: 'js/owl.carousel.min.js',
             complete: function () {
                 jQuery('.owl-carousel-fp').owlCarousel({
                     items : 4,
                     itemsDesktop : [1210,4],
                     itemsDesktopSmall : [992,3],
                     itemsTablet : [768,2],
                     itemsMobile : [480,1],
                     lazyLoad : true,
                     lazyEffect: "fade",
                     autoHeight: true,
                     navigation : false,
                     pagination: false,
                     navigationText : false
                 });

                 var owl = $(".owl-carousel-fp").data('owlCarousel');
                 var $control = $(".control-wrap");

                 //create btn next. prev
                 $control.find(".next").click(function() {
                     owl.next();
                     return false;
                 });
                 $control.find(".prev").click(function() {
                     owl.prev();
                     return false;
                 });
             }
         }
     ]);
}

if (jQuery('.owl-carousel-fp-3').length > 0) { //new products - home4

    Modernizr.load([
        {
            load: 'js/owl.carousel.min.js',
            complete: function () {

                jQuery('.owl-carousel-fp-3').owlCarousel({
                    items : 3,
                    itemsDesktop : [1210,3],
                    itemsDesktopSmall : [992,3],
                    itemsTablet : [768,2],
                    itemsMobile : [480,1],
                    lazyLoad : true,
                    lazyEffect: "fade",
                    autoHeight: true,
                    navigation : true,
                    pagination: false,
                    navigationText : false
                });
            }
        }
    ]);
}

if (jQuery('.owl-carousel-np-1').length > 0) { //new products - home4

    Modernizr.load([
        {
            load: 'js/owl.carousel.min.js',
            complete: function () {

                jQuery('.owl-carousel-np-1').owlCarousel({
                    items : 4,
                    itemsDesktop : [1210,4],
                    itemsDesktopSmall : [992,4],
                    itemsTablet : [768,2],
                    itemsMobile : [480,1],
                    lazyLoad : true,
                    lazyEffect: "fade",
                    autoHeight: true,
                    navigation : true,
                    pagination: false,
                    navigationText : false
                });
            }
        }
    ]);
}

if (jQuery('.owl-carousel-np-2').length > 0) { //new products - home5

    Modernizr.load([
        {
            load: 'js/owl.carousel.min.js',
            complete: function () {

                jQuery('.owl-carousel-np-2').owlCarousel({
                    items : 3,
                    itemsDesktop : [1210,3],
                    itemsDesktopSmall : [992,3],
                    itemsTablet : [768,2],
                    itemsMobile : [480,1],
                    lazyLoad : true,
                    lazyEffect: "fade",
                    autoHeight: true,
                    navigation : true,
                    pagination: false,
                    navigationText : false
                });
            }
        }
    ]);
}

if (jQuery('.owl-carousel-pd').length > 0) { //products detail - home4

    Modernizr.load([
        {
            load: 'js/owl.carousel.min.js',
            complete: function () {
                jQuery('.owl-carousel-pd').owlCarousel({
                    items : 1,
                    itemsDesktop : [1210,1],
                    itemsDesktopSmall : [992,1],
                    itemsTablet : [768,1],
                    itemsMobile : [480,1],
                    lazyLoad : true,
                    autoHeight: true,
                    navigation : true,
                    pagination: false,
                    navigationText : false
                });
            }
        }
    ]);
}

if (jQuery('.top-product-list').length > 0) { //products list - home4

    Modernizr.load([
        {
            load: 'js/owl.carousel.min.js',
            complete: function () {
                jQuery('.top-product-list').owlCarousel({
                    items : 1,
                    itemsDesktop : [1210,1],
                    itemsDesktopSmall : [992,1],
                    itemsTablet : [768,1],
                    itemsMobile : [480,1],
                    lazyLoad : true,
                    autoHeight: true,
                    navigation : false,
                    pagination: true,
                    navigationText : false
                });
            }
        }
    ]);
}

if (jQuery('.owl-carousel-lb').length > 0) { //latest blogs - home5

    Modernizr.load([
        {
            load: 'js/owl.carousel.min.js',
            complete: function () {
                jQuery('.owl-carousel-lb').owlCarousel({
                    items : 3,
                    itemsDesktop : [1210,3],
                    itemsDesktopSmall : [992,3],
                    itemsTablet : [768,2],
                    itemsMobile : [480,1],
                    lazyLoad : true,
                    autoHeight: true,
                    navigation : true,
                    pagination: false,
                    navigationText : false
                });
            }
        }
    ]);
}

if (jQuery('.owl-carousel-tma-3').length > 0) { //testimonial - home5

    Modernizr.load([
        {
            load: 'js/owl.carousel.min.js',
            complete: function () {
                jQuery('.owl-carousel-tma-3').owlCarousel({
                    items : 1,
                    itemsDesktop : [1210,1],
                    itemsDesktopSmall : [992,1],
                    itemsTablet : [768,1],
                    itemsMobile : [480,1],
                    lazyLoad : true,
                    autoHeight: true,
                    navigation : true,
                    pagination: false,
                    navigationText : false
                });
            }
        }
    ]);
}

if (jQuery('#tuta-owl-top-slide-1').length > 0) { //top-slide - home5

    Modernizr.load([
        {
            load: 'js/owl.carousel.min.js',
            complete: function () {
                jQuery('#tuta-owl-top-slide-1').owlCarousel({
                    items : 1,
                    itemsDesktop : [1210,1],
                    itemsDesktopSmall : [992,1],
                    itemsTablet : [768,1],
                    itemsMobile : [480,1],
                    lazyLoad : true,
                    autoHeight: true,
                    navigation : true,
                    pagination: false,
                    navigationText : false
                });
            }
        }
    ]);
}

if (jQuery('.owl-carousel-blockquote').length > 0) { //testimonial - home-3-4

    Modernizr.load([
        {
            load: 'js/owl.carousel.min.js',
            complete: function () {

                var $oc_blockquote = $(".owl-carousel-blockquote");
                var $control_item = $oc_blockquote.prev().find("li");
                //set width, height
                setSize();
                
                $oc_blockquote.owlCarousel({
                    items : 1,
                    itemsDesktop : [1210,1],
                    itemsDesktopSmall : [992,1],
                    itemsTablet : [768,1],
                    itemsMobile : [480,1],
                    lazyLoad : true,
                    autoHeight: true,
                    navigation : false,
                    pagination: false,
                    navigationText : false,
                    afterAction: afterAction
                });

                var owl = $oc_blockquote.data('owlCarousel');

                function afterAction() {
                    $control_item.removeClass("active");
                    $control_item.eq(this.owl.currentItem).addClass('active');
                }

                $control_item.click(function() {
                    owl.goTo($(this).index());
                    return false;
                });

                $(window).resize(function() {
                    setSize();
                });

                function setSize() {//alert($(window).width());
                    if($(window).width() >= 992) {
                        $oc_blockquote.css("width", $oc_blockquote.parent().outerWidth() - $oc_blockquote.parent().find(".testimonial-box").outerWidth(true) - 1);
                        $oc_blockquote.find(".blockquote").css("height", $oc_blockquote.prev().outerHeight());
                    } else {
                        $oc_blockquote.css("width", $oc_blockquote.parent().outerWidth());
                        $oc_blockquote.find(".blockquote").css("height", "auto");
                    }
                }
            }
        }
    ]);
}




/* =========================================================
4. Accordion
============================================================ */

Modernizr.load([ {
    load: 'js/jquery-ui.min.js',
    complete: function () {
        $(".tuta-accordion" ).accordion({
            heightStyle: "content",
            icons: false
            //collapsible: true
        });
    }
}]);

/* =========================================================
5. Toggle
============================================================ */

$(document).ready(function() {
    var $lr_toggle = $(".xs-box");
    var $head_toggle = $lr_toggle.find("h4");

    //chua co active, dat mac dinh
    if($lr_toggle.find(".active").length <= 0) {
        $head_toggle.eq(0).addClass('active');
    }
    
    //an tat ca panel, tru panel active
    $head_toggle.not(".active").next().hide();

    $head_toggle.click(function(event) {
        var $panel = $(this).next();
        $panel.slideToggle(300);
        $(this).toggleClass('active');
    });
});


/* =========================================================
6. Google Map
============================================================ */
var map;
var $kp_map = jQuery('#kp-map');

if ($kp_map.length > 0) {
    var id_map = $kp_map.attr('id');
    var lat = parseFloat($kp_map.attr('data-latitude'));
    var lng = parseFloat($kp_map.attr('data-longitude'));
    var place = $kp_map.attr('data-place');

    map = new GMaps({
        el: '#'+id_map,
        lat: lat,
        lng: lng,
        zoomControl : true,
        zoomControlOpt: {
            style : 'SMALL',
            position: 'TOP_LEFT'
        },
        panControl : false,
        streetViewControl : false,
        mapTypeControl: false,
        overviewMapControl: false
    });
    map.addMarker({
        lat: lat,
        lng: lng,
        title: place
    });
}

/* =========================================================
7. Vertical Menu
============================================================ */

if (jQuery('.sf-vertical').length > 0) {

    Modernizr.load([
        {
            load: 'js/superfish.js',
            complete: function () {

                var $sf_vertical = $('.sf-vertical');
                var device = 0; //0 desktop, 1 mobile
                var point = 992;

                if($(window).width() >= point) { //desktop
                    initSf();
                } else { //mobile
                    sfMobile();
                    device = 1;
                }

                $(window).resize(function() {
                    console.log($(window).width() + " -- " + device);
                    if($(window).width() >= point && !$sf_vertical.hasClass('sf-js-enabled') && device != 0) { //desktop
                        destroySfMobile();
                        initSf();
                        device = 0;
                    } else if($(window).width() < point && device != 1) { //mobile
                        $sf_vertical.superfish('destroy');
                        sfMobile();
                        device = 1;
                    }
                });

                function initSf() {
                    $sf_vertical.superfish({
                        delay: 400,
                        speed: 'fast',
                        cssArrows: false
                    });
                }

                function sfMobile() {
                    //them class theo sf
                    $sf_vertical.find("ul").prev().addClass("sf-with-ul");
                    $sf_vertical.children("li").click(function() {
                        if($(this).children("ul").length) {
                            //dong, mo LI
                            $(this).children("ul").toggleClass('sfHover');
                            $(this).children("ul").stop().slideToggle("slow");
                            //xoa class nhung LI khac                        
                            $(this).siblings().removeClass("sfHover").children("ul").slideUp("slow");
                            return false;
                        }                        
                    });
                    
                }

                function destroySfMobile() {
                    $sf_vertical.children("li").unbind();
                    $sf_vertical.find(".sf-with-ul").removeClass("sf-with-ul");
                    $sf_vertical.find(".sfHover").removeClass(".sfHover");
                }
            }            
        }
    ]);
}

/* =========================================================
8. Waypoint
============================================================ */

Modernizr.load([
    {
        load: ['js/waypoints.min.js', 'js/waypoints-sticky.min.js'],
        complete: function () {
            $(".waypoint").waypoint('sticky');            
        }            
    }
]);

/* =========================================================
9. Validate form
============================================================ */

if (jQuery('.comments-form,.contact-form').length > 0) {
    Modernizr.load([{
        load: ['js/jquery.form.js', 'js/jquery.validate.js'],
        complete: function () {
            jQuery('.comments-form,.contact-form').validate({
                // Add requirements to each of the fields
                rules: {
                    name: {
                        required: true,
                        minlength: 2
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    message: {
                        required: true,
                        minlength: 10
                    }
                },
                // Specify what error messages to display
                // when the user does something horrid
                messages: {
                    name: {
                        required: tuta_variable.i18n.validate.name.REQUIRED,
                        minlength: jQuery.format(tuta_variable.i18n.validate.name.MINLENGTH)
                    },
                    email: {
                        required: tuta_variable.i18n.validate.email.REQUIRED,
                        email: tuta_variable.i18n.validate.email.EMAIL
                    },
                    message: {
                        required: tuta_variable.i18n.validate.message.REQUIRED,
                        minlength: jQuery.format(tuta_variable.i18n.validate.message.MINLENGTH)
                    }
                },
                // Use Ajax to send everything to processForm.php
                submitHandler: function (form) {
                    jQuery(".comments-form .input-submit,.contact-form .input-submit").attr("value", tuta_variable.i18n.validate.form.SENDING);
                    jQuery(form).ajaxSubmit({
                        success: function (responseText, statusText, xhr, $form) {
                            jQuery("#response").html(responseText).hide().slideDown("fast");
                            jQuery(".comments-form .input-submit,.contact-form .input-submit").attr("value", tuta_variable.i18n.validate.form.SUBMIT);
                        }
                    });
                    return false;
                },
                errorPlacement: function(error, element) {
                    error.insertBefore(element.parent());
                }
            });
        }
    }]);
}

/* =========================================================
 ============================================================ */

$(document).ready(function() {

    $(".quick-link").click(function(){
        $(this).next().stop().slideToggle("slow");
    });

    //find-car - tuta-home-2
    var $find_cars_wrap = $(".tuta-home-2").find(".find-cars-wrap");

    $find_cars_wrap.find(".head-fc").click(function() {

        if($find_cars_wrap.hasClass("fc-active")) {
            $find_cars_wrap.find(".find-cars").slideUp(200, function() {
                $find_cars_wrap.toggleClass("fc-active");
            })
        } else {
            $find_cars_wrap.find(".find-cars").slideDown(200, function() {
                $find_cars_wrap.toggleClass("fc-active");
            })
        }
    });

    //upload file
    $(".upload").change(function () {
        $(this).parent().find('.txt-file').attr("value", this.value); 
    });

    //slide-sell-your-car - device-width-sm
    var $sell_your_car_slide = $(".sell-your-car-slide");
    var $content = $sell_your_car_slide.find(".content");

    $sell_your_car_slide.find(".h3").click(function() {
        if($(window).width() < 768) {
            if($content.hasClass("active")) {
                $content.css("height", "40px").toggleClass("active");
            } else {
                $content.css("height", "100%").toggleClass("active");
            }
        }
    });
    //man hinh > device-sm thi reset
    $(window).resize(function() {
        if($(window).width() >= 768) {
            //$content.css("height", "auto").removeClass("active");
            $content.attr("style", "").removeClass("active");
        }
    });

});