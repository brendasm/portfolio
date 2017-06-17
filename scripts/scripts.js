// Script

// typewrite for branding section

$(function(){
    $(".typewrite").typed({
	  strings: ["I'm Brenda, a UX/UI designer & web developer."],
      typeSpeed: 30,
      contentType: 'text'
    });
});


// open about me tab

var $btnabout = $('.btn-menu');
var $wrapper = $('.about-wrapper');
var $btnclose = $('.btn-close');

$btnabout.click(function(){
	$wrapper.toggleClass('show-menu');

	if ($(window).width() < 645) {

		if($.trim($btnabout.text()) == 'About'){
			$btnabout.text('close');
		}
		else{
			$btnabout.text('About');
		}
	}

});

$btnclose.click(function(){
	$wrapper.removeClass('show-menu');
});