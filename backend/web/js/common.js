$(function() {
    $(window).resize(function() {
        // $('.files-index').height($(window).height() - $('.files-index').offset().top - $('.main-footer').outerHeight());

        fullScreen($('.files-index'));
        fullScreen($('.content .site-index'));
    });
    $(window).resize();
});

function fullScreen(elem) {
    if (elem.length > 0) {
        elem.height($(window).height() - elem.offset().top - $('.main-footer').outerHeight())
    }
}