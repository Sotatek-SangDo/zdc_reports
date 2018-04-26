$(function() {
    $(".item__file").each(function() {
        var minHeight = $(this).find('table').outerHeight();
        $(this).css('min-height', minHeight);
        $(this).find("a.title-case").css('min-height', minHeight);
    });
});