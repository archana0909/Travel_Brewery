(function($) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    });

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function() {
        $('.navbar-toggle:visible').click();
    });

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }

    });

    $('#euroTripNav').affix({
      offset: {
          top: 100
      }
    });

    // Initialize and Configure Scroll Reveal Animation
    window.sr = ScrollReveal();
    sr.reveal('.sr-icons', {
        duration: 600,
        scale: 0.3,
        distance: '0px'
    }, 200);
    sr.reveal('.sr-button', {
        duration: 1000,
        delay: 200
    });
    sr.reveal('.sr-contact', {
        duration: 600,
        scale: 0.3,
        distance: '0px'
    }, 300);

    // Initialize and Configure Magnific Popup Lightbox Plugin
    $('.popup-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
        }
    });




//Form Validation

$('#signup-form').bootstrapValidator({
    trigger: 'blur',
    fields: {
        Name: {
            validators: {
                notEmpty: {
                    message: 'Your  Name is required'
                },
                regexp: {
                    regexp: /^[a-zA-Z ]+$/,
                    message: 'Your name cannot have numbers or symbols'
                }
            }
        },
        Email: {
            validators: {
                notEmpty: {
                    message: 'The email is required'
                },
                emailAddress: {
                    message: 'The input is not a valid email address'
                }
            }
        },
        Phone: {
            validators: {
                notEmpty: {
                    message: 'The phone number is required'
                },
                regexp: {
                    regexp: /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/,
                    message: 'The input is not a valid Indian phone number'
                }
            }
        }
    }
})
.on('error.field.bv', '[name="Phone"]', function(e, data){
    // change the data-bv-trigger value to keydown
  //  $(e.target).attr('data-bv-trigger','keydown');
    // destroy the plugin
    // console.info(data.bv.getOptions());
    data.bv.destroy();
    // console.info(data.bv.getOptions());
    // initialize the plugin
    $('#signup-form').bootstrapValidator(data.bv.getOptions());
});
})(jQuery); // End of use strict
