$('.work-talent-titles').width($('body').width() * 2);
$(window).resize(function() {
	$('.work-talent-titles').width($('body').width() * 2);
	if (window.matchMedia('only screen and (max-width: 40em)').matches) {
		$('.logo').click(function() {
			$('#menu').addClass('menu-container-expanded');
			return false;
		});
		$(document).on('click', '.dropdown-label', function() {
			$(this).parent().find('.dropdown').toggle();
		});
		$('.dropdown input').change(function() {
			theparent = $(this).closest('.dropdown-container');
			thelabel = $(this).parent().text();
			theparent.find('.dropdown').hide();
			theparent.find('.dropdown-label').text(thelabel);
		});
	}
});
$('#menu-button, .menu-close-button').click(function() {
	$('#menu').toggleClass('menu-container-expanded');
	$('.wrap,body').toggleClass('menu-active');
	if ($('#menu').hasClass('menu-container-expanded') && window.matchMedia('only screen and (min-width: 768px)').matches) {
		$('.wrap').height($('#menu').height() - 300);
	} else {
		$('.wrap').height('auto');
	}
});
$('#close-button').click(function() {
	$('#menu').removeClass('menu-container-expanded');
});	

$(document).on('click', '.industry-card', function() {
	$category = $(this).attr('id');

	$('.industry-card').removeClass('active');
	$(this).addClass('active');
	if (window.matchMedia('only screen and (max-width: 960px)').matches) { 
		$('.industry-card .card').css('opacity', '0');
		setTimeout(
			function() {
				$('.section-work-sbtdesign-content').css('opacity', '0');
			}, 600
		);
		setTimeout(
			function() {
				$( "#industry-dropdown-container" ).hide().load( "section-work-sbtdesign-dropdown.php" ).fadeIn(600);
			}, 1200
		);
		setTimeout(
			function() {
				$( "#industry-content" ).hide().load( "section-"+$category+"-content.php" ).fadeIn(600);
			}, 1800
		);
		setTimeout(
			function() {
				$('.industry-card').hide();
			}, 1900
		);
	} else {
		setTimeout(
			function() {
				$( "#industry-content" ).hide().load( "section-"+$category+"-content.php" ).fadeIn(600);
			}, 300
		);
	}
	return false;
});
$(document).on('click', '.sub-industry', function() {
	$('.overlay').fadeIn(300);
	$('.modal-container').fadeIn(300);
	$('body').css('overflow-y', 'hidden');
});
$(document).on('click', '.close-button', function() {
	$('.overlay').fadeOut(300);
	$('.modal-container').fadeOut(300);
	$('body').css('overflow-y', 'auto');
	return false;
});
$('#section-work-talent-content').load('section-work.php');
$('.work-talent-title').click(function() {
	if ($(this).hasClass('talent-title')) {
		makeTalentActive($(this));
	} else {
		makeWorkActive($(this));
	}
});
$('.work-talent-title').on('swipeleft', function() {
	makeTalentActive($(this));
});
$('.work-talent-title').on('swiperight', function() {
	makeWorkActive($(this));
});
$('#contact-form').load('section-work-inquiry.php');
$('input[name="dropdown_eg"]').change(function() {
	$('input[name="dropdown_eg"]').closest('li').removeClass('active');
	active = $('input[name="dropdown_eg"]:checked');
	active.closest('li').addClass('active');
	subject = active.val();
	if (subject == 'work') {
		$('#contact-form').load('section-work-inquiry.php');
	} else if (subject == 'talent') {
		$('#contact-form').load('section-talent-inquiry.php');
	} else {
		$('#contact-form').load('section-general-inquiry.php');
	}
});
if ($('.talent-title').hasClass('active')) {
	makeTalentActive($('.talent-title'));
}
function makeTalentActive(newactive) {
	switchViews(newactive);
	$('#section-work-talent-content').load('section-talent.php');
	$('.work-talent-titles').removeClass('work-active');
	$('.work-talent-titles').addClass('talent-active');
	history.pushState({}, null, "talent.php");
}
function makeWorkActive(newactive) {
	switchViews(newactive);
	$('#section-work-talent-content').load('section-work.php');
	$('.work-talent-titles').removeClass('talent-active');
	$('.work-talent-titles').addClass('work-active');
	history.pushState({}, null, "work.php");
}
function switchViews(newactive) {
	$('.work-talent-title').removeClass('active');
	newactive.addClass('active');
	$('.work-talent-title:not(.active) .lead').removeClass('fadeInUp');
	$('.work-talent-title:not(.active) .arrow').removeClass('fadeInDown');
	$('.work-talent-title:not(.active) .lead').removeClass('animated');
	$('.work-talent-title.active .lead').addClass('fadeInUp');
	$('.work-talent-title.active .arrow').addClass('fadeInDown');
	$('.work-talent-title.active .lead').addClass('animated');
	$('.work-talent-title').css('z-index', 9);
	newactive.css('z-index', 1);
}

$(function(){
  jQuery.browser = {};
  (function () {
    jQuery.browser.msie = false;
    jQuery.browser.version = 0;

    if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) {
        jQuery.browser.msie = true;
        jQuery.browser.version = RegExp.$1;
    }
  })();
  
   jQuery.getFeed({
   url: 'http://crossorigin.me/https://sbtalent.crelate.com/portal/rss',
     // success: function(feed){alert(feed);}
     
   success: function(feed) {

        var html = '';

        for(var i = 0; i < feed.items.length && i < 5; i++) {

            var item = feed.items[i];

            html += '<div class="card"><h2 class="text-left job-header">'
            + '<a href="'
            + item.link
            + '">'
            + item.title
            + '</a>'
            + '</h2>';

            html += '<p class="updated text-left">'
            + item.updated
            + '</p>';

            html += '<div class="job-description text-left">'
            + item.description
            + '</div>';
          
            html += '<a href="'
            + item.link
            + '" class="button">'
            + 'Apply for this job'
            + '</a>'
            
            html += '</div><br>'
        }
        jQuery('#result').append(html);
    }    
 });
});