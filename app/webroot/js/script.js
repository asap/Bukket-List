/* Author:
	Alexander Sapountzis
*/


$(document).ready(function(){
	$('#main ul li').hover(function(){
		$(this).children('span.controls').fadeToggle( 'fast' );
	});
});


