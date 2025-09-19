
 @extends('layouts.home')

@section('title', 'Know Us - Consultez')
@push('styles')
    <link href="{{ asset('assets/css/know-us.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 pd">
				<!-- <div id="mo_stock_price" class="txc">
					<div class="stock_columns stock_mo">
						<iframe src="https://irs.tools.investis.com/Clients/in/godrej1/Ticker/Ticker.aspx?culture=en-US" style="position:relative;" height="20" width="150"></iframe>
					</div>
					<div class="stock_columns contact_link_mo">
						<a href="https://www.godrejindustries.com/contact-us">Contact</a>
					</div>
					<div class="stock_columns" style="padding-right: 0px; margin-right: 0px; border-right: 0px">
						<div class="social">
							<a href="https://www.linkedin.com/company/godrej-consumer-products-ltd/" target="_blank" class="sprites in">&nbsp;</a>
							<a href="https://www.youtube.com/godrejcp" target="_blank" class="sprites yt">&nbsp;</a>
						</div>
					</div>
				</div> -->
				<ul>
					<li class="has_dropdown">
						<a href="https://www.godrejindustries.com/know-us">Know Us</a><span></span>
						<ul>
							<li><a href="https://www.godrejindustries.com/know-us/our-story" title="Our Story" >Our Story1</a></li>
							<li><a href="https://www.godrejindustries.com/know-us/about-godrej-industries-group" title="About Godrej Industries Group" >About Godrej Industries Group</a></li>
							<!-- <li><a href="https://www.godrejindustries.com/know-us/the-godrej-way" title="The Godrej Way">The Godrej Way</a></li> -->

							<li><a href="https://www.godrejindustries.com/know-us/godrej-foundation" title="Godrej Foundation" >Godrej Foundation</a></li>
							<li><a href="https://www.godrejindustries.com/know-us/leadership" title="Leadership" >Leadership</a></li>

							<!-- <li><a href="https://www.godrejindustries.com/know-us/global-leadership-team" title="Global Leadership Team">Global Leadership Team</a></li> -->
							<!-- <li><a href="https://godrej.com/" title="Godrej Group" target="_blank">Godrej Group</a></li> -->
							<!-- <li><a href="https://www.monday-8am.com/" title="Leadership Blog" target="_blank">Leadership Blog</a></li> -->
						</ul>
						<div class="menu_devider">&nbsp;</div>
					</li>
					<li class="has_dropdown">
						<a href="https://www.godrejindustries.com/businesses">Businesses</a><span></span>
						<ul>
							<li><a href="https://www.godrejagrovet.com/" target="_blank" title="Godrej Agrovet">Godrej Agrovet</a></li>
							<li><a href="https://www.godrejcp.com" target="_blank" title="Godrej Consumer Products">Godrej Consumer Products</a></li>
							<li><a href="https://www.godrejproperties.com/" target="_blank" title="Godrej Properties">Godrej Properties</a></li>
							<li><a href="https://www.godrejchemicals.com/" target="_blank" title="Godrej Chemicals">Godrej Chemicals</a></li>
							<li><a href="https://www.godrejfunds.com/" target="_blank" title="Godrej Fund Management">Godrej Fund Management</a></li>
							<li><a href="https://www.godrejcapital.com/" target="_blank" title="Godrej Capital">Godrej Capital</a></li>
						</ul>
						<div class="menu_devider">&nbsp;</div>
					</li>
					<li class="has_dropdown">
						<a href="https://www.godrejcareers.com/?company=godrej_industries" target="_blank">Careers</a><span></span>
						<ul>
							<li><a href="https://www.godrejcareers.com/people-philosophy/" target="_blank" title="People Philosophy">People Philosophy</a></li>
							<li><a href="https://www.godrejcareers.com/learning/" target="_blank" title="Learning">Learning</a></li>
							<li><a href="https://www.godrejcareers.com/benefits" title="Benefits" target="_blank">Benefits</a></li>
							<!-- <li><a href="https://www.godrejcareers.com/diversity/" target="_blank" title="Diversity" >Diversity</a></li> -->
							<li><a href="https://www.godrejcareers.com/on-campus/" target="_blank" title="On Campus">On Campus</a></li>
							<!-- <li><a href="https://www.godrejcareers.com/loud/" target="_blank" title="Godrej LOUD">Godrej LOUD</a></li> -->
							<!-- <li><a href="https://indiaculturelab.org/" target="_blank" title="India Culture Lab">India Culture Lab</a></li> -->
							<!-- <li><a href="https://godrejcareers.peoplestrong.com/" target="_blank" title="Join Us">Join Us</a></li> -->
							<li><a href="https://www.godrejcareers.com/work-with-us/" target="_blank" title="Work with Us">Work with Us</a></li>
						</ul>
						<div class="menu_devider">&nbsp;</div>
					</li>

					<!-- <li class="has_dropdown">
						<a href="https://www.godrejdeilab.com/" target="_blank">Diversity & Inclusion</a>
						<div class="menu_devider">&nbsp;</div>
					<li> -->
					<li class="has_dropdown">
						<a href="https://www.godrejindustries.com/sustainability">Good & Green</a><span></span>
						<ul>
							<!-- <li><a  title="Good & Green">Good & Green</a></li>
							<li><a href="https://www.godrejindustries.com/sustainability/volunteering" title="Volunteering">Volunteering</a></li>
							<li><a  title="Godrej Trusts">Godrej Trusts</a></li>
							<li><a  title="Conclaves">Conclaves</a></li>
							<li><a  title="Codes & Policies">Codes & Policies</a></li> -->

							<!-- <li><a href="https://www.godrejagrovet.com/good-and-green.aspx" target="_blank" title="Godrej Agrovet">Godrej Agrovet</a></li> -->
							<!-- <li><a href="https://godrejcp.com/sustainability" target="_blank" title="Godrej Consumer Products">Godrej Consumer Products</a></li> -->
							<!-- <li><a href="https://www.godrejproperties.com/ourstory/sustainability" target="_blank" title="Godrej Properties">Godrej Properties</a></li> -->
							<!-- <li><a href="https://www.godrejindustries.com/sustainability/our-strategy" title="Our Strategy">Our Strategy</a></li> -->
							<!-- <li><a href="https://www.godrejindustries.com/sustainability/covid-19-response" title="Covid-19">COVID-19 Response</a></li> -->

							<li><a href="https://www.godrejdeilab.com" target="_blank" title="DEI Lab">DEI Lab</a></li>
							<li><a href="https://www.godrejindustries.com/sustainability/10-years-of-sustainability" title="10 years of sustainability">10 years of sustainability</a></li>
							<li><a href="https://www.godrejindustries.com/sustainability/csr" title="Conclaves">CSR</a></li>
							<li><a href="https://www.godrejindustries.com/sustainability/green-supply-chain" title="Green Supply Chain">Green Supply Chain</a></li>
							<li><a href="https://www.godrejindustries.com/sustainability/volunteering" title="Volunteering">Volunteering</a></li>

						</ul>
						<div class="menu_devider">&nbsp;</div>
					</li>
					<li class="has_dropdown">
						<a href="https://www.godrejindustries.com/investors">Investors</a><span></span>
						<ul>
							<li><a href="https://www.godrejindustries.com/investors/annual-reports" title="Annual Reports">Annual Reports</a></li>
							<li><a href="https://www.godrejindustries.com/investors/financial-updates" title="Financial Updates">Financial Updates</a></li>
							<li><a href="https://www.godrejindustries.com/investors/shareholder-information" title="Shareholder Information">Shareholder Information</a></li>
							<li><a href="https://www.godrejindustries.com/investors/investors-information" title="Investor Information">Investor Information</a></li>
							<li><a href="https://www.godrejindustries.com/investors/subsidiaries-accounts" title="Subsidiaries Accounts">Subsidiaries Accounts</a></li>
							<li><a href="https://www.godrejindustries.com/investors/listing-compliance" title="Listing Compliance">Listing Compliance</a></li>
							<li><a href="https://www.godrejindustries.com/investors/board-committees" title="Board Committees">Board Committees</a></li>
						</ul>
						<!-- <div class="menu_devider">&nbsp;</div> -->
					</li>
					
					
				</ul>
			</div>
		</div>
	</div>
</div>

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
								<a href="https://www.godrejindustries.com/know-us/our-story" class="learnmore wow fadeInUp animated fast">Explore</a>
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
								<a href="https://www.godrejindustries.com/know-us/our-story" class="learnmore wow fadeInUp animated fast">Explore</a>
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
									<a href="https://www.godrejindustries.com/know-us/about-godrej-industries-group" class="learnmore wow animated fadeInUp fast">Explore</a>
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
    