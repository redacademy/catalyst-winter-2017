(function ($) {

    $(".cross").hide();
    $(".mobile-menu").hide();
    $(".hamburger").click(function () {
        $(".mobile-menu").slideToggle("slow", function () {
            $(".hamburger").hide();
            $(".cross").show();
            $(".list").show().css("width", "400px");
        });
    });

    $(".cross").click(function () {
        $(".mobile-menu").slideToggle("slow", function () {
            $(".cross").hide();
            $(".hamburger").show();
            $(".list").hide();
        });
    });

    // Toggle profile popout when enter/exit buttons are clicked (Our Team page)


    var $staffEnterButtons = $( '.staff-enter-button' );
    var $boardEnterButtons = $( '.board-enter-button' );
    var $staffExitButton = $( '.staff-exit-button' );
    
    $staffExitButton.hide();
    // var $boardExitButton = $( '.board-exit-button' );

    var $staffProfilePreviews = $( '.staff-profile-preview' );
    var $boardProfilePreviews = $( '.board-profile-preview' );

    var $staffProfilePopouts = $( '.staff-profile-popout' );
    var $boardProfilePopouts = $( '.board-profile-popout' );

    var $staffProfilesWrapper = $( '.staff-profiles-wrapper' );
    var $staffProfilesHeader = $( '.staff-profiles-wrapper > .small-header:nth-child(1)' );

    var $boardProfilesWrapper = $( '.board-profiles-wrapper' );
    // var $boardProfilesHeader = $( '.board-profiles-wrapper > .small-header:nth-child(1)' );

    var $advisorsProfilesWrapper = $( '.advisors-profiles-wrapper' );
    var $introCopy = $( '.intro-copy' );
     
    $staffEnterButtons.click(function(){
        var buttonIndex = jQuery.inArray( this, $staffEnterButtons );
        var thisPopout = $staffProfilePopouts[buttonIndex];
        thisPopout = $( thisPopout );

        $boardProfilesWrapper.animate({opacity: 0.25}, 130);
        $advisorsProfilesWrapper.animate({opacity: 0.25}, 130);
        $introCopy.animate({opacity: 0.25}, 130);
        
        $staffProfilesHeader.hide();
        $staffProfilePreviews.hide();
        $staffProfilesWrapper.css('margin-top', '-0.75rem');
        thisPopout.toggleClass( 'show-popout' );
        $staffExitButton.show(130);

        $staffExitButton.click(function () {
            thisPopout.hide();
            $staffProfilePreviews.show();
            $staffProfilesHeader.show();
            $boardProfilesWrapper.css( 'opacity', '1' );
            $advisorsProfilesWrapper.css( 'opacity', '1' );
            $introCopy.css( 'opacity', '1' );
        });
    });

    // function exitPopout( activePopout ) {
    //     activePopout.hide();
    //     $staffProfilePreviews.show();
    //     $staffProfilesHeader.show();
    //     $boardProfilesWrapper.css( 'opacity', '1' );
    //     $advisorsProfilesWrapper.css( 'opacity', '1' );
    //     $introCopy.css( 'opacity', '1' );
    // }

    $boardEnterButtons.click(function(){
        var buttonIndex = jQuery.inArray( this, $boardEnterButtons );
        var thisPopout = $boardProfilePopouts[buttonIndex];
        thisPopout = $( thisPopout );

        $staffProfilesWrapper.animate({opacity: 0.25}, 130);
        $advisorsProfilesWrapper.animate({opacity: 0.25}, 130);
        $introCopy.animate({opacity: 0.25}, 130);
        
        $( '.board-profiles-wrapper > .small-header:nth-child(1)' ).hide();
        $boardProfilePreviews.toggleClass( 'hide' );
        thisPopout.toggleClass( 'show-popout' );
    });




})(jQuery);