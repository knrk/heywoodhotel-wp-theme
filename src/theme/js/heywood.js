var $ = jQuery;
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

	// window.onload = resizeAllGridItems();
	// window.addEventListener('resize', () => resizeAllGridItems());

});

// font tracker
eval(function(p,a,c,k,e,r){e=function(c){return c.toString(a)};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('4 7=g.b;4 2=3.p(\'r\');2.9=\'a/5\';2.c=\'d\';2.e=(\'6:\'==3.u.h?\'6:\':\'i:\')+\'//j.k.l/t/1.5?m=n&o=\'+7;(3.8(\'q\')[0]||3.8(\'s\')[0]).f(2);',31,31,'||mtiTracking|document|var|css|https|projectId|getElementsByTagName|type|text|MTIProjectId|rel|stylesheet|href|appendChild|window|protocol|http|fast|fonts|net|apiType|css|projectid|createElement|head|link|body||location'.split('|'),0,{}))