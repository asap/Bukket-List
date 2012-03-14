/* Author:
	Alexander Sapountzis
*/


$(document).ready(function(){
	$('#main ul li').hover(function(){
		$(this).children('span.controls').fadeToggle( 'fast' );
	});

	$('a.beta_disabled').click(function(){
		alert(" Sorry, that don't work yet" );
	});
});


