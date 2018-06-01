function onScrollInitOrphita(items, trigger) {

    items.each(function () {
        var osElement = jQuery(this),
                osAnimationClass = osElement.attr('orphita-animation'),
                osAnimationDelay = '0';

        osElement.css({
            '-webkit-animation-delay': osAnimationDelay,
            '-moz-animation-delay': osAnimationDelay,
            'animation-delay': osAnimationDelay
        });

        var osTrigger = (trigger) ? trigger : osElement;
        osTrigger.addClass('orphita-hidden');
        osTrigger.waypoint(function () {
            osElement.addClass('orphita-visible').addClass(osAnimationClass);
        }, {
            triggerOnce: true,
            offset: '90%'
        });
    });
}

onScrollInitOrphita(jQuery('.orphita-animation'));