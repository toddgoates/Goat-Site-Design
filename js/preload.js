$(document).ready(function () {

    // Preload images for landing page
    $.preloadImages = function() {
        for (var i = 0; i < arguments.length; i++) {
            $("<img />").attr("src", arguments[i]);
        }
    }

    $.preloadImages("img/todd-left-hover.jpg","img/todd-right-hover.jpg");
    
});