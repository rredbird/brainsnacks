


var menuOpen = false;

$(document).ready(function () {
	$('section').load('./brainsnacks.html');
	$('.logo').click(function() {
		$('section').load('./brainsnacks.html');
	});
	$('.logoMobile').click(function() {
		if (menuOpen) {
			$('section').show();
			$('.nav').hide();
			$('li.active').removeClass('active');
			$('section').load('./brainsnacks.html');
		} else {
			$('section').hide();
			$('.nav').show();
		}
		menuOpen = !menuOpen;
	})
	$('li.about').click(function() {
		$('li.active').removeClass('active');
		if (menuOpen) {
			$('section').show();
			$('.nav').hide();
		}
		$('li.about').addClass('active');
		menuOpen = false;
		$('section').load('./about/about.html');
	});
	$('li.videos').click(function() {
		$('li.active').removeClass('active');
		if (menuOpen) {
			$('section').show();
			$('.nav').hide();
		}
		$('li.videos').addClass('active');
		menuOpen = false;
		$('section').load('./videos/videos.html');
	});
	$('li.contact').click(function() {
		$('li.active').removeClass('active');
		if (menuOpen) {
			$('section').show();
			$('.nav').hide();
		}
		$('li.contact').addClass('active');
		menuOpen = false;
		$('section').load('./contact/contact.html');
	});
});