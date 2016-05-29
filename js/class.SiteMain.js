// JavaScript Document
var SiteMain = (function() {
	function init(){
		createRadio();
		//createRating('.rating');
		onRating();
		createSlick();
		toggleFilter();
		createScrollBar('.listVideos .scrollBar');
		voteComment();
		openTypeVideo();
		openTabComment();
		openAccountNav();
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
	function createScrollBar(clsDiv){
		$(clsDiv).mCustomScrollbar();
	}
	var ivote = 0;
	function voteComment(){
		$('.number-reply span.vote').click(function(){
	        $( this ).toggleClass( "love" );
		});
	}
	function openTypeVideo(){
		$('.listVideos .type a').click(function(){
			$('.listVideos .type a').removeClass('active');
			$(this).addClass('active');
			$('.tabScreenContent .typetab').css('display','none');
			var tabid = $(this).attr('href');
			$(tabid).css('display','block');
			return false;
		});
	}

	function openTabComment(){
		$('.commentContent .commentLeft .tabComment .tabName a').click(function(){
			$('.commentContent .commentLeft .tabComment .tabName li').removeClass('active');
			$(this).parent().addClass('active');
			$('.commentContent .commentLeft .tabContent .tab').css('display','none');
			var tabid = $(this).attr('href');
			$(tabid).css('display','block');
			return false;
		});
	}
	var isclick = 0;
	function openAccountNav(){
		
		$('.accountBox a.accoutName').click(function(){
			if(isclick == 0){
				$('.accountBox .submenu').css('display','block');
				isclick=1;
			}else{
				$('.accountBox .submenu').css('display','none');
				isclick=0;
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

