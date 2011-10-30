$(document).ready(function() {
    var timeout = getPageTimeout();

    updateSlideNumberParagraph();

    setTimeout(function(){
        console.log('DEBUG: changing src');
        console.log('-----------------------------------------------');
        gotoPage();
    }, timeout);
    console.log('DEBUG: proxy loader loaded!');
});
