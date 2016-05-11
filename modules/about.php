<section class="about section hasborder">
	<div class="container">
		<div class="row">
			<div class="aboutSlick">
				<div class="slick-slide">
					<h4>Về chúng tôi</h4>
					<p>
						<span>Lớp học hay phòng học là một căn phòng thường được bố trí trong nhà trường chuyên sử dụng cho hoạt động</span> 
						<span>giảng dạy và học tập của thầy cô giáo, giảng viên, giáo sư... và các em học sinh, sinh viên, học viên... Lớp học là tổ
						<span>chức tôn giáo và tổ chức nhân đạo, y tế....<span>
					</p>
					<span class="blue">Bradley Ortiz</span>
				</div>
				<div class="slick-slide">
					<h4>Về chúng tôi</h4>
					<p>
						<span>Lớp học hay phòng học là một căn phòng thường được bố trí trong nhà trường chuyên sử dụng cho hoạt động</span> 
						<span>giảng dạy và học tập của thầy cô giáo, giảng viên, giáo sư... và các em học sinh, sinh viên, học viên... Lớp học là tổ
						<span>chức tôn giáo và tổ chức nhân đạo, y tế....<span>
					</p>
					<span class="blue">Bradley Ortiz</span>
				</div>
				<div class="slick-slide">
					<h4>Về chúng tôi</h4>
					<p>
						<span>Lớp học hay phòng học là một căn phòng thường được bố trí trong nhà trường chuyên sử dụng cho hoạt động</span> 
						<span>giảng dạy và học tập của thầy cô giáo, giảng viên, giáo sư... và các em học sinh, sinh viên, học viên... Lớp học là tổ
						<span>chức tôn giáo và tổ chức nhân đạo, y tế....<span>
					</p>
					<span class="blue">Bradley Ortiz</span>
				</div>
			</div>
			<div class="slider-nav-thumbnails">
				<div class="thumb">
					<div class="overlay"></div>
					<img src="images/thumb1.png" alt="">
				</div>
				<div class="thumb">
					<div class="overlay"></div>
					<img src="images/thumb2.png" alt="">
				</div>
				<div class="thumb">
					<div class="overlay"></div>
					<img src="images/thumb3.png" alt="">
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.aboutSlick').slick({
			 	slidesToShow: 1,
			 	slidesToScroll: 1,
			 	arrows: false,
			 	fade: false,
			 	asNavFor: '.slider-nav-thumbnails',

			 });

			 $('.slider-nav-thumbnails').slick({
			 	slidesToShow: 5,
			 	slidesToScroll: 1,
			 	asNavFor: '.aboutSlick',
			 	dots: true,
			 	//	centerMode: true,
			 	focusOnSelect: true
			 });


			 //remove active class from all thumbnail slides
			 $('.slider-nav-thumbnails .slick-slide').removeClass('slick-active');

			 //set active class to first thumbnail slides
			 $('.slider-nav-thumbnails .slick-slide').eq(0).addClass('slick-active');

			 // On before slide change match active thumbnail to current slide
			 $('.slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
			 	var mySlideNumber = nextSlide;
			 	$('.slider-nav-thumbnails .slick-slide').removeClass('slick-active');
			 	$('.slider-nav-thumbnails .slick-slide').eq(mySlideNumber).addClass('slick-active');
			});
		});
	</script>
</section>

<section class="introduce section">
	<div class="container">
		<div class="row">
			<div class="colleft">
				<img src="images/man.jpg" alt=""/>
			</div>
			<div class="colright">
				<h3 class="blue">Dawid Tuminski</h3>
				<span>Adobe Certified Expert in Illustrator</span>
				<p>
					I've been using graphical software for many years now and I've recently decided to share my knowledge with others and I always try to do it in a straight-to-the-point kind of way with a touch of entertainment.
				</p>
				<p>
					To tell you the truth I never thought of taking up a career as a teacher of any kind. In fact, I was always reluctant to agree with people, who always encouraged me to teach, saying: You should be a teacher! 
				</p>
				<a href="#" class="btn btnblue">Theo dõi</a>
			</div>
		</div>
	</div>
</section>