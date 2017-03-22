(function ($) {

    $('.cross').hide();
    $('.mobile-menu').hide();
    $('.hamburger').click(function () {
        $('.mobile-menu').slideToggle('slow', function () {
            $('.hamburger').hide();
            $('.cross').show();
            $('.list').show().css('width', '400px');
        });
    });

    $('.cross').click(function () {
        $('.mobile-menu').slideToggle('slow', function () {
            $('.cross').hide();
            $('.hamburger').show();
            $('.list').hide();
        });
    });

    // Toggle profile popout when enter/exit buttons are clicked (Our Team page)


    var $staffEnterButtons = $( '.staff-enter-button' );
    var $boardEnterButtons = $( '.board-enter-button' );
    var $staffExitButton = $( '.staff-exit-button' );
    var $boardExitButton = $( '.board-exit-button' );

    $staffExitButton.hide();
    $boardExitButton.hide();

    var $staffProfilePreviews = $( '.staff-profile-preview' );
    var $boardProfilePreviews = $( '.board-profile-preview' );

    var $staffProfileImages = $( '.staff-profile-preview > .profile-image' );
    // var $boardProfileImages = $( '.board-profile-preview > .profile-image' );

    var $staffProfilePopouts = $( '.staff-profile-popout' );
    var $boardProfilePopouts = $( '.board-profile-popout' );

    var $staffProfilesWrapper = $( '.staff-profiles-wrapper' );
    var $staffProfilesHeader = $( '.staff-profiles-wrapper > .small-header:nth-child(1)' );

    var $boardProfilesWrapper = $( '.board-profiles-wrapper' );
    var $boardProfilesHeader = $( '.board-profiles-header' );

    var $advisorsProfilesWrapper = $( '.advisors-profiles-wrapper' );
    var $introCopy = $( '.intro-copy' );

    // var isRetina = window.devicePixelRatio >=2 ? true : false;

    // Make the plus-sign buttons the click target for displaying profile popouts

    function popFromButtons() {
        $staffEnterButtons.click(function(){
            console.log('buttons');
            console.log(isMobileWidth);
            var buttonIndex = jQuery.inArray( this, $staffEnterButtons );
            var thisPopout = $staffProfilePopouts[buttonIndex];
            thisPopout = $( thisPopout );

            // Grey-out the rest of the page content.

            $boardProfilesWrapper.animate({opacity: 0.25}, 130);
            $advisorsProfilesWrapper.animate({opacity: 0.25}, 130);
            $introCopy.animate({opacity: 0.25}, 130);

            // Clear the active profiles section of inactive profiles and show only the active profile popout.

            $staffProfilesHeader.hide();
            $staffProfilePreviews.hide();
            $staffProfilePopouts.hide();
            $staffProfilesWrapper.css('margin-top', '-0.75rem');
            thisPopout.show().addClass( 'show-popout' );
            $staffExitButton.show(130);

            $staffExitButton.click(function () {
                $staffExitButton.hide();
                thisPopout.removeClass( 'show-popout' );
                $staffProfilesWrapper.css('margin-top', '0');
                $staffProfilePreviews.show();
                $staffProfilesHeader.show();
                $boardProfilesWrapper.css( 'opacity', '1' );
                $advisorsProfilesWrapper.css( 'opacity', '1' );
                $introCopy.css( 'opacity', '1' );
            });
        });
    }

    // Make the profile images the click target for displaying profile popouts

    function popFromImages() {
        $staffProfileImages.click(function(){
            console.log('images');
            console.log(isMobileWidth);
            var buttonIndex = jQuery.inArray( this, $staffProfilePreviews );
            var thisPopout = $staffProfilePopouts[buttonIndex];
            thisPopout = $( thisPopout );

            // Grey-out the rest of the page content.

            $boardProfilesWrapper.animate({opacity: 0.25}, 130);
            $advisorsProfilesWrapper.animate({opacity: 0.25}, 130);
            $introCopy.animate({opacity: 0.25}, 130);

            // Clear the active profiles section of inactive profiles and show only the active profile popout.

            $staffProfilesHeader.hide();
            $staffProfilePreviews.hide();
            $staffProfilePopouts.hide();
            $staffProfilesWrapper.css('margin-top', '-0.75rem');
            thisPopout.show().addClass( 'show-popout' );
            $staffExitButton.show(130);

            $staffExitButton.click(function () {
                $staffExitButton.hide();
                thisPopout.removeClass( 'show-popout' );
                $staffProfilesWrapper.css('margin-top', '0');
                $staffProfilePreviews.show();
                $staffProfilesHeader.show();
                $boardProfilesWrapper.css( 'opacity', '1' );
                $advisorsProfilesWrapper.css( 'opacity', '1' );
                $introCopy.css( 'opacity', '1' );
            });
        });
    }

    var isMobileWidth = false;

    if ( $( window ).width() < 760 ) {
        isMobileWidth = true;
        console.log(isMobileWidth);
        popFromButtons();
    } else {
        isMobileWidth = false;
        console.log(isMobileWidth);
        popFromImages();
    }

    $( window ).resize(function( ){
      
        if ( $( window ).width() <= 760 ) {
            isMobileWidth = true;
            
            if ( isMobileWidth ) {
                popFromButtons();
                // console.log( isMobileWidth );
            } else {
                return;
            }
            
        } else if ( $( window ).width() >760 ){
          isMobileWidth = false;
            
            if ( isMobileWidth !== true ) {
                console.log( isMobileWidth );
                popFromImages();
            } else {
                return;
            }
        }
    });

    $boardEnterButtons.click(function(){
        var buttonIndex = jQuery.inArray( this, $boardEnterButtons );
        var thisPopout = $boardProfilePopouts[buttonIndex];
        thisPopout = $( thisPopout );

         // Grey-out the rest of the page content.

        $staffProfilesWrapper.animate({opacity: 0.25}, 130);
        $advisorsProfilesWrapper.animate({opacity: 0.25}, 130);
        $introCopy.animate({opacity: 0.25}, 130);

        // Clear the active profiles section of inactive profiles and show only the active profile popout.

        $boardProfilesHeader.addClass( 'blue-background' ).css('margin-bottom', '0');
        $boardProfilePreviews.hide();
        $boardProfilePopouts.hide();
        thisPopout.show().toggleClass( 'show-popout' );
        $boardExitButton.show();

        $boardExitButton.click(function(){
            $boardExitButton.hide();
            thisPopout.removeClass( 'show-popout' );
            $boardProfilesHeader.removeClass( 'blue-background' );
            $staffProfilesWrapper.css( 'opacity', '1' );
            $advisorsProfilesWrapper.css( 'opacity', '1' );
            $introCopy.css( 'opacity', '1' );
            $boardProfilePreviews.show();
        });
    });

    //send user to thank you page on form submission
    document.addEventListener( 'wpcf7mailsent', function() {
        location = 'http://google.com/';
    }, false );

})(jQuery);