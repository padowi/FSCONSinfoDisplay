$(document).ready(function() {
    if ( $.cookie('pageNumber') == null) { $.cookie('pageNumber', 1); }
    if ( $.cookie('pageCount') == null ) { $.cookie('pageCount', 1); }
    if ( $.cookie('pageTimeout') == null ) { $.cookie('pageTimeout', 10000) }
});
