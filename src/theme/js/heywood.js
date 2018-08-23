const resizeGridItem = (item) => {
	const grid = document.querySelector('.contents > main');
	const rowHeight = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-auto-rows'));
	const rowGap = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-row-gap'));
	const itemHeight = item.querySelector('.content').getBoundingClientRect().height;
	const rowSpan = Math.ceil((itemHeight + rowGap) / (rowHeight + rowGap));
	item.style.gridRowEnd = `span ${rowSpan}`;
}

const resizeAllGridItems = () => {
	let allItems = document.querySelectorAll('.post-block');
	for (let x = 0, len = allItems.length; x < len; x++) {
		resizeGridItem(allItems[x]);
	}
}

$(document).ready(function() {

	// enable any .mailme tags
	var at = / at /;
	var dot = / dot /g;
	$('span.mailme').each(function () {
		var addr = $(this).text().replace(at,"@").replace(dot,".");
		$(this).after('<a href="mailto:'+ addr +'" title="Send an email">'+ addr +'</a>');
		$(this).remove();
	});

	$('#roomdropdown').on('change', function(){
		var url = $(this).find('option:selected').val();
		window.location.href = url;
	});

	window.onload = resizeAllGridItems();
	window.addEventListener('resize', () => resizeAllGridItems());

});