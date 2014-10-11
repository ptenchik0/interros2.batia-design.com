(function ($) {

        $(document).on("click", ".main-menu a, .small-menu a", function(e){
            var destination = $(this).attr("href").substring(1);
            var to = $(destination).offset().top-50;

            if(this.getAttribute("href").charAt(1) == "#") {
                //alert('No hash');
                $('body').animate( { scrollTop: to }, 1200 );
                $('html').animate( { scrollTop: to }, 1200 );
                e.preventDefault();
            }
        });


}) (jQuery);

