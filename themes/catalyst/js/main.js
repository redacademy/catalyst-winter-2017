(function ($) {

    $('.cross').hide();

    var $crossIcon = $('.cross');
    var $hamburgerIcon = $('.hamburger');
    var $mobileMenu = $('.mobile-menu');


    $hamburgerIcon.click(function () {

            $hamburgerIcon.addClass('transparent').hide();
            $mobileMenu.addClass('opaque').css('display', 'block');
            $crossIcon.addClass('opaque').show();
    });

    $crossIcon.click(function () {

            $crossIcon.removeClass('opaque').hide();
            $hamburgerIcon.removeClass('transparent').show();
            $mobileMenu.removeClass('opaque').css('display', 'none');
    });



    // Toggle profile popout when enter/exit buttons are clicked (Our Team page)

    var $staffEnterButtons = $( '.staff-enter-button' );
    var $boardEnterButtons = $( '.board-enter-button' );
    var $committeeEnterButtons = $( '.committee-enter-buttons' );
    var $staffExitButton = $( '.staff-exit-button' );
    var $boardExitButton = $( '.board-exit-button' );

    $staffExitButton.hide();
    $boardExitButton.hide();

    var $staffProfilePreviews = $( '.staff-profile-preview' );
    var $boardProfilePreviews = $( '.board-profile-preview' );
    var $committeeProfilePreviews = $( '.committee-profile-preview' );

    var $staffProfileImages = $( '.staff-profile-preview > .profile-image' );
    var $boardProfileImages = $( '.board-profile-preview > .profile-image' );
    var $committeeProfileImages = $( '.committee-profile-preview > .profile-image' );

    var $staffProfilePopouts = $( '.staff-profile-popout' );
    var $boardProfilePopouts = $( '.board-profile-popout' );
    var $commiteeProfilePopouts = $( '.committee-profile-popout' );

    var $staffProfilesWrapper = $( '.staff-profiles-wrapper' );
    var $staffProfilesHeader = $( '.staff-profiles-wrapper > .small-header:nth-child(1)' );
    var $catalystTeamHeader = $( '.our-team-header' );

    var $boardProfilesWrapper = $( '.board-profiles-wrapper' );
    var $boardProfilesHeader = $( '.board-profiles-header' );

    var $committeeProfilesHeader = $( '.committee-profiles-header' );

    var $advisorsProfilesWrapper = $( '.advisors-profiles-wrapper' );
    var $introCopy = $( '.intro-copy' );


    // Function to show staff popouts.

    function showStaffPopout($targetArray) {
        $targetArray.on('click', function(){

            var targetIndex = jQuery.inArray( this, $targetArray );
            var thisPopout = $staffProfilePopouts[targetIndex];
            thisPopout = $( thisPopout );

            // Grey-out the rest of the page content.

            $boardProfilesWrapper.hide();
            $advisorsProfilesWrapper.animate({opacity: 0.25}, 130);
            $introCopy.animate({opacity: 0.25}, 130);

            // Clear the active profiles section of inactive profiles and show only the active profile popout.

            $staffProfilesHeader.hide();
            $staffProfilePreviews.hide();
            $staffProfilePopouts.hide();
            $staffProfilesWrapper.css( 'margin-top', '-0.75rem' );

            thisPopout.show().addClass( 'show-popout' );
            scrollToPopout( thisPopout, $catalystTeamHeader );
            $staffExitButton.show(130);

            hideStaffPopout( thisPopout );
        });
    }

    // Function to show board profile popouts.

    function showBoardPopout( $targetArray ) {
        $targetArray.on( 'click', function() {
            var targetIndex = jQuery.inArray( this, $targetArray );
            var thisPopout = $boardProfilePopouts[targetIndex];
            thisPopout = $( thisPopout );

            // Grey-out the rest of the page content.

            $staffProfilesWrapper.hide();
            $advisorsProfilesWrapper.animate( {opacity: 0.25}, 130 );
            $introCopy.animate( {opacity: 0.25}, 130 );

            // Clear the active profiles section of inactive profiles and show only the active profile popout.

            $boardProfilesHeader.hide();
            $boardProfilePreviews.hide();
            $boardProfilePopouts.hide();
            thisPopout.show().addClass( 'show-popout' );
            scrollToPopout( thisPopout, $boardProfilesHeader );
            $staffExitButton.show(130);

            hideStaffPopout( thisPopout );
        });
    }

    function showCommitteePopout( $targetArray ) {
        $targetArray.on( 'click', function() {
            var targetIndex = jQuery.inArray( this, $targetArray );
            var thisPopout = $commiteeProfilePopouts[targetIndex];
            thisPopout = $( thisPopout );

            // Grey-out the rest of the page content.

            $staffProfilesWrapper.hide();
            $boardProfilesWrapper.hide();
            $advisorsProfilesWrapper.animate( {opacity: 0.25}, 130 );
            $introCopy.animate( {opacity: 0.25}, 130 );

            // Clear the active profiles section of inactive profiles and show only the active profile popout.

            $committeeProfilesHeader.hide();
            $committeeProfilePreviews.hide();
            $commiteeProfilePopouts.hide();
            thisPopout.show().addClass( 'show-popout' );
            scrollToPopout( thisPopout, $boardProfilesHeader );
            $staffExitButton.show(130);

            hideStaffPopout( thisPopout );
        });
    }

    // FUnction to hide staff profile popouts.

    function hideStaffPopout( $thisPopout ) {
        $staffExitButton.click(function () {
            $staffExitButton.hide();
            $thisPopout.removeClass( 'show-popout' ).addClass( 'translucent' );
            $staffProfilesWrapper.css( 'margin-top', '0' );
            $staffProfilePreviews.show();
            $boardProfilePreviews.show();
            $committeeProfilePreviews.show();
            $staffProfilesHeader.show();
            $boardProfilesHeader.show();
            $committeeProfilesHeader.show();
            $boardProfilesWrapper.show();
            $staffProfilesWrapper.show();
            $advisorsProfilesWrapper.css( 'opacity', '1' );
            $introCopy.css( 'opacity', '1' );

            scrollToProfile( $thisPopout );
        });
    }

    // Scroll to opened popout when it is opened

    function scrollToPopout( $thisPopout, $sectionHeader ) {
        $( 'html, body' ).animate({
            scrollTop: ( $thisPopout.offset().top - ( $sectionHeader.height() * 2 ) )
        }, 50);
    }

    // Scroll to last viewed profile after popout is closed

    function scrollToProfile( $thisPopout ) {
        $('html, body').animate({
            scrollTop: ( $thisPopout.prev().offset().top - ( $thisPopout.prev().height() / 2 ) )
        }, 0);
    }

    // On page load, set the open popouts functions to target either 'enter-button' (mobile) or 'profile-image' (desktop).

    if ( $( window ).width() < 760 ) {
        showStaffPopout( $staffEnterButtons );
        showBoardPopout( $boardEnterButtons );
        showCommitteePopout( $committeeEnterButtons );
    } else {
        showStaffPopout( $staffProfileImages );
        showBoardPopout( $boardProfileImages );
        showCommitteePopout( $committeeProfileImages )
    }

    // On window resize, set the appropriate open popout function and kill the one that is not being used.

    $( window ).resize( function(){
        if ( $( window ).width() < 760 ) {
            $staffProfileImages.off( 'click' );
            $boardProfileImages.off( 'click' );
            $committeeProfileImages.off( 'click' );
            showStaffPopout( $staffEnterButtons );
            showBoardPopout( $boardEnterButtons );
            showCommitteePopout( $committeeEnterButtons );
        } else {
            $staffEnterButtons.off('click');
            $boardEnterButtons.off( 'click' );
            $committeeEnterButtons.off( 'click' );
            showStaffPopout( $staffProfileImages );
            showBoardPopout( $boardProfileImages );
            showCommitteePopout ( $committeeProfileImages );
        }
    });

    //send user to thank you page on form submission
    document.addEventListener( 'wpcf7mailsent', function() {
        location = 'http://google.com/';
    }, false );

    //flickity frontpage
    $('.fp-carousel').flickity({
        imagesLoaded: true,
        pageDots: false,
        prevNextButtons: false,
        autoPlay: 7500,
        draggable: false,
    });
    //flickity single projects
    $('.img-carousel').flickity({
        contain: true,
        wrapAround: true,
        imagesLoaded: true,
        pageDots: false,
    });
    $('.quote-carousel').flickity({
        contain: true,
        wrapAround: true,
        imagesLoaded: true,
        pageDots: false,
        prevNextButtons: true,
        autoPlay: 4000,
    });
    //flickity ourstory template part
    $('.formula-carousel').flickity({
        imagesLoaded: true,
        pageDots: false,
        watchCSS: true
    });
    //flickity projects template part
    $('.other-post-gallery').flickity({
        contain: true,
        wrapAround: true,
        imagesLoaded: true,
        pageDots: false,
    });

    //rent chart height
    $(window).on('load', function() {
        var $chartHeight = $('.rows').outerHeight();
        $('.rent-chart-container').css('height', $chartHeight);
    });

    //add classes to selections and corresponding images
    $('.selection p').each(function(i) {
        $(this).addClass('select'+(i+1));
    });
    $('.floorplan-img-container .floorplan-img').each(function(i) {
        $(this).addClass('select'+(i+1));
    });

    //display floorplans on click
    $('.selection p').on('click',function(){
        if ($(window).width() < 760){
            var $mobileImgToggle = $(this).next('.floorplan-img');
            $('.selection .floorplan-img').css('display', 'none');
            $($mobileImgToggle).css('display', 'inline-block').animate('height', 'toggle');
        }
        else {
            var $homeSelect = $(this).attr('class');
            $('.selection .floorplan-img').css('display', 'none');
            $('.floorplan-img-container .floorplan-img').css('display', 'none');
            $('.floorplan-img-container .'+$homeSelect).css('display', 'inline-block');
        }
    })

    $(window).on('resize', function() {
        setTimeout(function() {
            $(this).width() >= 760 && $('.selection .floorplan-img').animate('height', 'toggle').css('display', 'none');
        }, 500);
    })

})(jQuery);
