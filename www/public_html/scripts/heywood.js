$(document).ready(function() {

	// enable any .mailme tags
	var at = / at /;
	var dot = / dot /g;
	$('span.mailme').each(function () {
		var addr = $(this).text().replace(at,"@").replace(dot,".");
		$(this).after('<a href="mailto:'+ addr +'" title="Send an email">'+ addr +'</a>');
		$(this).remove();
	});

	// enable any bxslider plugins
	$('.bxslider').bxSlider({
		adaptiveHeight: true,
		mode: 'fade'
	});

	$('#roomdropdown').on('change', function(){
		var url = $(this).find('option:selected').val();
		window.location.href = url;
	});

});