
 @extends('layouts.home')

@section('title', 'Know Us - Consultez')
@push('styles')
    {{-- <link href="{{ asset('assets/css/about.css') }}" rel="stylesheet"> --}}
	<link rel="stylesheet" type="text/css" href="https://www.godrejindustries.com/public/css/sustainability_common.css?v=1758372875">
	<link rel="stylesheet" type="text/css" href="https://www.godrejindustries.com/public/css/godrej-trusts.css?v=1758372875">
@endpush
@section('content')

<section class="fwp">
	<div class="fw owl-carousel owl-theme" id="landing_other_slider">
		<div class="fwp">
			<div class="fwvh_new pr" id="banner_godrej_trusts_01">&nbsp;</div>
			<!-- <div class="fw pxy txc landing_caption"><h2 class="animated fadeInUp">Godrej Trusts</h2></div> -->
		</div>
		<div class="fwp">
			<div class="fwvh_new pr" id="banner_godrej_trusts_02">&nbsp;</div>
		</div>
		<!-- <div class="fwp">
			<div class="fwvh_new pr" id="banner_godrej_trusts_03">&nbsp;</div>
		</div> -->
	</div>
	<ul id='landing_other_dots' class='owl-dots pyb zindex3'></ul>
	<div class="banner_caption txc">
		<h2 class="white animated fadeInUp">Godrej Foundation</h2>
		<!-- <a class="play_video_popup animated fadeInUp" data-youtube="KDajDnnpIzE">
			<div class="videoplayic fwp">&nbsp;</div>
		</a> -->
	</div>
</section>

<section class="fw txc" id="godrej_trusts">
	<div class="container title_desc_left">
		<div class="row">
			<div class="col-md-12 col-xs-10 col-xs-offset-1 col-md-offset-0 wow animated fadeInUp">
				<h3 class="section_title">The Godrej Foundation, an independent philanthropic trust, <br class="hidden-xs">owns approximately 10% of the Godrej Industries Group. <br class="hidden-xs">The Foundation aims to support organisations, efforts and <br class="hidden-xs">innovations that move all Indians towards greater prosperity, <br class="hidden-xs">with improved access to opportunity and justice.</h3>
			</div>
			<div class="fw h50">&nbsp;</div>
			<div class="fw h50 hidden-xs">&nbsp;</div>
		</div>
		<div class="row wow animated fadeInUp">
			<div class="col-md-3 col-xs-12 pd">
				<div class="godrej_trusts_box pr fw">
					<h4 class="sustainability_titles green3e">Economic <br>acceleration</h4>
					<p class="blk60">Enabling accelerated, <br class="hidden-xs">inclusive and sustainable <br class="hidden-xs">economic growth</p>
					<a href="https://www.godrejfoundation.com/areas-of-work/economic-acceleration" class="learnmore" target="_blank">Explore</a>
					<!-- <div class="seperator">&nbsp;</div> -->
					<div class="seperator_right hidden-xs">&nbsp;</div>
				</div>
			</div>
			<div class="col-md-3 col-xs-12 pd">
				<div class="godrej_trusts_box pr fw">
					<h4 class="sustainability_titles green3e singleLine">Strengthening <br>institutions</h4>
					<p class="blk60">Advancing capacity building <br class="hidden-xs">and strengthening governance <br class="hidden-xs">in key institutions</p>
					<a href="https://www.godrejfoundation.com/areas-of-work/strengthening-institutions" class="learnmore" target="_blank">Explore</a>
					<!-- <div class="seperator">&nbsp;</div> -->
					<div class="seperator_right hidden-xs">&nbsp;</div>
				</div>
			</div>
			<div class="col-md-3 col-xs-12 pd">
				<div class="godrej_trusts_box pr fw">
					<h4 class="sustainability_titles green3e">Empowering <br>communities</h4>
					<p class="blk60">Supporting access, aspirations and livelihoods for disadvantaged groups, including women and queer people </p>
					<a href="https://www.godrejfoundation.com/areas-of-work/empowering-communities" class="learnmore" target="_blank">Explore</a>
					<!-- <div class="seperator">&nbsp;</div> -->
					<div class="seperator_right hidden-xs">&nbsp;</div>
				</div>
			</div>
			<div class="col-md-3 col-xs-12 pd">
				<div class="godrej_trusts_box pr fw">
					<h4 class="sustainability_titles green3e singleLine">Social <br>innovation</h4>
					<p class="blk60">Backing the use of technology <br class="hidden-xs">to move the needle <br class="hidden-xs">on wicked problems </p>
					<a href="https://www.godrejfoundation.com/areas-of-work/social-innovation" class="learnmore" target="_blank">Explore</a>
					<!-- <div class="seperator visible-xs">&nbsp;</div> -->
					<!-- <div class="seperator_right hidden-xs">&nbsp;</div> -->
				</div>
			</div>
		</div>
		<!-- <div class="row">
			<div class="col-md-4 col-xs-12 pd">
				<div class="godrej_trusts_box pr fw">
					<h4 class="sustainability_titles green3e">World Wide Fund<br>for Nature</h4>
					<p class="blk60">Helping conserve India’s biodiversity,<br class="hidden-xs"> habitats and ecosystems </p>
					<a href="https://www.wwfindia.org/" class="learnmore" target="_blank">Explore</a>
					<div class="seperator visible-xs">&nbsp;</div>
					<div class="seperator_right hidden-xs">&nbsp;</div>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 pd">
				<div class="godrej_trusts_box pr fw">
					<h4 class="sustainability_titles green3e singleLine">Social <br>innovation</h4>
					<p class="blk60">Backing the use of technology<br class="hidden-xs"> to move the needle on wicked problems </p>
					<a href="https://www.godrejfoundation.com/areas-of-work/social-innovation" class="learnmore" target="_blank">Explore</a>
					<div class="seperator visible-xs">&nbsp;</div>
					<div class="seperator_right hidden-xs">&nbsp;</div>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 pd">
				<div class="godrej_trusts_box pr fw">
					<p>&nbsp;</p>
					<h4 class="sustainability_titles green3e">Smile<br>Train</h4>
					<p class="blk60">Collaborating to treat children from low<br class="hidden-xs"> income families born with cleft lip</p>
					<a href="https://www.smiletrain.org/" class="learnmore" target="_blank">Explore</a>
				</div>
			</div>
		</div> -->
	</div>
</section>

@endsection

@push('scripts')
    {{-- <script src="{{ asset('js/about.js') }}"></script> --}}
    <script type="text/javascript" src="https://www.godrejindustries.com/public/js/investors.js" nonce="t45x3RKr9pkPEdz4SNMpQAm49KvPghS8"></script>

@endpush
    