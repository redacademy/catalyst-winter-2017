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

    var $staffProfilePopouts = $( '.staff-profile-popout' );
    var $boardProfilePopouts = $( '.board-profile-popout' );

    var $staffProfilesWrapper = $( '.staff-profiles-wrapper' );
    var $staffProfilesHeader = $( '.staff-profiles-wrapper > .small-header:nth-child(1)' );

    var $boardProfilesWrapper = $( '.board-profiles-wrapper' );
    var $boardProfilesHeader = $( '.board-profiles-header' );

    var $advisorsProfilesWrapper = $( '.advisors-profiles-wrapper' );
    var $introCopy = $( '.intro-copy' );

    $staffEnterButtons.click(function(){
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
        thisPopout.show().toggleClass( 'show-popout' );
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

})(jQuery);