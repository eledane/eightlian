(function($) {

 	"use strict";



	if($('.accordion').text() || $('.tabs.tab').text()) {

		$('.accordion, .tabs.tab').TabsAccordion({

			hashWatch: true,

			pauseMedia: true,

			responsiveSwitch: 'tablist',

			saveState: sessionStorage,

		});

	}



})(jQuery);



(function($) {

 "use strict";

	var slider = new MasterSlider();

	// adds Arrows navigation control to the slider.

	slider.control('arrows');

	slider.control('bullets');



	slider.setup('masterslider' , {

		 width:1330,    // slider standard width

		 height:650,   // slider standard height

		 space:0,

		 speed:45,

		 layout:'boxed',

		 loop:true,

		 preload:0,

		 autoplay:true,

		 view:"parallaxMask"

	});



	var slider = new MasterSlider();

	slider.setup('masterslider2' , {

		width:330,

		height:440,

		speed:20,

		loop:true,

		autoplay:true,

		preload:0

	});

	slider.control('arrows');

	slider.control('bullets',{autohide:false});



})(jQuery);



//Update JS

$(document).ready(function() {

	// JS Menu

	var header_version = $('#header-version').val();

	var menu_color = $('#menu-color').val();

	if (header_version != 'headerv1') {

		var path_css = $('#header-version').attr('data-path-css');

		switch (header_version) {

		    case 'headerv2':

		        $('#menu-skin').attr('href', path_css+'menu2.css');

		        break;

		    case 'headerv3':

		    	$('#menu-skin').attr('href', path_css+'menu3.css');

		        break;

		    case 'headerv5':

		    	$('#menu-skin').attr('href', path_css+'menu5.css');

		        break;

		    case 'headerv6':

		    	$('#menu-skin').attr('href', path_css+'menu9.css');

		        break;

		    default:



		}

	}

	if ($('#menu-color').val()) {

		$('.navbar-default .navbar-nav>li>a:not(.active, .active-trail)').css('color', menu_color);
		var rex_color = menu_color.match(/#fff/i);
		$(window).scroll(function() {
			var scrollTop = $(window).scrollTop();
			if (rex_color && scrollTop > 5) {
				$('.compact .header').css('background', '#181818');
			} else if(scrollTop <= 5 ){
				$('.compact .header').css('background', 'transparent');
				$('.header').css('background', 'transparent');
			}
		});

	}



	$('.featured_section24 .one_third').each(function(index, el) {

		if ($(this).find('#service-video').attr('data-video-id')) {

			var video_id = $(this).find('#service-video').attr('data-video-id');

			$(this).find('#service-video').html('<iframe src="https://www.youtube.com/embed/'+video_id+'" allowfullscreen></iframe>');

		}

	});



	if($('#home-background').val()) {

		var background = $('#home-background').val();

		if ($('#background-image').val() != "" && $('#home-background').val() != "") {

			var background_image = $('#background-image').val();

			$('body').css('background', background+" url('"+background_image+"') no-repeat center top");

		} else {

			$('body').css('background', background);

		}

	}



	//JS Blog

	//$('.container.blog .block-system > div:last-child').prev().prev().removeClass('divider_line1');

	//$('.container.blog .block-system > div:last-child').prev().prev().addClass('divider_line13 margin_top4 lessm');

	var total = $('.region-blog-small-image div.block > .content-halfsite').length;

	$('.region-blog-small-image div.block > .content-halfsite').each(function(index, el) {

		if (index === total - 1) {

			$(this).prev().find('.divider_line1').remove();

			$(this).find('.divider_line1').remove();

		}

	});

});



(function($) {

 "use strict";



$(".home").click(function() {

    $('html, body').animate({

        scrollTop: $("#wrap").offset().top - 79

    }, 500);

    return false;

});



$('#block-menu-menu-onepage-menu ul.navbar-nav li').each(function(index, el) {

	var menu_class = $(this).find('a').attr('class');

	menu_class = menu_class.split(" ");

	menu_class = 'div.'+menu_class[0];

	$(this).click(function() {

	    $('html, body').animate({

	        scrollTop: $(menu_class).offset().top - 79

	    }, 500);

	    return false;

	});

});



var pane = $('[class*="pane"]').length;

for (var i = 2; i <= pane; i++) {

	$('ul.lanscroll').append('<li><a href="#" role="tab" id="pane'+i+'"></a></li>');

};



$('.lanscroll li').each(function(index, el) {

	var menu_class = $(this).find('a').attr('id');

	menu_class = 'div.'+menu_class;

	$(this).click(function() {

	    $('html, body').animate({

	        scrollTop: $(menu_class).offset().top - 0

	    }, 500);

	    return false;

	});

});





$(document).ready(function () {

	//MEga menu

	$('ul.navbar-nav > li.mega-menu').each(function(index, el) {

		$(this).addClass('dropdown yamm-fw');

		var html_child_menu = '<li><div class="yamm-content"><div class="row">';

		$(this).find('li.expanded').each(function(index, el) {

			var class_child_menu = $(this).attr('class');

			var text_chil_menu =  $(this).find(' > a').text();

			var links_child_menu = $(this).find(' > ul.dropdown-menu').html();

			html_child_menu += '<ul class="'+class_child_menu+'"><li><p>'+text_chil_menu+'</p></li>';

			html_child_menu += links_child_menu + '</ul>'

		});

		html_child_menu += '</div></div></li>';

		$(this).find('> ul.dropdown-menu').html(html_child_menu);

	});



	function hexToRgb(hex) {

	    var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);

	    return result ? {

	        r: parseInt(result[1], 16),

	        g: parseInt(result[2], 16),

	        b: parseInt(result[3], 16)

	    } : null;

	}

	$(".navbar-nav a").click(function () {

		$(".navbar-nav a").removeClass("active");

		$(this).addClass("active");

	});



	$('.lanscroll li a').click(function(e) {



        $('.lanscroll li a').removeClass('active');



        var $this = $(this);

        if (!$this.hasClass('active')) {

            $this.addClass('active');

        }

        //e.preventDefault();

    });

	$('.site_wrapper_full>div').each(function(){
			if( this.id.indexOf('pane') > -1 ){
				$(this).viewportChecker({
				   	 //classToAdd: '',
				   	 offset: 100,
				   	 callbackFunction: function( obj ){
					   	 var id = obj.get(0).id.replace('pane','');
					   	 $('.lanscroll a').removeClass('active');
					   	 $('.lanscroll #p'+id+' a').addClass('active');
				   	 }
				});
			}
		});


    if($('#cd-timeline').text()) {

    	var n = 1;

    	$('#cd-timeline .cd-timeline-block').each(function(index, el) {

    		if (n % 2 == 0) {

    			var result = $(this).find('.cd-date').text();

    			result = '<b>'+result+'</b>';

    			$(this).find('.cd-date').html(result);

    		}

    		n = n + 1;

    	});

    }



    //JS progress bar

    if ($('.piechart1').text()) {

    	$('.piechart1').each(function(index, el) {

    		var color = $(this).attr('data-color');

    		var value = $(this).attr('data-value').slice(0,-1);

    		var rgba = 'rgba('+  hexToRgb(color).r + ',' +  hexToRgb(color).g + ',' +  hexToRgb(color).b + ',1)';

    		var content = $(this).html();

    		if ($(this).find('.loader')) {



    		} else {

    			$(this).html('<canvas class="loader"></canvas>');

    			$(this).append(content);

    		}

 			$(this).find('.loader').ClassyLoader({

                percentage: value,

                speed: 30,

                fontSize: '50px',

                diameter: 90,

                lineColor: rgba,

                remainingLineColor: 'rgba(200,200,200,0.4)',

                lineWidth: 9

            });

    	});

    }

    if ($('.piechart3').text()) {

    	$('.piechart3').each(function(index, el) {

    		var color = $(this).attr('data-color');

    		var value = $(this).attr('data-value').slice(0,-1);

    		var rgba = 'rgba('+  hexToRgb(color).r + ',' +  hexToRgb(color).g + ',' +  hexToRgb(color).b + ',1)';

    		$(this).find('.loader').ClassyLoader3({

                percentage: value,

                speed: 30,

                fontSize: '50px',

                diameter: 100,

                lineColor: rgba,

                remainingLineColor: 'rgba(255,255,255,0.3)',

                lineWidth: 10

            });

    	});

    }



    if ($('.piechart2').attr('data-value')) {

    	var width = 4;

    	var dia = 40;

    	$('.piechart2').each(function(index, el) {

    		var color = $(this).attr('data-color');

    		var value = $(this).attr('data-value').slice(0,-1);

    		var size = $(this).attr('data-size');

    		var rgba = 'rgba('+  hexToRgb(color).r + ',' +  hexToRgb(color).g + ',' +  hexToRgb(color).b + ',1)';

    		$(this).find('.loader').ClassyLoader2({

                percentage: value,

                speed: 30,

                fontSize: size,

                diameter: dia,

                lineColor: rgba,

                remainingLineColor: 'rgba(200,200,200,0.4)',

                lineWidth: width

            });

            width++;

            dia = dia + 10;

    	});

    }



});





$('.navbar-nav li a').click(function (e) {



	if ($(window).width() < 767) {



	$('.navbar-collapse').collapse('toggle');



	}

});





})(jQuery);





(function($) {

 "use strict";

	var slider = new MasterSlider();



	slider.setup('masterslider' , {

		 width:1330,    // slider standard width

		 height:580,   // slider standard height

		 space:0,

		 speed:45,

		 layout:'boxed',

		 loop:true,

		 preload:0,

		 autoplay:true,

		 view:"parallaxMask"

	});



})(jQuery);



