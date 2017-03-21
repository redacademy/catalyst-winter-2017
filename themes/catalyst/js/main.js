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
    // var $staffExitButtons = $( '.staff-exit-button' );
    // var $boardExitButton = $( '.board-exit-button' );

    var $staffProfilePreviews = $( '.staff-profile-preview' );
    var $boardProfilePreviews = $( '.board-profile-preview' );

    var $staffProfilePopouts = $( '.staff-profile-popout' );
    var $boardProfilePopouts = $( '.board-profile-popout' );

    var $staffProfilesWrapper = $( '.staff-profiles-wrapper' );
    var $boardProfilesWrapper = $( '.board-profiles-wrapper' );
    var $advisorsProfilesWrapper = $( '.advisors-profiles-wrapper' );
    var $introCopy = $( '.intro-copy' );
     
    $staffEnterButtons.click(function(){
        var buttonIndex = jQuery.inArray( this, $staffEnterButtons );
        var thisPopout = $staffProfilePopouts[buttonIndex];
        thisPopout = $( thisPopout );

        $boardProfilesWrapper.animate({opacity: 0.25}, 130);
        $advisorsProfilesWrapper.animate({opacity: 0.25}, 130);
        $introCopy.animate({opacity: 0.25}, 130);
        
        $( '.staff-profiles-wrapper > .small-header:nth-child(1)' ).hide();
        $staffProfilePreviews.hide();
        thisPopout.toggleClass( 'show-popout' );
    });

    // $staffExitButtons.click(function(){

    // });

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