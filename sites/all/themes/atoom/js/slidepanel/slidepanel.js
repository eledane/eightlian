(function($) {
 "use strict";

$(document).ready(function() {
	$(".topMenuAction").click( function() {
		if ($("#openCloseIdentifier").is(":hidden")) {
			$("#slider").animate({
				marginTop: "-1000px"
				}, 900 );
			$("#topMenuImage #image-open").css('display', 'block');
			$("#topMenuImage #image-close").css('display', 'none');
			$("#openCloseIdentifier").show();
		} else {
			$("#slider").animate({
				marginTop: "0px"
				}, 300 );
			$("#topMenuImage #image-open").css('display', 'none');
			$("#topMenuImage #image-close").css('display', 'block');
			$("#openCloseIdentifier").hide();
		}
	});
});

})(jQuery);
