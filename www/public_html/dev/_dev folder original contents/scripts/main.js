(function($,sr){

  // debouncing function from John Hann
  // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
  var debounce = function (func, threshold, execAsap) {
      var timeout;

      return function debounced () {
          var obj = this, args = arguments;
          function delayed () {
              if (!execAsap)
                  func.apply(obj, args);
              timeout = null;
          };

          if (timeout)
              clearTimeout(timeout);
          else if (execAsap)
              func.apply(obj, args);

          timeout = setTimeout(delayed, threshold || 100);
      };
  }
  // smartresize 
  jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

})(jQuery,'smartresize');

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