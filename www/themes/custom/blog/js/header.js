(function ($, Drupal) {

    $('#ico-search').on('click', function(event){
        event.preventDefault();
        if( $('#search').hasClass('is-visible')) {
            console.log('ico is visible');
            $('#search').removeClass('is-visible');
            $(this).addClass('fa-search');
            $(this).removeClass('fa-remove');
        } else {
            console.log('ico is not visible');
            $('#search').addClass('is-visible');
            $(this).addClass('fa-remove');
            $(this).removeClass('fa-search');
        }
    });

})(jQuery, Drupal);