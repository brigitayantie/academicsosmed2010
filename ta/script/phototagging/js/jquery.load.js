/*
$(window).load(function () {
						 
	$('.start-tagging').click(function(){
		$('.start-tagging').addClass("hide");
		$('.finish-tagging').removeClass("hide");
		//load imgAreaSelect   
		//$('img#imageid').imgAreaSelect({ handles: true, onSelectChange: selectChange, keys: { arrows: 15, shift: 5 }, aspectRatio: '4:3', maxWidth: 150, maxHeight: 100 });
		$('img#imageid').imgAreaSelect({
			disable: false,
			handles: true,
			keys: { arrows: 15, shift: 5 },
			aspectRatio: '4:3',
			maxWidth: 120,
			maxHeight: 70,
			fadeSpeed: 200,
			//zIndex: -1,
			onSelectEnd: function(img, selection){
				$('input#x1').val(selection.x1);
				$('input#y1').val(selection.y1);
				$('input#x2').val(selection.x2);
				$('input#y2').val(selection.y2);
				$('input#w').val(selection.width);
				$('input#h').val(selection.height);
				$('#title_container').css('left', selection.x1);
				$('#title_container').css('top', selection.y2);
				//$('.imgareaselect-outer').css('z-index', -1);
				$('#title_container').removeClass("hide");
				$('.imgareaselect-outer').css('z-index', -1);
				//$('#title_container').css('z-index', 5);
				if (selection.width == 0 && selection.height == 0) { 
					$('#title_container').addClass("hide"); 
				}				
		   },
		   onSelectStart: function(img, selection){
				$('#title_container').addClass("hide");
		   },
		});
	});
	$('.finish-tagging').click(function(){
		$('.start-tagging').removeClass("hide");
		$('.finish-tagging').addClass("hide");
		$('#title_container').addClass("hide");
		$('img#imageid').imgAreaSelect({ disable: true, hide: true });
	});
	
	//Close the error box for form pages
	$('a#error-link').click(function() {
		$('#error-box').slideUp('slow');
		return false;
	});
	$('a#warning-link').click(function() {
		$('#warning-box').slideUp('slow');
		return false;
	});
});

*/

$(window).load(function () {
						 
	$('.start-tagging').click(function(){
		$('.start-tagging').addClass("hide");
		$('.finish-tagging').removeClass("hide");
		//load imgAreaSelect   
		//$('img#imageid').imgAreaSelect({ handles: true, onSelectChange: selectChange, keys: { arrows: 15, shift: 5 }, aspectRatio: '4:3', maxWidth: 150, maxHeight: 100 });
		$('img#imageid').imgAreaSelect({
			disable: false,
			handles: true,
			keys: { arrows: 15, shift: 5 },
			aspectRatio: '4:3',
			//maxWidth: 120,
			//maxHeight: 70,
			maxWidth: 1200,
			maxHeight: 1200,
			fadeSpeed: 200,
			//zIndex: -1,
			onSelectEnd: function(img, selection){
				$('input#x1').val(selection.x1);
				$('input#y1').val(selection.y1);
				$('input#x2').val(selection.x2);
				$('input#y2').val(selection.y2);
				$('input#w').val(selection.width);
				$('input#h').val(selection.height);
				$('#title_container').css('left', selection.x1);
				$('#title_container').css('top', selection.y2);
				$('#title_container').css('z-index', 9999);
				//$('.imgareaselect-outer').css('z-index', -1);
				$('#title_container').removeClass("hide");

				$('.imgareaselect-outer').css('z-index', -2);

				if (selection.width == 0 && selection.height == 0) { 
					$('#title_container').addClass("hide"); 
				}				
		   },
		   onSelectStart: function(img, selection){
				$('#title_container').addClass("hide");
		   },
		});
	});
	$('.finish-tagging').click(function(){
		$('.start-tagging').removeClass("hide");
		$('.finish-tagging').addClass("hide");
		$('#title_container').addClass("hide");
		$('img#imageid').imgAreaSelect({ disable: true, hide: true });
	});
	
	//Close the error box for form pages
	$('a#error-link').click(function() {
		$('#error-box').slideUp('slow');
		return false;
	});
	$('a#warning-link').click(function() {
		$('#warning-box').slideUp('slow');
		return false;
	});
});