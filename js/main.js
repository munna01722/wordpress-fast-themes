jQuery(document).ready(function(jQuery) {
    jQuery("a").on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();

            var hash = this.hash;
            var targetOffset = jQuery(hash).offset().top;

            jQuery('html, body').animate({
                scrollTop: targetOffset
            }, 800, function() {
                window.location.hash = hash;
            });
        }
    });
});

