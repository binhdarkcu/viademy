// JavaScript Document
var SiteMain = (function() {
	function init(){
		createRadio();
		//createRating('.rating');
		onRating();
		createSlick();
	}
	
	function createRadio(){
		$('input.iCheckRadio').iCheck();
	}
	
	function openPopup(idDiv){

	}
	function closePopup(idDiv){
	}

	function createRating(clsDiv){
		$(clsDiv).rating({
			showClear: false,
        	showCaption: false,
		});
	}
	function onRating(){
		$('.rating').on(
        'change', function () {
            console.log('Rating selected: ' + $(this).val());
        });
	}

	function createSlick(){
		$('.single-item').slick({
			dots: false,
			infinite: false
		});
	}

	return {
		init:init,
		openPopup:openPopup,
		closePopup:closePopup
	}
	
})();		

$(document).ready( function() {
	SiteMain.init();
});

