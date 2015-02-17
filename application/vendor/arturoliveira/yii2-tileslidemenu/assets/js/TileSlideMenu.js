/**
 * @name JQeury TileSlideMenu plugin file 
 * @author Artur Oliveira - artur.oliveira@gmail.com - 2012-06-02
 * @version 1.0
 *
 */
(function ($) {
    $.fn.TileSlideMenu = function (method) {
        var ulPadding = 15;
        var items = $('#' + this.attr('id') + '_items');
        $(items.css({overflow: 'hidden'}));
        var lastLi = items.children().find('li:last-child');
        inputSelector = '#' + $(items.attr('id'));
        items.mousemove(function (e) {
            //Get menu width
            var divWidth = items.width();
            //As images are loaded ul width increases,
            //so we recalculate it each time
            var ulWidth = lastLi[0].offsetLeft + lastLi.outerWidth() + ulPadding;
            var left = (e.pageX - items.offset().left) * (ulWidth - divWidth) / divWidth;
            items.scrollLeft(left);
        });
        return false;
    };
})(jQuery);