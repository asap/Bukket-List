/* Author:
	Alexander Sapountzis
*/


jQuery(document).ready(function($){
	$('#main ul li').hover(function(){
		$(this).children('span.controls').fadeToggle( 'fast' );
	});

	$('a.beta_disabled').live(
		'click', function(){
		alert(" Sorry, that don't work yet" );
	});

	$('.title_prompt').prompt('Enter your Title');

});


