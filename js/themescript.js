( function( $ ) {

    $(document).on("scroll", function() {
        if ($(document).scrollTop() > 86) {
            $("#banner").addClass("w3hubs");
            $("#imageLogo").addClass("remove-pt");
        } else {
            $("#banner").removeClass("w3hubs");
            $("#imageLogo").removeClass("remove-pt");
        }
    })

    $(document).ready(function(){
        $('ul.wp-block-gallery').lightGallery({
            selector: 'a'
        });
    });

} )( jQuery );