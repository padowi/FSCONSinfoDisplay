/**
 * Should only be called by proxy.loader.js::document.ready()
 *
 * Changes the attribute in the parent document iframe (thereby updating the
 * page)
 */
function gotoPage()
{
    $(parent.document).find('#infoDisplay').attr('src', './proxy.php');
}

/**
 * Should only be called by proxy.loader.js::document.ready()
 *
 * Updates the "Page X of Y" slide progress indicator in the parent document.
 */
function updateSlideNumberParagraph()
{
    //$("#slideNumber", top).html($.cookie('pageNumber') + " / " + $.cookie('pageCount'));
    $(parent.document).find('#slideNumber').html($.cookie('pageNumber') +  " / " + $.cookie('pageCount'));
}

/**
 * Retrieves the DEFAULT timeout (set by PHP in proxy.php, if you want to
 * redefine the timeout value, check config.php::DEFAULT_TIMEOUT
 */
function getDefaultTimeout()
{
    return $.cookie('pageDefaultTimeout');
}

/**
 * Call this function from your individual pages to change the timeout value
 * (i.e. how long the page will be displayed)
 */
function setPageTimeout(timeout)
{
    $.cookie('pageTimeout', timeout);
}

/**
 * Should only be called by proxy.loader.js::document.ready()
 *
 * This function will return either the default page timeout, or use an
 * individually defined timeout set for the page which is presently calling this
 * function
 */
function getPageTimeout()
{
    if ( $.cookie('pageTimeout') == null )
    {
        return getDefaultTimeout();
    }
    else
    {
        var timeout = $.cookie('pageTimeout');
        $.cookie('pageTimeout', null);
        return timeout;
    }
}
