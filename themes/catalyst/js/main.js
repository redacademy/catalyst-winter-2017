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
})(jQuery);