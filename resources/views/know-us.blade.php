
 @extends('layouts.home')

@section('title', 'Know Us - Consultez')
@push('styles')
    <link href="{{ asset('assets/css/know-us.css') }}" rel="stylesheet">
@endpush
@section('content')

<section id="landing" class="title_desc_left fwp">

	<div class="fw owl-carousel owl-theme" id="landing_other_slider">
		<div class="slide_item item-video" id="know_us_banner_new">&nbsp;</div>
	</div>
	<!-- <ul id='landing_other_dots' class='owl-dots pyb zindex3'></ul> -->

	<div class="banner_caption txc">
		<h2 class="white animated fadeInUp">Know Us</h2>
	</div>

</section>

<section id="know-us" class="title_desc_left">
	<div class="container">
		<div class="row">			
			<div class="col-md-10 col-md-offset-1">
				<div class="fw desc txc">
					<h3 class="wow fadeInUp animated">Godrej, over 125 years young</h3>
				</div>
			</div>
			<div class="col-md-12">
				<div class="fw pr">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="seperator seperator_trans">&nbsp;</section>

<section id="sustainability_home" class="title_desc_left mo_txc">
	<div class="container">
		<div class="fw fwp">
			<div class="row">
				<div class="col-md-6 visible-xs">
					<div class="fw pr desc">
						<img src="https://www.godrejindustries.com/public/images/video_bg.png" class="fw hidden-xs">
						<div class="fw">
							<div class="col-md-10 col-md-offset-2">
								<h3 class="wow fadeInUp animated fast">Our<br>Story</h3>
								<p class="blk60 wow fadeInUp animated fast">It began as part of India's Swadeshi movement - the original 'Make in India' movement.</p>
								<a href="{{ route('know-us.story') }}" class="learnmore wow fadeInUp animated fast">Explore</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xs-12 visible-xs">
					<div class="mob_videos fw pr wow fadeIn animated">
						<img src="https://www.godrejindustries.com/public/images/about/know-us/Our-Story.jpg" class="fw" alt="Our Story">
					</div>
				</div>

				<div class="col-md-6 hidden-xs">
					<div class="mob_videos fw pr wow fadeIn animated">
						<img src="https://www.godrejindustries.com/public/images/about/know-us/Our-Story.jpg" class="fw" alt="Our Story">
					</div>
				</div>
				<div class="col-md-6 hidden-xs">
					<div class="fw pr desc">
						<img src="https://www.godrejindustries.com/public/images/video_bg.png" class="fw hidden-xs">
						<div class="fwpx no_mob_fwpx fw">
							<div class="col-md-10 col-md-offset-2">
								<h3 class="wow fadeInUp animated fast">Our<br>Story</h3>
								<p class="blk60 wow fadeInUp animated fast">It began as part of India's Swadeshi movement - the original 'Make in India' movement.</p>
								<a href="{{ route('know-us.story') }}" class="learnmore wow fadeInUp animated fast">Explore</a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<section class="seperator">&nbsp;</section>

<section id="people_home" class="title_desc_left mo_txc">
	<div class="container">

		<div class="fw fwp">
			<div class="fw">
				<div class="row">

					<div class="col-md-6 col-xs-12">
						<img src="https://www.godrejindustries.com/public/images/video_bg.png" class="fw hidden-xs">
						<div class="fwpx no_mob_fwpx fw">
							<div class="col-md-10">
								<div class="fw desc">
									<h3 class="wow animated fadeInUp fast">About Godrej <br>Industries Group</h3>
									<p class="blk60 wow animated fadeInUp fast">There are many ways to do business.<br>We choose the Goodness Way.</p>
									<a href="{{ route('know-us.about') }}" class="learnmore wow animated fadeInUp fast">Explore</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-xs-12 hidden-xs">
						<div class="mob_videos fw pr wow fadeIn animated">
							<a class="fw play_video_slide" data-youtube="fK86CanhKfY" data-element="people">
								<img src="https://www.godrejindustries.com/public/images/about/know-us/The-Godrej-Way.jpg" class="fw" alt="The Godrej Way">
								<div class="videoplayic pxy">&nbsp;</div>
							</a>
						</div>
					</div>

					<div class="col-md-6 col-xs-12 visible-xs">
						<div class="mob_videos fw pr wow fadeIn animated">
							<a class="fw play_video" id="people_video_link" data-youtube="fK86CanhKfY" data-element="people_video_link" data-iframe="people">
								<img src="https://www.godrejindustries.com/public/images/about/know-us/The-Godrej-Way.jpg" class="fw">
								<div class="videoplayic pxy">&nbsp;</div>
							</a>
							<iframe class="player" id="video_people" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							<div class="close_video"></div>
						</div>
					</div>

				</div>

			</div>

			<div id="people_video" class="video_slide po_right">
				<img src="https://www.godrejindustries.com/public/images/video_popup.png" class="fw">
				<iframe class="player" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				<a class="close_slide_video"></a>
			</div>

		</div>
	</div>
</section>
@endsection

@push('scripts')
@endpush
    