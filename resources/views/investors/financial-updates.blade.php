
 @extends('layouts.home')

@section('title', 'Know Us - Consultez')
@push('styles')
    {{-- <link href="{{ asset('assets/css/about.css') }}" rel="stylesheet"> --}}
<link rel="stylesheet" type="text/css" href="https://www.godrejindustries.com/public/css/selectbox.css?v=1758383774">
<link rel="stylesheet" type="text/css" href="https://www.godrejindustries.com/public/css/investors-common.css?v=1758383774">
@endpush
@section('content')
 	<section class="topspace133 fw">&nbsp;</section>
	<section class="title_desc_left" id="heading_pages_title_nobanner">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="fw">
						<h1 class="blk page_title txc">Financial <br>Updates</h1>
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
							<div class="fw h10m visible-xs">&nbsp;</div>
							<div class="col-md-4 col-xs-12">
								<div class="fw">
									<select class="required investors_selectbox" name="ddl_qu_quarters" id="ddl_qu_quarters">
																				<option value="Q1" selected="selected">Q1</option>
																			</select>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="fw h100 h50m">&nbsp;</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1" id="FinancialUpdatesDiv">
					<div class="fw">
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
	<section class="title_desc_left" id="heading_pages_title_nobanner">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="fw">
						<h1 class="blk page_title txc pd">Investor <br>Updates</h1>
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
						<div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
							<div class="col-md-4 col-xs-12">
								<div class="fw">
									<select class="required investors_selectbox" name="ddl_pu_years" id="ddl_pu_years">
																				<option value="2017-18">2017-18</option>
																				<option value="2016-17">2016-17</option>
																				<option value="2015-16">2015-16</option>
																				<option value="2014-15">2014-15</option>
																				<option value="2012-13">2012-13</option>
																				<option value="2011-12">2011-12</option>
																				<option value="2010-11">2010-11</option>
																				<option value="2009-10">2009-10</option>
																				<option value="2008-09">2008-09</option>
																				<option value="2007-08">2007-08</option>
																			</select>
								</div>
							</div>
							<div class="fw h10m visible-xs">&nbsp;</div>
							<div class="col-md-4 col-xs-12">
								<div class="fw">
									<select class="required investors_selectbox" name="ddl_pu_month" id="ddl_pu_month">
										<option value="">Month</option>
																				<option value="August" >August</option>
																			</select>
								</div>
							</div>
							<div class="fw h10m visible-xs">&nbsp;</div>
							<div class="col-md-4 col-xs-12">
								<div class="fw">
									<select class="required investors_selectbox" name="ddl_pu_category" id="ddl_pu_category">
										<option value="">Type</option>
																				<option value="4" >Shareholders Communication</option>
																			</select>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="fw h100 h50m">&nbsp;</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1" id="DivPerformanceUpdates">
					<div class="fw">
						<div class="row">
	<div class="col-md-5 col-xs-12">
						<div class="fwp file_downloaded">
				<h4><a href="https://www.godrejindustries.com/public/uploads/investor_updates/OutcomeofAGM.pdf" target="_blank">
					
					Outcome of AGM 2017
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
	<script type="text/javascript" src="https://www.godrejindustries.com/public/js/financial-updates.js" nonce="Ty3pEHOaQHuKoKeoHWHQ7EFtfPnqnGye"></script>
@endpush
    