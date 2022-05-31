$(document).ready(function () {

    "use strict";
    // Add smooth scrolling to all links
    $("a").on('click', function (event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll The optional number
            // (800) specifies the number of milliseconds it takes to scroll to the
            // specified area
            $('html, body').animate({
                scrollTop: $(hash)
                        .offset()
                        .top
            }, 800, function () {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });

    // Testimonial Slick Slider
    $('.slick-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        infinite: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.slick-slider-clients').slick({
        slidesToShow: 8,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        prevArrow: false,
        nextArrow: false,
        autoplaySpeed: 2000,
        infinite: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            }
        ]
    });

    //Counter Up
    $('.counter').counterUp({delay: 10, time: 3000});

    //Wow JS
    new WOW().init({
        mobile: true,
    });

    // Animate loader off screen
    $('.se-pre-con').fadeOut('slow');
    //Image Light Box Popup
    $('.image-link').magnificPopup({type: 'image'});
    $('.video-link').magnificPopup({type: 'iframe'});

});


$(document).scroll(function () {
    var $nav = $(".navbar");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
});

//$('#contact-us-form').submit(function (e) {
//    e.preventDefault();
//    var data = {
//        'name': $('#c-name').val(),
//        'email': $('#c-email').val(),
//        'subject': $('#c-subject').val(),
//        'message': $('#c-message').val(),
//    };
//    error_m = '';
//    var error = {};
//    $.each(data, function (i, val) {
//        if (val == "") {
//            error_m += '<p class="danger">Please enter ' + i + '.</p>';
//            $('#c-' + i).addClass('error');
//            error[i] = 1;
//        } else if ((i == 'email') && (val.match(email_regex) == null)) {
//            error_m += '<p class="danger">Invalid ' + i + '.</p>';
//            $('#c-' + i).addClass('error');
//            error[i] = 1;
//        } else {
//            $('#c-' + i).removeClass('error');
//            error[i] = 0;
//        }
//    });
//    var valid = true;
//    $.each(error, function (index, value) {
//        if (value == 1)
//            valid = false;
//    });
//    if (valid == true) {
//        formData = new FormData($("#contact-us-form")[0]);
//        //alert(redirect);
//        $.ajax({
//            url: siteUrl + 'pages/contact-us',
//            type: 'POST',
//            beforeSend: function (XHR) {
//                $('#contact-submit').html(btn_loader + ' Please wait...').attr('disadbled', 'disabled');
//            },
//            data: formData,
//            timeout: 30000,
//            cache: false,
//            contentType: false,
//            processData: false,
//            success: function (e) {
//                result = $.parseJSON(e);
//                $('.alert').html(result.message).slideDown(300);
//                $('#contact-submit').html('Submit').removeAttr('disabled');
//                if (result.code == 200) {
//                    $('#contact-us-form').trigger('reset');
//                    grecaptcha.reset();
//                } else {
//                    $('#c-' + result.focusi).focus().addClass('error');
//                }
//            },
//            error: function (x, t, m) {},
//        });
//    } else {
//        $('.alert').html(error_m).slideDown();
//    }
//    message_hide();
//});
