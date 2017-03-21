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
    var $staffProfilePreviews = $( '.staff-profile-preview' );
    var $staffProfilePopouts = $( '.staff-profile-popout' );
    
    $staffEnterButtons.click(function(){
        var buttonIndex = jQuery.inArray(this, $staffEnterButtons);
        console.log(buttonIndex);
        
        $staffProfilePreviews.toggleClass( 'hide-preview' );
        var thisPopout = $staffProfilePopouts[buttonIndex];
        thisPopout.classList.remove( 'profile-popout' );
    });


})(jQuery);