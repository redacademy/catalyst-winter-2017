(function ($) {

    $('.cross').hide();
    $('.mobile-menu').hide();
    $('.hamburger').click(function () {
        $('.mobile-menu').slideToggle('slow', function () {
            $('.hamburger').hide();
            $('.cross').show();
            $('.list').css('width', '60vw').show();
        });
    });

    $('.cross').click(function () {
        $('.mobile-menu').slideToggle('slow', function () {
            $('.cross').hide();
            $('.hamburger').show();
            $('.list').hide();
        });
    });

    $('#timeline-Widget-0 li').css('background-color', 'red');

    // Toggle profile popout when enter/exit buttons are clicked (Our Team page)

    var $cvElements = $( '.cv' );

    var $staffEnterButtons = $( '.staff-enter-button' );
    var $boardEnterButtons = $( '.board-enter-button' );
    var $staffExitButton = $( '.staff-exit-button' );
    var $boardExitButton = $( '.board-exit-button' );

    $staffExitButton.hide();
    $boardExitButton.hide();

    var $staffProfilePreviews = $( '.staff-profile-preview' );
    var $boardProfilePreviews = $( '.board-profile-preview' );

    var $staffProfileImages = $( '.staff-profile-preview > .profile-image' );
    var $boardProfileImages = $( '.board-profile-preview > .profile-image' );

    var $staffProfilePopouts = $( '.staff-profile-popout' );
    var $boardProfilePopouts = $( '.board-profile-popout' );

    var $staffProfilesWrapper = $( '.staff-profiles-wrapper' );
    var $staffProfilesHeader = $( '.staff-profiles-wrapper > .small-header:nth-child(1)' );
    var $catalystTeamHeader = $( '.our-team-header' );

    var $boardProfilesWrapper = $( '.board-profiles-wrapper' );
    var $boardProfilesHeader = $( '.board-profiles-header' );

    var $advisorsProfilesWrapper = $( '.advisors-profiles-wrapper' );
    var $introCopy = $( '.intro-copy' );


    // Function to show staff popouts.

    function showStaffPopout($targetArray) {
        $targetArray.on('click', function(){

            var targetIndex = jQuery.inArray( this, $targetArray );
            var thisPopout = $staffProfilePopouts[targetIndex];
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
            scrollToPopout(thisPopout, $catalystTeamHeader);
            $staffExitButton.show(130);

            hideStaffPopout(thisPopout);
        });
    }

    // Function to show board profile popouts.

    function showBoardPopout($targetArray) {
        $targetArray.on( 'click', function() {
            var targetIndex = jQuery.inArray( this, $targetArray );
            var thisPopout = $boardProfilePopouts[targetIndex];
            thisPopout = $( thisPopout );

            // Grey-out the rest of the page content.

            $staffProfilesWrapper.animate({opacity: 0.25}, 130);
            $advisorsProfilesWrapper.animate({opacity: 0.25}, 130);
            $introCopy.animate({opacity: 0.25}, 130);

            // Clear the active profiles section of inactive profiles and show only the active profile popout.

            $boardProfilesHeader.addClass( 'blue-background-header' ).css('margin-bottom', '0');
            $boardProfilePreviews.hide();
            $boardProfilePopouts.hide();
            thisPopout.show().addClass( 'show-popout' );
            scrollToPopout( thisPopout, $boardProfilesHeader );
            $boardExitButton.show();

            hideBoardPopout(thisPopout);
        });
    }

    // FUnction to hide staff profile popouts.

    function hideStaffPopout($thisPopout) {
        $staffExitButton.click(function () {
            $staffExitButton.hide();
            $thisPopout.removeClass( 'show-popout' ).addClass( 'translucent' );
            $staffProfilesWrapper.css('margin-top', '0');
            $staffProfilePreviews.show();
            $staffProfilesHeader.show();
            $boardProfilesWrapper.css( 'opacity', '1' );
            $advisorsProfilesWrapper.css( 'opacity', '1' );
            $introCopy.css( 'opacity', '1' );

            scrollToProfile( $thisPopout );
        });
    }

    // FUnction to hide board profile popouts.

    function hideBoardPopout($thisPopout) {
        $boardExitButton.click(function(){
            $boardExitButton.hide();
            $thisPopout.removeClass( 'show-popout' ).addClass( 'translucent' );
            $boardProfilesHeader.removeClass( 'blue-background-header' );
            $boardProfilePreviews.show();
            $staffProfilesWrapper.css( 'opacity', '1' );
            $advisorsProfilesWrapper.css( 'opacity', '1' );
            $introCopy.css( 'opacity', '1' );

            scrollToProfile( $thisPopout );
        });
    }

    // Scroll to opened popout when it is opened

    function scrollToPopout($thisPopout, $sectionHeader) {
        $('html, body').animate({
            scrollTop: ( $thisPopout.offset().top - ( $sectionHeader.height() * 2.5 ) )
        }, 200);
    }

    // Scroll to last viewed profile after popout is closed

    function scrollToProfile($thisPopout) {
        $('html, body').animate({
            scrollTop: ( $thisPopout.prev().offset().top - ($thisPopout.prev().height() / 2) )
        }, 0);
    }

    // On page load, set the open popouts functions to target either 'enter-button' (mobile) or 'profile-image' (desktop).

    if ( $( window ).width() < 760 ) {
        showStaffPopout( $staffEnterButtons );
        showBoardPopout( $boardEnterButtons )
    } else {
        showStaffPopout( $staffProfileImages );
        showBoardPopout( $boardProfileImages );
    }

    // On window resize, set the appropriate open popout function and kill the one that is not being used.

    $( window ).resize( function(){
        if ( $( window ).width() < 760 ) {
            $staffProfileImages.off( 'click' );
            $boardProfileImages.off( 'click' );
            showStaffPopout( $staffEnterButtons );
            showBoardPopout( $boardEnterButtons );
        } else {
            $staffEnterButtons.off('click');
            $boardEnterButtons.off( 'click' );
            showStaffPopout( $staffProfileImages );
            showBoardPopout( $boardProfileImages );
        }
    });

    // Load more posts on when user clicks button on news & media page.

    var $postsContainer = $( '.newsmedia-article' );
    var $loadPostsButton = $( '#load-more-button' );
    var renderedArticles = 5;
    var apiLink = api_vars.ajax_url + 'news/?&_embed=true';

    function formatDate(myDate) {
        var formattedDate = addLeadingZero( myDate.getDate() ) + ', ' + ( '0' + ( myDate.getMonth() + 1 ) ).slice( -2 ) + ', ' + myDate.getFullYear();
        return formattedDate;
    }
    function addLeadingZero(date) {

        if (date < 10) {
            date = '0' + date;
            return date;
        } else {
            return date;
        }
    }

    function constructArticleContent(formattedDate, articleTitle, articleExcerpt) {

        var articleContent = '<div class="article-content" >';
            articleContent += '<p class="date" >' + formattedDate + '</p>';
            articleContent += '<h3>' + articleTitle + '</h3>';
            articleContent += '<div class="entry-content">' + articleExcerpt + '</div></div>';

        return articleContent;
    }

    function constructArticleThumbnail(post) {
        if ( post.better_featured_image !== null ) {
            var articleThumb = '<img src="' + post.better_featured_image.source_url + '" />';
            var articleThumbContainer = '<div class="article-thumb">' + articleThumb + '</div>';
        } else {
            articleThumbContainer = '';
        }

        return articleThumbContainer;
    }

    function constructArticleElement( articleID, articleThumbContainer, articleContent ) {
        var articleElement = '<article class="news" id="' + articleID + '">';

        if ( articleThumbContainer ) {
            articleElement += articleThumbContainer;
        }

            articleElement += articleContent;
            articleElement += '</article>';

            return articleElement;
    }

    $loadPostsButton.click(function( event ){
        event.preventDefault();

        $.get(apiLink, function( data ){

            var newPosts = data.slice( ( data.length - renderedArticles ) - renderedArticles, ( data.length - renderedArticles ) );
            
            if ( renderedArticles < data.length && renderedArticles < 20 ) {
                $.each( newPosts, function(i, post)  {
                    var myDate = new Date( post.date );
                    var formattedDate = formatDate(myDate);
                    var articleID = post.id;
                    var articleTitle = post.title.rendered;
                    var articleExcerpt = post.excerpt.rendered;

                    var constructedArticleElement =
                        constructArticleElement(articleID,
                                                constructArticleThumbnail(post),
                                                constructArticleContent(formattedDate, articleTitle, articleExcerpt)
                                                );

                    $postsContainer.append(constructedArticleElement);
                    renderedArticles += 5;
                });
            }
        });
    });

    //send user to thank you page on form submission
    document.addEventListener( 'wpcf7mailsent', function() {
        location = 'http://google.com/';
    }, false );

    //flickity frontpage
    $('.member-carousel').flickity({
        contain: true,
        wrapAround: true,
        imagesLoaded: true,
        pageDots: false,
        prevNextButtons: false,
    });
    $('.fp-carousel').flickity({
        contain: true,
        wrapAround: true,
        imagesLoaded: true,
        pageDots: false,
        prevNextButtons: false,
        autoPlay: 2000,
        draggable: false
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
        prevNextButtons: false,
        autoPlay: false,
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

})(jQuery);