
 @extends('layouts.home')

@section('title', 'Know Us - Consultez')
@push('styles')
    {{-- <link href="{{ asset('assets/css/about.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" type="text/css" href="https://www.godrejindustries.com/public/css/selectbox.css?v=1758383952">
    <link rel="stylesheet" type="text/css" href="https://www.godrejindustries.com/public/css/investors-common.css?v=1758383952">
@endpush
@section('content')
 <section class="topspace133 fw">&nbsp;</section>

<section class="title_desc_left" id="heading_pages_title_nobanner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="fw">
                    <h1 class="blk page_title txc">Shareholder <br> Information</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="fw h100 h50m">&nbsp;</section>

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
                    <div class="h40m">&nbsp;</div>
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

<!-- <section class="fw title_desc_left">
    <div  class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="fw">
                    <h3 class="txc">Share price</h3>
                    <div class="fw h80 h40m">&nbsp;</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="fw hidden-xs" style="margin: 0 auto;">
                    <img src="https://www.godrejindustries.com/public/images/investors/landing/sharebanner.png" class="fw">
                    <iframe src="https://irs.tools.investis.com/clients/in/godrej1/SM8/default.aspx?culture=en-US" style="position: relative;height: 1300px;" width="100%"></iframe>
                </div>

                <div class="fw visible-xs" style="margin: 0 auto;">
                    <img src="https://www.godrejindustries.com/public/images/investors/landing/sharebanner.png" class="fw">
                    <iframe src="https://irs.tools.investis.com/clients/in/godrej1/SM8/default.aspx?culture=en-US" style="position: relative;height: 1850px;" width="100%"></iframe>
                </div>

            </div>
        </div>
    </div>
</section> -->

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
							<h6 class="txr mo_txc"><a href="https://www.godrejindustries.com/investors/shareholding-pattern">Shareholding Pattern</a></h6>
							<div class="fw v_line">&nbsp;</div>
						</div>
						<div class="fw">
							<h6 class="txr mo_txc"><a href="https://www.godrejindustries.com/investors/unclaimed-dividend">Unclaimed Dividend & FD</a></h6>
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
	<section class="title_desc_left" id="heading_pages_title_nobanner">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="fw">
						<h1 class="blk page_title txc pd">Investor <br>Meet Presentation</h1>
					</div>
				</div>
			</div>
		</div>
	</section>

<section class="title_desc_left">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="fw">
						<div class="fw h100 h50m">&nbsp;</div>
					</div>
					<div class="row">
						<div class="col-md-8 col-md-offset-3 col-xs-10 col-xs-offset-1">
							<div class="col-md-4 col-xs-12">
								<div class="fw">
									<select class="required investors_selectbox sef_year meet_presentation" name="ddl_pu_years" id="ddl_pu_years" data-category="meet_presentation">
																				<option value="2013-14">2013-14</option>
																				<option value="2012-13">2012-13</option>
																				<option value="2011-12">2011-12</option>
																				<option value="2010-11">2010-11</option>
																				<option value="2009-10">2009-10</option>
																				<option value="2007-08">2007-08</option>
																			</select>
								</div>
							</div>
							<div class="fw h10m visible-xs">&nbsp;</div>
							<div class="col-md-4 col-xs-12">
								<div class="fw">
									<select class="required investors_selectbox sef_month meet_presentation" name="ddl_pu_month" id="ddl_pu_month" data-category="meet_presentation">
										<option value="">Month</option>
																				<option value="June" >June</option>
																			</select>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="fw h100 h50m">&nbsp;</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1" id="sectionDiv">
					<div class="fw">
						<div class="row">
	<div class="col-md-5 col-xs-12">
						<div class="fwp file_downloaded">
				<h4><a href="https://www.godrejindustries.com/public/uploads/meet_presentation/InvestorandAnalystMeetPresentationJune2013.pdf" target="_blank">
					
					Investor and Analyst Meet Presentation - June 2013
					<img src="https://www.godrejindustries.com/public/images/download.png" class="part" width="30"></a></h4>
		
	        			</div>

		</div>
	<div class="col-md-2 hidden-xs">&nbsp;</div>
<div class="col-md-5 col-xs-12">
		</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection

@push('scripts')
    {{-- <script src="{{ asset('js/about.js') }}"></script> --}}
<script type="text/javascript" src="https://www.godrejindustries.com/public/js/shareholding-pattern.js?v1" nonce="m10EMRMxI683Tf8f80xXt3k8TsUsQRSc"></script>

@endpush
    