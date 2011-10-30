$(document).ready(function() {
    var timeout = getPageTimeout();

    updateSlideNumberParagraph();

    setTimeout(function(){
        gotoPage();
    }, timeout);
});
