




$(document).ready(function () {
    $('section').load('./brainsnacks.html');
    
    $('.logo').click(function() {
      $('section').load('./brainsnacks.html');
    });
    $('.about').click(function() {
      $('section').load('./about.html');
    });
    $('.videos').click(function() {
      $('section').load('./videos.html');
    });
    $('.contact').click(function() {
      $('section').load('./contact.html');
    });
});
