




$(document).ready(function () {
	$('section').load('./brainsnacks.html');
	$('.logo').click(function() {
		$('section').load('./brainsnacks.html');
	});
	$('li.about').click(function() {
		$('section').load('./about/about.html');
	});
	$('li.videos').click(function() {
		$('section').load('./videos/videos.html');
	});
	$('li.contact').click(function() {
		$('section').load('./contact/contact.html');
	});
});