var _____WB$wombat$assign$function_____ = function(name) {return (self._wb_wombat && self._wb_wombat.local_init && self._wb_wombat.local_init(name)) || self[name]; };
if (!self.__WB_pmw) { self.__WB_pmw = function(obj) { this.__WB_source = obj; return this; } }
{
  let window = _____WB$wombat$assign$function_____("window");
  let self = _____WB$wombat$assign$function_____("self");
  let document = _____WB$wombat$assign$function_____("document");
  let location = _____WB$wombat$assign$function_____("location");
  let top = _____WB$wombat$assign$function_____("top");
  let parent = _____WB$wombat$assign$function_____("parent");
  let frames = _____WB$wombat$assign$function_____("frames");
  let opener = _____WB$wombat$assign$function_____("opener");

/*****************************************************************************************/
/************************** No need to modify code after this line ***********************/
/*****************************************************************************************/

var $j = jQuery.noConflict();

function postImageHover() {
	$j('.blog_teasers:not(.masonry_blocks) .post_teaser_img, a.prettyPhoto img, a .teaser_grid_img, .gallery-item .attachment-thumbnail')
	.attr({"title" : " "})
	.hover(
		function () {
			//mouse hover
			$j(this).stop().animate({"opacity" : 0.7}, 300);
		}, 
		function () {
			//mouse out
			$j(this).stop().animate({"opacity" : 1}, 300);
		}
	);
	
	/*$j('.masonry_blocks .float_block')
	.hover(
		function () {
			//mouse hover
			$j(this).find('a .post_teaser_img').stop().animate({"opacity" : 0.7}, 300);
		}, 
		function () {
			//mouse out
			$j(this).find('a .post_teaser_img').stop().animate({"opacity" : 1}, 300);
		}
	);*/
}

function portfolioSortable() {
	jQuery('.wpb_sort li a.wpb_sortable_cats').click(function(e) {
		e.preventDefault();
		var classname = jQuery(this).attr('data-value');
		jQuery('.wpb_sortable_current').removeClass('wpb_sortable_current');
		jQuery(this).addClass('wpb_sortable_current');
		
		jQuery('.wpb_sortable').stop().animate({"opacity" : 1});
		jQuery('.wpb_sortable:not(.'+classname+')').stop().animate({"opacity" : 0.2});

	});
	
	jQuery('.wpb_sort li.wpb_all_cats a').click(function(e) {
		e.preventDefault();
		jQuery('.wpb_sortable_current').removeClass('wpb_sortable_current');
		jQuery(this).addClass('wpb_sortable_current');
		
		jQuery('.wpb_sortable').stop().animate({"opacity" : 1});
	});
} // end of portfolioSortable() function

function homeMenuInit() {
	var delay = 100;
	$j('.header_menu > li').each(function(index) {
		$j(this).delay(delay*index+1500).animate({"left" : 0});
	});
}
function menuBehaviour() {
	//jQuery(".header_menu li div.submenu").css({display: "none"}); // Opera Fix
	jQuery(".header_menu").children('li').children('.sub-menu').css({"display": "none"}); // Opera Fix
	
	jQuery(".header_menu li a").removeAttr('title');
	jQuery(".header_menu").children('li').each(function() {
		var sublist = jQuery(this).children('.sub-menu');
		jQuery(this).hover(function() {
			jQuery(this).addClass('hover');
			
			if (sublist.length > 0) {
				jQuery(this).addClass('hover_triangle');	
			}
			
			var new_l = jQuery(this).find('a').outerWidth() + 1;
			
			sublist.stop().css( {height:"auto", overflow:"hidden", display:"block", opacity: 0, left: new_l} )
			.animate({
				opacity: 1
			}, 400, function() {
			// Animation complete.
			});
		},
		function() {
			jQuery(this).removeClass('hover hover_triangle');
			
			sublist.stop().animate({
				opacity: 0
			}, 400, function() {
				$j(this).css( {display:"none", overflow:"hidden"} );
			// Animation complete.
			});
		});
	});
	
} // end of menuBehaviour() function



function masonryTeasers() {
	jQuery('.float_blocks_container .masonry_blocks').masonry({
		itemSelector: '.float_block',
		columnWidth: 1,
		gutterWidth: 0
	});
}

function inputBehaviour() {
	$j("input:text, textarea").each(function(){
		$j(this).attr({"rel": $j(this).val()});
		
		$j(this)
		.focus(function () {
			if ($j(this).val() == $j(this).attr('rel')) {
				$j(this).val('');
			}
			$j(this).addClass("focus");
		})
		.blur(function () {
			if ($j(this).val() == '') {
				$j(this).val($j(this).attr('rel'));
			} else {
				$j(this).addClass("notempty");
			}
			$j(this).removeClass("focus");
		});
	});
} // end of function inputBehaviour


function vc_prettyPhoto() {
	try {
		// just in case. maybe prettyphoto isnt loaded on this site
		jQuery('a.prettyphoto, .gallery-icon a[href*=".jpg"], a[rel^="prettyPhoto"], a.prettyPhoto, .gallery a, #slider .prettyphoto a').prettyPhoto({
			animationSpeed: 'normal', /* fast/slow/normal */
			padding: 15, /* padding for each side of the picture */
			opacity: 0.7, /* Value betwee 0 and 1 */
			showTitle: true, /* true/false */
			allowresize: true, /* true/false */
			counter_separator_label: '/', /* The separator for the gallery counter 1 "of" 2 */
			theme: 'dark_square', /* light_rounded / dark_rounded / light_square / dark_square */
			hideflash: false, /* Hides all the flash object on a page, set to TRUE if flash appears over prettyPhoto */
			modal: false, /* If set to true, only the close button will close the window */
			callback: function() {
				var url = location.href;
				var hashtag = (url.indexOf('#!prettyPhoto')) ? true : false;
				if (hashtag) location.hash = "!";
			} /* Called when prettyPhoto is closed */,
			social_tools : ''
		});
	} catch (err) { }
}

function initJsSweetness() {
	if (blockrc == 'true') {
		$j(this).bind("contextmenu", function(e) {
			e.preventDefault();
		});
	}
	
	menuBehaviour();	
	inputBehaviour();
	postImageHover();
	portfolioSortable();
	//
	//$j('.content_holder, #supersized').css({"opacity" : 0}).animate({ "opacity" : 1}, 800);
	$j('.content_holder, #supersized').css({"opacity" : 0});
	masonryTeasers();
	//
	$j('.main_content table tr:even').addClass('even');
	
	/*$j('.img_tooltip')
	.tooltip({
		track: true,
		delay: 0,
		showURL: false,
		showBody: " - ",
		extraClass: "img-tooltip",
		bodyHandler: function() {
			return $j("<img/>").attr("src", $j(this).attr('data-value')); 
		},
		fade: 250
	});
	
	$j('.tooltip:not(.img_tooltip)').tooltip({
		track: true,
		delay: 0,
		showURL: false,
		showBody: " - ",
		fade: 250
	});
	*/
	$j('#search_ico').toggle(
		function () {
            $j('#header #searchform').fadeIn();
        },
		function () {
			$j('#header #searchform').fadeOut();
		}
	);
}

jQuery(document).ready(function($j) {
	initJsSweetness();
});
/*
jQuery(window).resize(function() {
});
*/
jQuery(window).load(function() {	
	masonryTeasers();
	homeMenuInit();
	$j('.content_holder, #supersized').animate({ "opacity" : 1}, 800);
	
	var correct_w = 0;
	$j('#thumb-list li').each(function(index) {
		correct_w += $j(this).outerWidth(true);
	});
	$j('#thumb-list').width(correct_w);
});


(function($j) {
    var userAgent = navigator.userAgent.toLowerCase();

    $j.browser = {
        version: (userAgent.match( /.+(?:rv|it|ra|ie)[\/: ]([\d.]+)/ ) || [0,'0'])[1],
        safari: /webkit/.test( userAgent ),
        opera: /opera/.test( userAgent ),
        msie: /msie/.test( userAgent ) && !/opera/.test( userAgent ),
        mozilla: /mozilla/.test( userAgent ) && !/(compatible|webkit)/.test( userAgent )
    };

})(jQuery);

}
/*
     FILE ARCHIVED ON 14:47:16 Jul 04, 2024 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 12:57:42 Sep 24, 2024.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  captures_list: 6.315
  exclusion.robots: 0.031
  exclusion.robots.policy: 0.019
  esindex: 0.014
  cdx.remote: 56.064
  LoadShardBlock: 355.658 (3)
  PetaboxLoader3.datanode: 341.269 (4)
  PetaboxLoader3.resolve: 84.357 (2)
  load_resource: 207.717
*/