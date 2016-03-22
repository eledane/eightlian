(function($) {
 	"use strict";

    $(document).ready(function() {
    	var time_out = $('#time-out').val();
      //Callback works only with direction = "down"
     	$('.flipTimer').flipTimer({ direction: 'down', date: time_out, callback: function() { alert('times up!'); } });
    });

})(jQuery);

(function($) {
 "use strict";
var background_img = $('#background-coming').val();
if (background_img != '') {
	background_img = background_img.split(',');
}

var srcBgArray = background_img;

$(document).ready(function() {
  $('#bg-body').bcatBGSwitcher({
    urls: srcBgArray,
    alt: 'Full screen background image',
    links: true,
    prevnext: true
  });
});

})(jQuery);