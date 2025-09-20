
 @extends('layouts.home')

@section('title', 'Know Us - Consultez')
@push('styles')
    {{-- <link href="{{ asset('assets/css/about.css') }}" rel="stylesheet"> --}}
	<link rel="stylesheet" type="text/css" href="https://www.godrejcareers.com/css/bootstrap.css">
@endpush
@section('content')
<section class="fwp">
<div class="fw owl-carousel owl-theme" id="landing_other_slider">
	<div class="fwp">
		<div class="fwvh pr" id="banner_people01">&nbsp;</div>
	</div>
	<div class="fwp">
		<div class="fwvh pr" id="banner_people02">&nbsp;</div>
	</div>
	<div class="fwp">
		<div class="fwvh pr" id="banner_people">&nbsp;</div>
	</div>
</div>
<ul id='landing_other_dots' class='owl-dots pyb zindex3'></ul>
<div class="single_multibanner_caption pxy txc zindex5">
	<h1 class="white animated fadeInUp zindex5">Grow with <br class="visible-xs">Godrej</h1>
</div>
</section>

<section id="after_landing_shortdesc" class="txc">
	<h6 class="wow fadeInUp animated">Passionate people make for<br>passionate <span class="Seaside-Groove-Regular paint_underline">Godrejites<span class="underline_animation">&nbsp;</span><span class="underline_animation_mask">&nbsp;</span></span></h6>

</section>

<div class="fw v_line">&nbsp;</div>

<section id="after_landing_shortdesc" class="title_desc_left txc">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<h6 class="wow fadeInUp animated">Our Philosophy<br><br></h6>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
				<div class="row">
					<div class="col-md-4">
						<div class="box_philosophy txc">
							<img src="https://www.godrejcareers.com/images/home/Your-Canvas.png" alt="Your Canvas" class="fw">
							<h2>Your <br>Canvas</h2>
							<p class="your_clr">We are expanding <br class="hidden-xs">and you <br class="visible-xs">will grow <br class="hidden-xs">with us</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="box_philosophy txc">
							<img src="https://www.godrejcareers.com/images/home/Whole-Self.png" alt="Whole Self" class="fw">
							<h2>Whole <br>Self</h2>
							<p class="whole_clr">We are selfish <br class="hidden-xs">about<br class="visible-xs"> your <br class="hidden-xs">happiness</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="box_philosophy txc">
							<img src="https://www.godrejcareers.com/images/home/Tough-Love.png" alt="Tough Love" class="fw">
							<h2>Tough <br>Love</h2>
							<p class="tough_clr">Go ahead and <br class="hidden-xs">challenge yourself! <br> We’ve got your back.</p>
						</div>
					</div>
					<div class="col-md-6 col-md-offset-3">
								<div class="explore__btn">
									<a href="https://www.godrejcareers.com/people-philosophy/" class="learnmore wow fadeInUp animated fast">Explore</a>
								</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="fw v_line">&nbsp;</div>
<section id="after_landing_shortdesc" class="benefit_links_container txc">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<h6 class="wow fadeInUp animated">Empowering our people,<br class="visible-xs"> every day<br><br></h6>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-0 col-xs-10 col-xs-offset-1">
				<div class="benefit_link home_benefits fw">
					<div class="col-md-6 txr col-xs-6">
						<img src="https://www.godrejcareers.com/images/benefits/plan-for-your-future.png" alt="Plan for your future" width="70%">
					</div>
					<div class="col-md-6 col-xs-6">
						<p class="hidden-xs">Plan<br>for your<br>future</p>
						<p class="visible-xs">Plan for<br>your future</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-md-offset-0  col-xs-10 col-xs-offset-1">
				<div class="benefit_link home_benefits fw">
					<div class="col-md-6 txr col-xs-6">
						<img src="https://www.godrejcareers.com/images/benefits/we-are-selfish-about-your-wellness.png" alt="Plan for your future" width="80%">
					</div>
					<div class="col-md-6 col-xs-6">
						<p class="hidden-xs">We are<br>selfish<br>about your<br>wellness</p>
						<p class="visible-xs">We are selfish<br>about your<br>wellness</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-md-offset-0  col-xs-10 col-xs-offset-1">
				<div class="benefit_link home_benefits fw">
					<div class="col-md-6 txr txc_mo col-xs-6">
						<img src="https://www.godrejcareers.com/images/benefits/be-an-equal-parent.png" alt="Plan for your future" width="85%">
					</div>
					<div class="col-md-6 col-xs-6">
						<p class="hidden-xs">Be<br>an equal<br>parent</p>
						<p class="visible-xs">Be an<br>equal parent</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-0  col-xs-10 col-xs-offset-1">
				<div class="benefit_link home_benefits fw">
					<div class="col-md-6 txc col-xs-6">
						<img src="https://www.godrejcareers.com/images/benefits/no-place-for-discrimination-at-godrej.png" alt="Plan for your future" width="50%">
					</div>
					<div class="col-md-6 col-xs-6">
						<p>No place for<br> discrimination<br> at Godrej</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-md-offset-0  col-xs-10 col-xs-offset-1">
				<div class="benefit_link home_benefits fw">
					<div class="col-md-6 txc col-xs-6">
						<img src="https://www.godrejcareers.com/images/benefits/refuel-learn-grow.png" alt="Plan for your future" width="70%">
					</div>
					<div class="col-md-6 col-xs-6">
						<p>Refuel,<br> learn,<br> grow</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-md-offset-0 col-xs-10 col-xs-offset-1">
				<div class="benefit_link home_benefits fw">
					<div class="col-md-6 txr txc_mo col-xs-6">
						<img src="https://www.godrejcareers.com/images/benefits/pass-it-forward.png" alt="Plan for your future" width="60%">
					</div>
					<div class="col-md-6 col-xs-6">
						<p>Pass it<br> forward</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-4 col-xs-10 col-xs-offset-1">
				<div class="benefit_link home_benefits fw">
					<div class="col-md-6 txc txc_mo col-xs-6">
						<img src="https://www.godrejcareers.com/images/benefits/celebrate-wins-the-godrej-way.png" alt="Plan for your future" width="25%">
					</div>
					<div class="col-md-6 col-xs-6">
						<p class="hidden-xs">Celebrate<br> wins, the<br> Godrej way</p>
						<p class="visible-xs">Celebrate wins,<br> the Godrej way</p>
					</div>
				</div>
			</div>
				<div class="col-md-6 col-md-offset-3">
							<div class="explore__btn">
								<a href="benefits" class="learnmore wow fadeInUp animated fast">Explore</a>
							</div>
				</div>
		</div>
	</div>
</section>
<div class="fw v_line">&nbsp;</div>
<section class="fw txc home_godrej_learning">
	<div class="container">
		<div class="row">
			<div class="learning_sec">
				<div class="col-md-6 col-xs-8 col-xs-offset-2 col-md-offset-3 wow animated fadeInUp">
					<img src="https://www.godrejcareers.com/images/home/learning_logo_white.png" class="fw" alt="Apply">
				</div>
				<div class="col-md-12 col-xs-12 col-md-offset-0 col-xs-offset-0 wow animated fadeInUp">
					<h6 class="txc">Our in-house learning hub dedicated <br>to capability building</h6>
					<div class="explore__btn">
						<a href="https://www.godrejcareers.com/learning/" class="white learnmore wow fadeInUp animated fast">Explore</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="fw v_line">&nbsp;</div>
<section id="after_landing_shortdesc" class="acing_boxes">
	<div class="container">
		<div class="row txc">
			<div class="col-md-12 col-xs-12">
				<h6 class="wow fadeInUp animated">Acing your interview<br class="visible-xs"><br class="visible-xs"></h6>
				<!-- <p class="blk60">Our tips on standing out when you <br class="visible-xs">interview with us <br><br></p> -->
			</div>
		</div>
		<div class="row extra_space">
			<div class="col-md-4 col-md-offset-2 col-xs-10 col-xs-offset-1">
				<div class="acing__box fw">
					<div class="col-md-2 txc col-xs-2">
							<span class="Avenir_Black blk60">01</span>
					</div>
					<div class="col-md-10 col-xs-10">
						<h4 class="Avenir_Black">Be your<br>WH<img src="https://www.godrejcareers.com/images/work-with-us/new-images/icon_whole.png" class="icon_whole">LE self</h4>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-md-offset-0 col-xs-10 col-xs-offset-1">
				<div class="acing__box fw">
					<div class="col-md-2 txc col-xs-2">
							<span class="Avenir_Black blk60">02</span>
					</div>
					<div class="col-md-10 col-xs-10">
						<h4 class="Avenir_Black">Research before <br>you  &nbsp;interview<img src="https://www.godrejcareers.com/images/work-with-us/new-images/icon_zoom.png" class="icon_zoom"></h4>
					</div>
				</div>
			</div>
		</div>
		<div class="row extra_space">
			<div class="col-md-4 col-md-offset-2  col-xs-10 col-xs-offset-1">
				<div class="acing__box fw">
					<div class="col-md-2 txc col-xs-2">
							<span class="Avenir_Black blk60">03</span>
					</div>
					<div class="col-md-10 col-xs-10">
						<h4 class="Avenir_Black">Ask<br>questions<img src="https://www.godrejcareers.com/images/work-with-us/new-images/question_mark.png" class="question_mark"></h4>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-md-offset-0 col-xs-10 col-xs-offset-1">
				<div class="acing__box fw">
					<div class="col-md-2 txc col-xs-2">
							<span class="Avenir_Black blk60">04</span>
					</div>
					<div class="col-md-10 col-xs-10">
						<h4 class="Avenir_Black">We l<img src="https://www.godrejcareers.com/images/work-with-us/new-images/purple_heart.png" class="purple_heart">ve a<br class="hidden-xs"> growth<br class="visible-xs"> and <br class="hidden-xs">learning mindset</h4>
					</div>
				</div>
			</div>
		</div>
			<div class="col-md-6 col-md-offset-3 txc">
						<div class="explore__btn">
							<a href="https://www.godrejcareers.com/work-with-us/" class="learnmore wow fadeInUp animated fast">Explore</a>
						</div>
			</div>
	</div>
</section>
<!-- <section id="hygiene_banner_home" class="title_desc_left mo_txc">
	<div class="container">
		<div class="fw fwp">
			<div class="row">
				<div class="col-md-6 col-xs-12">
					<img src="images/video_bg.png" class="fw hidden-xs">
					<div class="fwpx no_mob_fwpx fw">
						<div class="col-md-10">
							<div class="fw desc">
								<h3 class="wow animated fadeInUp fast">Work with our <br>amazing team</h3>
									<p class="blk60 wow animated fadeInUp fast">We're all about making goodness. Whether you're interested in a role in consumer goods, chemicals, agriculture or real estate, bring your passion along so we can make goodness together!</p>
								<a href="https://godrejcareers.peoplestrong.com/home" class="learnmore wow fadeInUp animated fast">Explore our opportunities</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-xs-12">
					<div class="fw pr wow fadeIn animated">
						<div class="fw mob_videos">
							<div class="fw owl-carousel owl-theme" id="hygiene_banner_slider">
								<img src="images/home/work_with_our_amazing_team_01.jpg" class="fw" alt="Work with our amazing team">
								<img src="images/home/work_with_our_amazing_team_02.jpg" class="fw" alt="Work with our amazing team">
								<img src="images/home/work_with_our_amazing_team_03.jpg" class="fw" alt="Work with our amazing team">
								<img src="images/home/work_with_our_amazing_team_04.jpg" class="fw" alt="Work with our amazing team">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->
<!-- <section class="title_desc_left Nisaba_Godrej_video-people">
	<div class="container">
		<div class="fw fwp">
			<div class="row pr">

				<div class="col-md-6 hidden-xs">
					<div class="mob_videos fw pr wow fadeIn animated">
						<a class="fw play_video_slide" data-youtube="_YTZPzNTJ78" data-element="nisaba">
							<img src="images/landing/Nisaba_Godrej_videoimg.jpg" class="fw" alt="Nisaba Godrej">
							<div class="videoplayic pxy">&nbsp;</div>
						</a>
					</div>
				</div>

				<div class="col-md-6">
					<div class="fw pr desc">
						<img src="images/video_bg.png" class="fw hidden-xs">
						<div class="fwpx no_mob_fwpx fw">
							<div class="col-md-10 col-md-offset-2">
								<h4 class="wow fadeInUp animated fast videotitle blk212120">Nisaba Godrej</h4>
								<h3 class="wow fadeInUp animated fast blk212120">on values, leadership<br>and legacy</h3>
								<p class="wow fadeInUp animated fast greya7">No better way to understand who we are! Watch Nisaba Godrej on Godrej, her journey and what she’s in it for.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 visible-xs">
					<div class="fw pr wow fadeIn animated zindex3">
						<a class="fw play_video" id="nisaba_video_link" data-youtube="_YTZPzNTJ78" data-element="nisaba_video_link" data-iframe="nisaba">
							<img src="images/landing/Nisaba_Godrej_videoimg.jpg" class="fw" alt="Nisaba Godrej">
							<div class="videoplayic pxy">&nbsp;</div>
						</a>
						<iframe class="player" id="video_nisaba" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						<div class="close_video"></div>
					</div>
				</div>
			</div>


			<div id="nisaba_video" class="video_slide">
				<img src="images/video_popup.png" class="fw">
				<iframe class="player" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				<a class="close_slide_video"></a>
			</div>

		</div>

	</div>
</section> -->

<!-- <div class="fw h50 visible-xs">&nbsp;</div>
<div class="fw v_line">&nbsp;</div> -->

<!-- <section class="title_desc_left pdtb100">
	<div class="container">


		<div class="fw fwp">
			<div class="fw">
				<div class="row">

					<div class="col-md-6 col-xs-12">
						<img src="images/video_bg.png" class="fw hidden-xs">
						<div class="fwpx no_mob_fwpx fw">
							<div class="col-md-10">
								<div class="fw desc">
									<h4 class="wow fadeInUp animated fast videotitle blk212120">People</h4>
									<h3 class="wow fadeInUp animated fast blk212120">Philosophy</h3>
									<p class="wow fadeInUp animated fast greya7">We are building a purposeful, inspiring, agile Godrej, rooted in "tough love" and encouraging you to be your "whole self"</p>
									<a class="learnmore">Explore</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-xs-12 hidden-xs">
						<div class="mob_videos fw pr wow fadeIn animated">
							<a class="fw play_video_slide" data-youtube="RxiHCMR64Hs" data-element="people">
								<img src="images/landing/People_Philosophy_banner.jpg" class="fw" alt="People Philosophy">
								<div class="videoplayic pxy">&nbsp;</div>
							</a>
						</div>
					</div>

					<div class="col-md-6 col-xs-12 visible-xs">
						<div class="fw pr wow fadeIn animated">
							<a class="fw play_video" id="people_video_link" data-youtube="RxiHCMR64Hs" data-element="people_video_link" data-iframe="people">
								<img src="images/landing/People_Philosophy_banner.jpg" class="fw" alt="People Philosophy">
								<div class="videoplayic pxy">&nbsp;</div>
							</a>
							<iframe class="player" id="video_people" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							<div class="close_video"></div>
						</div>
					</div>

				</div>

			</div>

			<div id="people_video" class="video_slide po_right">
				<img src="images/video_popup.png" class="fw">
				<iframe class="player" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				<a class="close_slide_video"></a>
			</div>

		</div>

	</div>
</section> -->

<!-- <div class="fw h50 visible-xs">&nbsp;</div>
<div class="fw v_line">&nbsp;</div>

<div class="h100 fw hidden-xs">&nbsp;</div>
<div class="h50 fw visible-xs">&nbsp;</div> -->

<!-- <section id="diversity-people">
	<div class="fwp title_desc_left txc visible-xs">
		<h3 class="wow fadeInUp animated fast blk212120">We value</h3>
		<h4 class="wow fadeInUp animated fast videotitle blk212120">Diversity<br><br></h4>
		<img src="images/landing/mobile/01.jpg" class="plain fw wow fadeInUp animated fast">
	</div>
	<div class="container-fluid visible-xs">
	<div class="row">
		<div class="col-xs-12">
			<div class="fw title_desc_left">
			<div class="fw desc">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 col-xs-12">
						<h3 class="wow fadeInUp animated fast blk212120">We value</h3>
						<h4 class="wow fadeInUp animated fast videotitle blk212120">Diversity</h4>
						<p class="wow fadeInUp animated fast greya7">Diversity is core to who we are.<br>There is no place for prejudice at Godrej.<br>Only space for open minds and hearts.</p>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	</div>
	<div class="container-fluid">
		<div class="col-md-3 col-xs-3">
			<img src="images/landing/diversity/plain96.jpg" class="wow fadeInUp animated fast fw plain">
			<img src="images/landing/diversity/01_diversity.jpg" class="wow fadeInUp animated fast fw" alt="Diversity">
			<img src="images/landing/diversity/02_diversity.jpg" class="wow fadeInUp animated fast fw" alt="Diversity">
		</div>
		<div class="col-md-6 col-xs-6">
			<div class="row">
			<div class="title_desc_left fw txc">
				<div class="col-md-12 col-xs-12">
					<div class="fw desc hidden-xs">
						<div class="row">
							<div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1">
								<h3 class="wow fadeInUp animated fast blk212120">We value</h3>
								<h4 class="wow fadeInUp animated fast videotitle blk212120">Diversity</h4>
								<p class="wow fadeInUp animated fast greya7">Diversity is core to who we are.<br>There is no place for prejudice at Godrej.<br>Only space for open minds and hearts.</p>
							</div>
						</div>
					</div>
					<div class="fw wow fadeInUp animated fast">
						<div class="h30 fw hidden-xs"></div>
						<div class="h60 fw visible-xs"></div>
						<a class="fw play_video_popup dib zindex3" data-youtube="-8kFELWFbqg">
							<div class="videoplayic pxy">&nbsp;</div>
						</a>
					</div>
				</div>
				<div class="h80 hidden-xs fw">&nbsp;</div>
				<div class="h10 visible-xs fw">&nbsp;</div>
				<a href="diversity/" class="wow fadeInUp animated fast learnmore">Explore</a>
				<div class="h80 fw hidden-xs">&nbsp;</div>
				<div class="h20 fw visible-xs">&nbsp;</div>
			</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-xs-6">
					<img src="images/landing/diversity/05_diversity.jpg" class="wow fadeInUp animated fast fw" alt="Diversity">
					<img src="images/landing/diversity/06_diversity.jpg" class="wow fadeInUp animated fast fw" alt="Diversity">
				</div>
				<div class="col-md-6 col-xs-6">
					<div class="h100 fw hidden-xs">&nbsp;</div>
					<div class="h30 fw visible-xs">&nbsp;</div>
					<img src="images/landing/diversity/04_diversity.jpg" class="wow fadeInUp animated fast fw" alt="Diversity">
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-3">
			<img src="images/landing/diversity/plain96.jpg" class="wow fadeInUp animated fast fw plain">
			<img src="images/landing/diversity/08_diversity.jpg" class="wow fadeInUp animated fast fw" alt="Diversity">
			<img src="images/landing/diversity/03_diversity.jpg" class="wow fadeInUp animated fast fw" alt="Diversity">
			<img src="images/landing/diversity/07_diversity.jpg" class="wow fadeInUp animated fast fw" alt="Ryan">
		</div>
	</div>
</section> -->

<!-- <div class="h100 fw hidden-xs">&nbsp;</div>
<div class="h20 fw visible-xs">&nbsp;</div>
<div class="fw v_line">&nbsp;</div>
<div class="h100 fw hidden-xs">&nbsp;</div> -->

<!-- <section class="title_desc_left">
	<div class="container">
		<div class="fw fwp">
			<div class="row pr">

				<div class="col-md-6 hidden-xs">
					<div class="mob_videos fw pr wow fadeIn animated">
						<a class="fw play_video_slide" data-youtube="y1eI0suP1lQ" data-element="campus">
							<img src="images/landing/Godrej_On_Campus_banner.jpg" class="fw" alt="Godrej On campus">
							<div class="videoplayic pxy">&nbsp;</div>
						</a>
					</div>
				</div>

				<div class="col-md-6">
					<div class="fw pr desc">
						<img src="images/video_bg.png" class="fw hidden-xs">
						<div class="fwpx no_mob_fwpx fw">
							<div class="col-md-10 col-md-offset-2">
								<h3 class="wow fadeInUp animated fast blk212120">Godrej</h3>
								<h4 class="wow fadeInUp animated fast videotitle blk212120">On campus</h4>
								<p class="wow fadeInUp animated fast greya7">We know what it's like to be 25 years old and ready to take on the world!</p>
								<a href="on-campus/" class="wow fadeInUp animated fast learnmore">Explore</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 visible-xs">
					<div class="fw pr wow fadeIn animated zindex3">
						<a class="fw play_video" id="campus_video_link" data-youtube="y1eI0suP1lQ" data-element="campus_video_link" data-iframe="campus">
							<img src="images/landing/Godrej_On_Campus_banner.jpg" class="fw" alt="Godrej On campus">
							<div class="videoplayic pxy">&nbsp;</div>
						</a>
						<iframe class="player" id="video_campus" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						<div class="close_video"></div>
					</div>
				</div>
			</div>


			<div id="campus_video" class="video_slide">
				<img src="images/video_popup.png" class="fw">
				<iframe class="player" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				<a class="close_slide_video"></a>
			</div>

		</div>
	</div>
</section> -->

<!-- <div class="h100 fw hidden-xs">&nbsp;</div>
<div class="h50 fw visible-xs">&nbsp;</div>
<div class="fw v_line">&nbsp;</div>
<div class="h100 fw hidden-xs">&nbsp;</div>
<div class="h50 fw visible-xs">&nbsp;</div>


<section id="meet-godrej">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="row">
					<h2 class="meet-godrej-title wow fadeInUp animated fast">Meet <br>Godrejites</h2>
				</div>
				<div class="row hidden-xs">
					<div class="col-md-8 col-md-offset-4">
						<img src="images/landing/meet-godrejites/02meet-godrejites.jpg" class="wow fadeInUp animated fast fw" alt="Meet Godrejites">
					</div>
				</div>
				<div class="row hidden-xs">
					<div class="col-md-12">
						<img src="images/landing/meet-godrejites/07meet-godrejites.jpg" class="wow fadeInUp animated fast fw" alt="Meet Godrejites">
					</div>
				</div>
			</div>
			<div class="col-md-5 hidden-xs">
				<div class="row pr">
					<div class="col-md-6"><img src="images/landing/meet-godrejites/01meet-godrejites.jpg" class="wow fadeInUp animated fast fw" alt="Meet Godrejites"></div>
					<div class="fw pyb">
						<div class="col-md-6 col-md-offset-6" style="padding-left: 0">
							<div class="fwp">
								<img src="images/landing/meet-godrejites/06meet-godrejites.jpg" class="wow fadeInUp animated fast fw" alt="Meet Godrejites">
							</div>
						</div>
					</div>
				</div>
				<div class="row pr">
					<div class="col-md-9">
						<div class="fwp">
							<img src="images/landing/meet-godrejites/08meet-godrejites.jpg" class="wow fadeInUp animated fast fw" alt="Meet Godrejites">
							<a href="meet-us/" class="learnmore pyb wow fadeIn animated">Explore</a>
						</div>
					</div>
					<div class="fw py">
						<div class="row">
							<div class="col-md-9 col-md-offset-9" style="padding-left: 10px">
								<div class="fwp">
									<img src="images/landing/meet-godrejites/09meet-godrejites.jpg" class="wow fadeInUp animated fast fw" alt="Meet Godrejites">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-md-offset-9" style="padding-left: 10px">
								<img src="images/landing/meet-godrejites/04meet-godrejites.jpg" class="wow fadeInUp animated fast fw" alt="Meet Godrejites">
							</div>
						</div>
					</div>
				</div>
				<div class="row pr">
					<div class="col-md-6 col-md-offset-3">
						<img src="images/landing/meet-godrejites/03meet-godrejites.jpg" class="wow fadeInUp animated fast fw" alt="Meet Godrejites">
					</div>
					<div class="fw py">
						<div class="col-md-6" style="margin-left: -25%;">
							<div class="fwp">
								<img src="images/landing/meet-godrejites/05meet-godrejites.jpg" class="wow fadeInUp animated fast fw" alt="Meet Godrejites">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="fwp visible-xs wow fadeInUp animated fast">
		<img src="images/landing/mobile/godrejites.jpg" class="fw">
		<a href="meet-us/" class="learnmore pyb wow fadeIn animated">Explore</a>
	</div>

</section> -->

<!-- <div class="h80 fw hidden-xs">&nbsp;</div>
<div class="h80 fw hidden-xs">&nbsp;</div>
<div class="h50 fw visible-xs">&nbsp;</div> -->


<section class="fwp wow fadeInUp animated fast opportunities" id="join_us_profile">
	<div class="container-fluid">

		<div class="row">
			<div class="col-md-12 col-xs-12 pd">
				<div class="fw">
					<img src="https://www.godrejcareers.com/images/work-with-us/Explore_exciting_opportunities.jpg" class="fw hidden-xs" alt="Explore exciting opportunities" />
					<img src="https://www.godrejcareers.com/images/work-with-us/mobile/Explore_exciting_opportunities.jpg" class="fw visible-xs" alt="Explore exciting opportunities" />
				</div>
			</div>      
		</div>

	</div>
	<div class="bg_op_grey zindex2">&nbsp;</div>
	<div class="pxy fw zindex3">
		<div class="fw txc">
			<h4 class="wow fadeInUp animated fast"><a href="https://godrejcareers.peoplestrong.com/home" target="_blank" class="learnmore white">Apply now</a></h4>
		</div>
	</div>
</section>

<div class="h30 fw hidden-xs">&nbsp;</div>
<div id="video_popup">
	<div class="fwpx">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-12">
					<div class="fw pr">
						<img src="images/video_popup.png" class="fw">
						<iframe class="player" id="youtube_popup" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
	<a id="close_popup"></a>
</div>


<div id="disclaimer">
	<div id="disclaimer_inside">
		<div class="title_desc_left">
			<h4 class="page_title">Disclaimer</h4>
			<p>At Godrej, we do not ask candidates for any fee, deposit or travelling expenses linked to job opportunities. Any such requests are strictly against our hiring policies. If you do receive any such communication, please reach out to our HR team at <a class="blk" href="mailto:corporatehr@godrejinds.com">corporatehr@godrejinds.com</a> to verify the opportunity.</p>
		</div>
		<a class="arrow-popup-close">&nbsp;</a>
	</div>
</div>

@endsection

@push('scripts')
    {{-- <script src="{{ asset('js/about.js') }}"></script> --}}

@endpush
    