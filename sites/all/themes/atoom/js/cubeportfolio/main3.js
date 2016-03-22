(function($, window, document, undefined) {
    'use strict';
    if ($('#grid-container3').text()) {
        // init cubeportfolio
        $('#grid-container3').cubeportfolio({
            filters: '#filters-container',
            loadMore: '#loadMore-container',
            loadMoreAction: 'auto',
            layoutMode: 'grid',
            defaultFilter: '*',
            animationType: 'fadeOutTop',
            gapHorizontal: 10,
            gapVertical: 10,
            gridAdjustment: 'responsive',
            mediaQueries: [{
                width: 1600,
                cols: 3
            }, {
                width: 1200,
                cols: 3
            }, {
                width: 800,
                cols: 3
            }, {
                width: 500,
                cols: 2
            }, {
                width: 320,
                cols: 1
            }],
            caption: 'zoom',
            displayType: 'lazyLoading',
            displayTypeSpeed: 100,

            // lightbox
            lightboxDelegate: '.cbp-lightbox',
            lightboxGallery: true,
            lightboxTitleSrc: 'data-title',
            lightboxCounter: '<div class="cbp-popup-lightbox-counter">{{current}} of {{total}}</div>',
        });
    }

})(jQuery, window, document);
