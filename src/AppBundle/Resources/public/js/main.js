$(document).ready(function() {
    var quickAccessEl = $(".quick-access"),
        overlayEl = $('.quick-access__overlay'),
        openerEl = quickAccessEl.find('.quick-access__opener'),
        menuEl = quickAccessEl.find('.quick-access__menu');

    openerEl.click(toggleElements);
    overlayEl.click(toggleElements);

    function toggleElements() {
        menuEl.toggle( "clip" );
        overlayEl.toggleClass('quick-access__overlay--active');
    }
});