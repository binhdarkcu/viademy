// JavaScript Document
var videoPlayer = (function() {
	var player;
	var srcTemp = '';
	function init(){
		initVideo();
		changeVideo();
	}
	
	function initVideo(){
		var firstVideo = $('ul.videoPlayerList li>a').attr('data-source');
		srcTemp = firstVideo;
		var poster = $('ul.videoPlayerList li>a').attr('data-poster');
		player = videojs('commentVideo', {
			techOrder: ['flash', 'html5'],
			autoplay: false,
			poster: poster,
			sources: [{ 
				type: "video/mp4",
				src: firstVideo
			}]
		}, function(){
			this.on('ended', function() {
			    var nextVideo = $('ul.videoPlayerList li.currentPlay').next();
			    var nextsrc = $(nextVideo).find('a').attr('data-source');
			    $('ul.videoPlayerList li').removeClass('currentPlay');
				$(nextVideo).addClass('currentPlay');
				$('ul.videoPlayerList li a').removeClass('play');
				$(nextVideo).find('a').addClass('play');
			    changeSource(nextsrc);
			});
			this.on('play', function() {
				$('ul.videoPlayerList li a').removeClass('playing');
				$('ul.videoPlayerList li.currentPlay a').removeClass('playing').addClass('pause');
			});
			this.on('pause', function() {
				$('ul.videoPlayerList li a').removeClass('pause');
			    $('ul.videoPlayerList li.currentPlay a').removeClass('pause').addClass('playing');
			});
		});
	}
	
	function changeVideo(){
		$('ul.videoPlayerList li a').click(function(){
			var src = $(this).attr('data-source');
			
			if (player.paused()) {
			    player.play();
			}
			else {
			    player.pause();
			}
			if(srcTemp != src){
				$('ul.videoPlayerList li').removeClass('currentPlay');
				$(this).parents().addClass('currentPlay');
				changeSource(src);
			}
			srcTemp = src;
		});
	}
	function play(){

	}
	function pause(){

	}
	function changeSource(src) {
		player.pause();
		player.currentTime(0);
		
		player.src(src);
		
		player.ready(function() {
			this.one('loadeddata', videojs.bind(this, function() {
				this.currentTime(0);
			}));

			this.load();
			this.play();
		});
	}
	return {
		init:init
	}
	
})();		

$(document).ready( function() {
	videoPlayer.init();
});

