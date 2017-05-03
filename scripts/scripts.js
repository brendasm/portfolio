// Script

// For Accordion Tabs

$('#portfolio > article > div').hide();

var $accordionTabs = $('#portfolio > article > h2'); 

$accordionTabs.click(function(){

var $button = $(this).children('button');
var $thisPane = $(this).next();

$accordionTabs.children('button').removeClass('minus');

if($thisPane.is(':visible')){
	$button.removeClass('minus');
	$thisPane.slideUp();		
}else{
	$('#portfolio > article > div:visible').slideUp();	
	$button.addClass('minus');
	$thisPane.slideDown();
}
});


// typewrite for branding section

$(function(){
    $(".typewrite").typed({
	  strings: ["I'm Brenda, a UX/UI designer & developer based in Los Angeles, CA."],
      typeSpeed: 30,
      contentType: 'text'
    });
});


// open my story tab

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

