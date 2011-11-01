$(document).ready(function() {
    var timeout = getPageTimeout();

    updateSlideNumberParagraph();

    if (typeof pageSpecific == 'function')
    {
        pageSpecific();
    }

    setTimeout(function(){
        gotoPage();
    }, timeout);
});
