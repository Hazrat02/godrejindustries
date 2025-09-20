
 @extends('layouts.home')

@section('title', 'Know Us - Consultez')
@push('styles')
    {{-- <link href="{{ asset('assets/css/about.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" type="text/css" href="https://www.godrejindustries.com/public/css/selectbox.css?v=1758383182">
    <link rel="stylesheet" type="text/css" href="https://www.godrejindustries.com/public/css/investors-common.css?v=1758383182">
    <link rel="stylesheet" type="text/css" href="https://www.godrejindustries.com/public/css/investors.css?v=1758383182">

@endpush
@section('content')
 <section id="landing" class="fwvh title_desc_left fwp">

	<div class="fw owl-carousel owl-theme" id="landing_single_slider">
		<div class="fwvh" id="banner_investors_01">&nbsp;</div>
	</div>

	<div class="single_banner_caption pxy txc zindex3">
		<h1 class="white animated fadeInUp">Investors</h1>
	</div>

</section>

<section class="fw txc" id="The_Godrej_Way_Top">
	<div class="container title_desc_left">
		<div class="row">
			<div class="col-md-12 col-xs-12 col-xs-offset-0 col-md-offset-0 wow animated fadeInUp">
				<div class="fw h80">&nbsp;</div>
				<h3 class="section_title_desc">We are committed to creating long-term, <br class="hidden-xs">sustainable value for all our stakeholders</h3>
				<div class="fw h80 h40m">&nbsp;</div>
			</div>
		</div>
	</div>
</section>

<section id="investors" class="title_desc_left">
	<div class="container">
		<div class="row pr">
			
			<div class="col-md-12">
				<div class="fw investors_desc txc">
					<div class="row">
						<div class="col-md-3 col-xs-6 mo_txr">
							<div class="fw desc wow fadeInUp animated">
								<h4 class="blue">USD 6.1 bn</h4>
								<h6>revenue</h6>
							</div>
						</div>
						<div class="col-md-3 col-xs-6 mo_txl">
							<div class="fw desc wow fadeInUp animated">
								<h4 class="blue">USD 27.5 bn</h4>
								<h6>market cap</h6>
							</div>
						</div>
						<div class="col-md-3 col-xs-6 mo_txr">
							<div class="fw desc wow fadeInUp animated no_margin_mob">
								<h4 class="blue">90+</h4>
								<h6>countries</h6>
							</div>
						</div>
						<div class="col-md-3 col-xs-6 mo_txl">
							<div class="fw desc wow fadeInUp animated no_margin_mob">
								<h4 class="blue">1.1 bn</h4>
								<h6>consumers</h6>
							</div>
						</div>
					</div>
					<!-- <div class="row">
						<div class="col-md-12 col-xs-12">
							<p class="txc"><br>Values based on our FY 2019-20 performance</p>
						</div>
					</div> -->
				</div>
			</div>

		</div>
	</div>
</section>

<section class="seperator">&nbsp;</section>


<section class="title_desc_left mo_txc">
	<div class="container">
		<div class="fw fwp">
			<div class="row">
				<div class="col-md-6 visible-xs">
					<div class="fw pr desc">
						<img src="https://www.godrejindustries.com/public/images/video_bg.png" class="fw hidden-xs">
						<div class="fw">
							<div class="col-md-10 col-md-offset-2">
								<h3 class="wow fadeInUp animated fast blk212120">Our Annual Report 2024-25</h3>
								<p class="blk60 wow fadeInUp animated fast"></p>
								<a href="investors/annual-reports" class="learnmore wow fadeInUp animated fast">Explore</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xs-12 visible-xs">
					<div class="fw pr wow fadeIn animated">
						<div class="fw h50m">&nbsp;</div>
						<img src="https://www.godrejindustries.com/public/uploads/reports/2024-25/Annual_2025_Banner.jpg" alt="Our Annual Report 2024-25" class="fw investor_border_inline">
					</div>
				</div>

				<div class="col-md-6 hidden-xs">
					<div class="fw pr wow fadeIn animated">
						<img src="https://www.godrejindustries.com/public/uploads/reports/2024-25/Annual_2025_Banner.jpg" alt="Our Annual Report 2024-25" class="fw investor_border_inline">
					</div>
				</div>
				<div class="col-md-6 hidden-xs">
					<div class="fw pr desc">
						<img src="https://www.godrejindustries.com/public/images/video_bg.png" class="fw hidden-xs">
						<div class="fwpx no_mob_fwpx fw">
							<div class="col-md-10 col-md-offset-2">
								<h3 class="wow fadeInUp animated fast blk212120">Our Annual Report 2024-25</h3>
								<p class="blk60 wow fadeInUp animated fast"></p>
								<a href="investors/annual-reports" class="learnmore wow fadeInUp animated fast">Explore</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="sustainability_video" class="video_slide">
				<img src="https://www.godrejindustries.com/public/images/video_popup.png" class="fw">
				<iframe class="player" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				<a class="close_slide_video"></a>
			</div>

		</div>
	</div>
</section>


<section class="seperator">&nbsp;</section>

<section class="title_desc_left">
	<div class="container">
		<div class="row">			
			<div class="col-md-10 col-md-offset-1">
				<div class="fw">
					<h3 class="txc">Financial Updates<br><br class="hidden-xs"><br class="visible-xs"><br class="hidden-xs"></h3>
				</div>
				<div class="row">
					<div class="col-md-4 col-md-offset-4">
						<div class="fw">
							<select class="required investors_selectbox" name="ddl_qu_years" id="ddl_qu_years">
																	<option value="2025-26">2025-26</option>
																	<option value="2024-25">2024-25</option>
																	<option value="2023-24">2023-24</option>
																	<option value="2022-23">2022-23</option>
																	<option value="2021-22">2021-22</option>
																	<option value="2020-21">2020-21</option>
																	<option value="2019-20">2019-20</option>
																	<option value="2018-19">2018-19</option>
																	<option value="2017-18">2017-18</option>
																	<option value="2016-17">2016-17</option>
																	<option value="2015-16">2015-16</option>
																	<option value="2014-15">2014-15</option>
																	<option value="2013-14">2013-14</option>
																	<option value="2012-13">2012-13</option>
																	<option value="2011-12">2011-12</option>
																	<option value="2010-11">2010-11</option>
																	<option value="2009-10">2009-10</option>
																	<option value="2008-09">2008-09</option>
																	<option value="2007-08">2007-08</option>
																	<option value="2006-07">2006-07</option>
															</select>
						</div>
					</div>
				</div>
				<div class="fw h20">&nbsp;</div>
				<div class="row">
					<div class="col-md-4 col-md-offset-4">
						<div class="fw">
							<select class="required investors_selectbox" name="ddl_qu_quarters" id="ddl_qu_quarters">
																	<option value="Q1" selected="selected">Q1</option>
															</select>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="fw h100 h50m">&nbsp;</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="fw" id="sectionDiv">
					<div class="row">
	<div class="col-md-5 col-xs-12">
						<div class="fwp file_downloaded">
				<h4><a href="https://www.godrejindustries.com/public/uploads/financial_presentation/Godrej_Industries_Limited_Results_Q1-FY2025-26.pdf" target="_blank">					
					Financial Results
					<img src="https://www.godrejindustries.com/public/images/download.png" class="part" width="30"></a></h4>
		
	        	        <div class="fw v_line">&nbsp;</div>
	        			</div>

					<div class="fwp file_downloaded">
				<h4><a href="https://www.godrejindustries.com/public/uploads/financial_presentation/Godrej_Indudtries_Limited_Q1_FY_2025-26_Performance_Update.pdf" target="_blank">					
					Performance Updates
					<img src="https://www.godrejindustries.com/public/images/download.png" class="part" width="30"></a></h4>
		
	        			</div>

		</div>
	<div class="col-md-2 hidden-xs">&nbsp;</div>
<div class="col-md-5 col-xs-12">
					<div class="fwp file_downloaded">
				<h4><a href="https://www.godrejindustries.com/public/uploads/financial_presentation/GIL_Q1FY202526PerformanceResults.zip" target="_blank">					
					Download all files for this Quarter
					<img src="https://www.godrejindustries.com/public/images/download.png" class="part" width="30"></a></h4>
		
	        			</div>

		</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="seperator">&nbsp;</section>

<section class="fw title_desc_left shares_nse_bse">
    <div  class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="fw">
                    <div class="fw visible-xs h20m">&nbsp;</div>
                    <h3 class="txc">Share price</h3>
                    <div class="fw h40 hidden-xs">&nbsp;</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-2 col-xs-12 col-xs-offset-0">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-xs-8 col-xs-offset-2">                     
                        <div class="fw txc investor_margin_inline">   
                            <img src="https://www.godrejindustries.com/public/images/investors/landing/NSE.png" class="fw">
                        </div>
                    </div>
                </div>
                <div class="row">
                	<div class="col-md-12 col-xs-12">
                        <div class="fw txc">
                            <a href="https://www1.nseindia.com/live_market/dynaContent/live_watch/get_quote/GetQuote.jsp?symbol=GODREJIND&illiquid=0&smeFlag=0&itpFlag=0" target="_blank" class="learnmore">Share price</a>
                            &nbsp;&nbsp;&nbsp;
                            <a href="https://www.nseindia.com/companies-listing/corporate-filings-announcements?symbol=GODREJIND&tabIndex=equity" target="_blank" class="learnmore">Announcements</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fw visible-xs">
                <div class="col-xs-12 col-xs-offset-0">
                    <div class="h50m">&nbsp;</div>
                    <div class="seperator mg fw">&nbsp;</div>
                    <div class="h40m">&nbsp;</div>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-0 col-xs-12 col-xs-offset-0">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-xs-8 col-xs-offset-2">                     
                        <div class="fw txc investor_margin_inline">   
                            <img src="https://www.godrejindustries.com/public/images/investors/landing/BSE.png" class="fw">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="fw txc">
                            <a href="https://www.bseindia.com/stock-share-price/godrej-industries-ltd/godrejind/500164/" target="_blank" class="learnmore">Share price</a>
                            &nbsp;&nbsp;&nbsp;
                            <a href="https://www.bseindia.com/stock-share-price/godrej-industries-ltd/godrejind/500164/" target="_blank" class="learnmore">Announcements</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fw h40 h20m">&nbsp;</div>
    </div>
</section>

<section class="seperator">&nbsp;</section>

<section class="title_desc_left">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="fw">
					<h3 class="txc">Shareholder information</h3>
				</div>
			</div>
		</div>
		<div class="fw h50 h30m">&nbsp;</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
				<div class="row shareholder_info">
					<div class="col-md-5 col-xs-12">
						<div class="fw">
							<h6 class="txr mo_txc"><a href="investors/shareholding-pattern">Shareholding Pattern</a></h6>
							<div class="fw v_line">&nbsp;</div>
						</div>
						<div class="fw">
							<h6 class="txr mo_txc"><a href="investors/unclaimed-dividend">Unclaimed Dividend & FD</a></h6>
							<div class="fw v_line visible-xs">&nbsp;</div>
						</div>
						
					</div>
					<div class="col-md-2 hidden-xs">&nbsp;</div>
					<div class="col-md-5 col-xs-12">
						<div class="fw">
							<h6 class="txl mo_txc"><a href="https://www.godrejindustries.com/public/pdf/ESOPDetails.zip">ESOP Details</a></h6>
							
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="seperator">&nbsp;</section>

<section class="title_desc_left">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="fw">
					<h3 class="txc">Contact Us</h3>
					<div class="fw h80 h40m">&nbsp;</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="fw">
					<div class="row">
						<div class="fw overflowx">
							<div class="col-md-12">
								<div class="fw desc accord contact_us_accorddiv">
									<div class="col-md-6">
										<div class="fw accorddiv">
											<h3><a class="blk212120">Investor Relations Team<span class="arrowupdown">&nbsp;</span></a></h3>
											<div class="accorddesc fw">
												<p>Godrej Industries Limited,<br>Godrej One, Pirojshanagar,<br>Eastern Express Highway,<br>Vikhroli, Mumbai 400 079, India</p>
												<p>Weekdays : 9.30 a.m to 5.00 p.m</p>
												<p>T: +91 - 022 - 25188010<br>Extn: - 4392/4367/4124</p>
												<p>Fax: +91 - 022 - 25188066</p>
												<p><a href="mailto:investor@godrejinds.com">investor@godrejinds.com</a></p>
											</div>
											<div class="v_line visible-xs">&nbsp;</div>
										</div>
										
									</div>
									<div class="col-md-6">
										<div class="fw accorddiv">
											<h3><a class="blk212120">Registrars & Share Transfer <br class="visible-xs">Agent<span class="arrowupdown">&nbsp;</span></a></h3>
											<div class="accorddesc fw">
												<p>Computech Sharecap Limited<br>147, Mahatma Gandhi Road,<br>Opp Jehangir Art Gallery,<br>Fort, Mumbai 400 001, India</p>
												<p>Weekdays : 10.30 a.m to 1.00.p.m & 2.00 p.m to 3.30 p.m</p>

												
												<p>T: +91 - 022 - 22635000/ 5001</p>
												<p>Fax: +91 - 022 - 22635001</p>
												<p><a href="mailto:helpdesk@computechsharecap.com">helpdesk@computechsharecap.com</a></p>
											</div>
											
										</div>
										
									</div>				
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection

@push('scripts')
    {{-- <script src="{{ asset('js/about.js') }}"></script> --}}
<script type="text/javascript" src="https://www.godrejindustries.com/public/js/investors.js?v1" nonce="8PFL4OGAQBUmUQ5mIf9cOLuCmIq10aC2"></script>

@endpush
    