function toggleHeader() {
    let header = $('nav');
    let scrollAmount = $(window).scrollTop();

    if (scrollAmount > 0) {
        header.addClass('is-on-top');
    }
    else {
        header.removeClass('is-on-top');
    }
}

$(window).on('scroll', function() {
    toggleHeader();
});