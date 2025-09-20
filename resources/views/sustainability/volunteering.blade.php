
 @extends('layouts.home')

@section('title', 'Know Us - Consultez')
@push('styles')
    {{-- <link href="{{ asset('assets/css/about.css') }}" rel="stylesheet"> --}}
	<link rel="stylesheet" type="text/css" href="https://www.godrejindustries.com/public/css/sustainability_common.css?v=1758383376">
	<link rel="stylesheet" type="text/css" href="https://www.godrejindustries.com/public/css/volunteering.css?v=1758383376">

@endpush
@section('content')
 	<div class="fw bg_white" id="godrej_group_menus">
		<div class="fw">
			<!-- <div class="col_gg_menu">
				<p>You are now on the<br>Global website<br><br></p>
				<p class="blk60">Select the region</p>
			</div> -->
			<div class="col_gg_menu" id="country_menus">
				<ul>
					<!-- <li>
						<a  data-title="GLOBAL" class="active"><span>GLOBAL</span></a>
					</li> -->
					<!-- <li>
						<a href="https://www.godrejagrovet.com/" target="_blank" data-title="Godrej Agrovet"><span class="grey_line">Godrej Agrovet</span></a>
					</li> -->
				</ul>
				<ul>
					<!-- <li>
						<a href="https://www.godrejcp.com/" target="_blank" data-title="Godrej Consumer Products"><span class="grey_line">Godrej Consumer Products</span></a>
					</li> -->
				</ul>
				<ul>
					<!-- <li>
						<a href="https://www.godrejchemicals.com/" target="_blank" data-title="Godrej Industries (Chemicals)"><span class="grey_line">Godrej Industries (Chemicals)</span></a>
					</li> -->
				</ul>
				<ul>
					<!-- <li>
						<a href="https://www.godrejproperties.com/" target="_blank" data-title="Godrej Properties"><span class="grey_line">Godrej Properties</span></a>
					</li> -->
				</ul>
				<!-- <div id="country_menus_devider">&nbsp;</div> -->
			</div>
			<!-- <div class="col_gg_menu" id="exports_links">
				<h6><a href="https://godrejcp.com/exports/" target="_blank" class="blk60" data-title="EXPORTS">EXPORTS</a></h6>
				<p class="blk60">Explore our products<br>in over 90 countries</p>
			</div> -->
			<!--
			<div class="col_gg_menu" id="godrej_links">
				<h6><a href="https://godrej.com/" target="_blank" class="blk60" data-title="GODREJ">GODREJ</a></h6>
				<p class="blk60">Lorem ipsum dolor,<br>consectetur elit.</p>
			</div> -->
		</div>
	</div>

	<div id="menu_divider">&nbsp;</div>
	
</header>


<!-- <div id="Mobile_Header" class="visible-xs header_new"> -->
<div id="Mobile_Header" class="visible-xs">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-8 pd">
				<a href="https://www.godrejindustries.com" class="logo_mobile"><img src="https://www.godrejindustries.com/public/images/logo-new-black.png" height="50" alt="Godrej Industries Logo"></a>
				<!-- <a href="https://www.godrejindustries.com" class="logo_mobile"><img src="https://www.godrejindustries.com/public/images/logo-new-black.png" height="56" alt="Godrej Industries Logo"></a> -->
			</div>
			<div class="col-xs-4 pd">
			</div>
		</div>
	</div>
</div>


<!-- <a  class="search_mo search_black visible-xs"> -->
	
<!-- <a  class="search_mo visible-xs">
	<span class="sprites">&nbsp;</span>
</a> -->

<!-- <div class="menu_icon menu_icon_black visible-xs"> -->
<div class="menu_icon visible-xs">
	<span>&nbsp;</span>
	<span>&nbsp;</span>
	<span>&nbsp;</span>
	<span>&nbsp;</span>
</div>


<div id="search_popup_mo" class="search_popup">
	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="fw search_form" id="search_form_mo">
				<form action="https://www.godrejindustries.com/search-results" method="GET">
					<input type="text" value="" name="q" placeholder="What can we help you find?">
				</form>
				<div class="close"></div>
			</div>
		</div>
	</div>
	</div>
	<!-- <div class="seperator">&nbsp;</div> -->
</div>

<div id="Mobile_Menu">
	<div id="menu_header" class="fw">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-8 pd">
					<a  class="fl godrej_webs" id="godrej_group_link_mo">
						<!-- <span class="sprites web">&nbsp;</span> -->
						<!-- <span class="fl">GODREJ GROUP</span> -->
						<!-- <span class="sprites arrow_webs">&nbsp;</span> -->
					</a>
					<!-- <a href="https://www.godrejindustries.com" class="logo_mobile"><img src="https://www.godrejindustries.com/public/images/logo-black.png" height="30" alt="GCPL Logo"></a> -->
				</div>
			</div>
		</div>
	</div>

	<div class="header_space">&nbsp;</div>

	<div id="global_menus_mo">
		<!-- <p>You are now on the Global website</p>
		<p class="blk60">Select the region</p> -->
		<!-- <ul>
			<li>
				<a href="https://www.godrejagrovet.com/" target="_blank" data-title="Godrej Agrovet">Godrej Agrovet</a>
			</li>
			<li>
				<a href="https://www.godrejcp.com/" target="_blank" data-title="Godrej Consumer Products">Godrej Consumer Products</a>
			</li>
			<li>
				<a href="https://www.godrejchemicals.com/" target="_blank" data-title="Godrej Industries (Chemicals)">Godrej Industries (Chemicals)</a>
			</li>
			<li>
				<a href="https://www.godrejproperties.com/" target="_blank" data-title="Godrej Properties">Godrej Properties</a>
			</li>
		</ul> -->
		<!-- <div class="mo_seperator_menu">&nbsp;</div>
		<p class="blk60">Explore our products<br>in over 90 countries</p>
		<ul>
			<li><a href="https://godrejcp.com/exports/" target="_blank" data-title="EXPORTS">EXPORTS</a></li>
		</ul> -->
	</div>
	

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
							<li><a href="https://www.godrejindustries.com/know-us/our-story" title="Our Story" >Our Story</a></li>
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

<section class="fwp">
	<div class="fw owl-carousel owl-theme" id="landing_other_slider">
		<div class="fwp">
			<div class="fwvh_new pr" id="banner_volunteering_india_02">&nbsp;</div>
			<!-- <div class="fw pxy txc landing_caption"><h2 class="animated fadeInUp">Volunteering</h2></div> -->
		</div>
		<div class="fwp">
			<div class="fwvh_new pr" id="banner_volunteering_india_01">&nbsp;</div>
		</div>
		<div class="fwp">
			<div class="fwvh_new pr" id="banner_volunteering_india_03">&nbsp;</div>
		</div>
	</div>
	<ul id='landing_other_dots' class='owl-dots pyb zindex3'></ul>
	<div class="single_multibanner_caption pxy txc zindex5">
		<h1 class="white animated fadeInUp zindex5">Volunteering</h1>
	</div>
</section>

<section class="fw txc" id="Volunteering">
	<div class="container title_desc_left">
		<div class="row">
			<div class="col-md-12 col-xs-10 col-xs-offset-1 col-md-offset-0 wow animated fadeInUp">
				<h3 class="inside_page_titles">Our team members volunteer their time<br class="hidden-xs"> and skills through different programmes</h3>
				<div class="fw h20">&nbsp;</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-xs-10 col-xs-offset-1 col-md-offset-0 wow animated fadeInUp">
				<div class="volunteering_box fw">
					<h4 class="sustainability_titles green3e">Godrej Global<br> Volunteering Day</h4>
					<p class="blk60">Pledging a common day globally to<br class="hidden-xs"> volunteering in local communities</p>
				</div>
			</div>
			<div class="col-md-4 col-xs-10 col-xs-offset-1 col-md-offset-0 wow animated fadeInUp">
				<div class="volunteering_box fw">
					<h4 class="sustainability_titles green3e singleLine">Brighter Giving</h4>
					<p class="blk60">Volunteering time and skills through our<br class="hidden-xs"> structured skill-based volunteering<br class="hidden-xs"> programme </p>
				</div>
			</div>
			<div class="col-md-4 col-xs-10 col-xs-offset-1 col-md-offset-0 wow animated fadeInUp">
				<div class="volunteering_box fw">
					<h4 class="sustainability_titles green3e">World<br> Environment Day </h4>
					<p class="blk60">Building awareness<br class="hidden-xs"> for a greener planet </p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-xs-10 col-xs-offset-1 col-md-offset-0 wow animated fadeInUp">
				<div class="volunteering_box fw">
					<h4 class="sustainability_titles green3e">Joy of<br> giving </h4>
					<p class="blk60">Building awareness and fund-raising for<br class="hidden-xs"> non-profit partners</p>
				</div>
			</div>
			<div class="col-md-4 col-xs-10 col-xs-offset-1 col-md-offset-0 wow animated fadeInUp">
				<div class="volunteering_box fw">
					<h4 class="sustainability_titles green3e singleLine">Disaster relief</h4>
					<p class="blk60">Providing recovery support<br class="hidden-xs"> and resettlement development<br class="hidden-xs"> following natural disasters </p>
				</div>
			</div>
			<div class="col-md-4 col-xs-10 col-xs-offset-1 col-md-offset-0 wow animated fadeInUp">
				<div class="volunteering_box fw">
					<h4 class="sustainability_titles green3e">Workplace<br> giving</h4>
					<p class="blk60">Enabling donations to our non-profit<br class="hidden-xs"> partners - Save the Children India,<br class="hidden-xs"> World Wildlife Fund and Teach for India</p>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection

@push('scripts')
    {{-- <script src="{{ asset('js/about.js') }}"></script> --}}

@endpush
    