// JavaScript Document
var SiteMain = (function() {
	function init(){
		createRadio();
		//createRating('.rating');
		onRating();
		createSlick();
		toggleFilter();
	}
	
	function createRadio(){
		$('input.iCheckRadio').iCheck();
	}
	
	function openPopup(idDiv){
		closePopup();
		$(idDiv).css('display', 'block');
	}
	function closePopup(){
		$('.register form')[0].reset();
		$('.popup').css('display', 'none');
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
	var click = 0;
	function toggleFilter(){
		$('.filterbox a.afilter').click(function(){
			if(click == 0){
				$('.filterType').css('display','block');
				click=1;
			}else{
				$('.filterType').css('display','none');
				click=0;
			}
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

