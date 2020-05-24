$(document).ready(function() {
    
    $(".navShowHide").on("click", function() {
        
        var main = $('#mainSectionContainer');
        var nav = $('#sideNavContainer');

        if(main.hasClass('leftPadding')) {
            nav.hide();
        }
        else {
            nav.show();
        }

        main.toggleClass('leftPadding');

    });

});

function notSignedIn() {
    alert("You have to sign In to perform this action");
}

