
 @extends('layouts.home')

@section('title', 'Know Us - Consultez')
@push('styles')
    {{-- <link href="{{ asset('assets/css/about.css') }}" rel="stylesheet"> --}}
	<link rel="stylesheet" type="text/css" href="https://www.godrejindustries.com/public/css/sustainability_common.css?v=1758383067">
	<link rel="stylesheet" type="text/css" href="https://www.godrejindustries.com/public/css/green-supply-chain.css?v=1758383067">
	<link rel="stylesheet" type="text/css" href="https://www.godrejindustries.com/public/css/csr.css?v=1758383067">
@endpush
@section('content')
 <section class="fwp">
	<div class="fw owl-carousel owl-theme" id="landing_other_slider">
		<div class="fwp">
			<div class="fwvh_new pr" id="banner_gsc">&nbsp;</div>
		</div>
		<div class="fwp">
			<div class="fwvh_new pr" id="banner_gsc_01">&nbsp;</div>
			<!-- <div class="fw pxy txc landing_caption"><h2 class="animated fadeInUp">Green<br> Supply Chain</h2></div> -->
		</div>
		<div class="fwp">
			<div class="fwvh_new pr" id="banner_gsc_02">&nbsp;</div>
		</div>
	</div>
	<ul id='landing_other_dots' class='owl-dots pyb zindex3'></ul>
	<div class="single_multibanner_caption pxy txc zindex5">
		<h1 class="white animated fadeInUp zindex5">Green<br> Supply Chain</h1>
	</div>
</section>

<section class="fw txc" id="gsc_top">
	<div class="container title_desc_left wow animated fadeInUp">
		<div class="row">
			<div class="col-md-12 col-xs-10 col-xs-offset-1 col-md-offset-0">
				<h3 class="section_title">We are making environmental sustainability<br class="hidden-xs"> key to our manufacturing and supply chain processes.</h3>
				<p class="blk60">To extend our impact, we are also working with partners across our value chain<br class="hidden-xs"> to make their operations more sustainable.</p>
				<!-- <a href="https://www.godrejindustries.com/public/pdfs/green_supply_chain/green_supply_chain.pdf" target="_blank" class="learnmore">Explore</a> -->
			</div>
		</div>
	</div>
</section>

<section class="seperator">&nbsp;</section>

<section class="fw">
	<div class="container title_desc_left">
		<div class="row wow animated fadeInUp">
			<div class="col-md-12 col-xs-12 pd txc">
				<h3 class="sustainability_titles">Impact</h3>
			</div>
		</div>
		<div class="fw h100 hidden-xs">&nbsp;</div>
		<div class="fw h50 visible-xs">&nbsp;</div>

		<div class="row wow animated fadeInUp">
			<div class="col-md-6 col-xs-12 pd">
				<div class="pr fw impact_box">
					<div class="col-md-9 col-md-offset-2 pd">
						<h3 class="sustainability_titles">Energy</h3>
						<div class="col-xs-12 visible-xs"><a class="arrow-down-close"></a></div>
						<div class="fw din">
							<table>
								<tbody>
									<tr>
										<td width="35%">Target <br class="hidden-xs">(March 2021)</td>
										<td>Reduce specific energy consumption by 30%</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td>Progress (Sep 2020)</td>
										<th>Reduce specific energy consumption by 25%</th>
									</tr>
								</tfoot>
							</table>
							<!-- <p class="fw csr_note">GCPL India targets and progress only</p> -->
						</div>
					</div>
					<div class="fw">
						<div class="seperator">&nbsp;</div>
					</div>

					<div class="seperator_right hidden-xs">&nbsp;</div>
				</div>
			</div>
			<div class="col-md-6 col-xs-12 pd">
				<div class="pr fw impact_box">
					<div class="col-md-9 col-md-offset-2 pd">
						<h3 class="sustainability_titles">Renewable</h3>
						<div class="col-xs-12 visible-xs"><a class="arrow-down-close"></a></div>
						<div class="fw din">
							<table>
								<tbody>
									<tr>
										<td width="35%">Target<br class="hidden-xs">(March 2021)</td>
										<td>Increase renewable energy portfolio to 30%</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td>Progress <br class="hidden-xs">(Sep 2020)</td>
										<th>Increased renewable energy portfolio to 52%</th>
									</tr>
								</tfoot>
							</table>
							<!-- <p class="fw csr_note">GCPL India targets and progress only</p> -->
						</div>
					</div>
					<div class="fw">
						<div class="seperator">&nbsp;</div>
					</div>
				</div>
			</div>
		</div>



		<div class="row">
			<div class="col-md-6 col-xs-12 pd">
				<div class="pr fw impact_box">
					<div class="col-md-9 col-md-offset-2 pd">
						<h3 class="sustainability_titles">Water</h3>
						<div class="col-xs-12 visible-xs"><a class="arrow-down-close"></a></div>
						<div class="fw din">
							<table>
								<tbody>
									<tr>
										<td width="35%">Target <br class="hidden-xs">(March 2021)</td>
										<td>Become water positive</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td>Progress (Sep 2020)</td>
										<th>Reduced specific water consumption by 45%</th>
									</tr>
								</tfoot>
							</table>
							<!-- <p class="fw csr_note">GCPL India targets and progress only</p> -->
						</div>
					</div>
					<div class="fw">
						<div class="seperator">&nbsp;</div>
					</div>

					<div class="seperator_right hidden-xs">&nbsp;</div>
				</div>


				<div class="pr fw impact_box">
					<div class="seperator_right hidden-xs">&nbsp;</div>
					<div class="col-md-9 col-md-offset-2 pd">
						<h3 class="sustainability_titles">Waste</h3>
						<div class="col-xs-12 visible-xs"><a class="arrow-down-close"></a></div>
						<div class="fw din">
							<table>
								<tbody>
									<tr>
										<td width="35%">Target <br class="hidden-xs">(March 2021)</td>
										<td>Have zero waste to landfill </td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td>Progress (Sep 2020)</td>
										<th>Reduced specific waste to landfill by 76%</th>
									</tr>
								</tfoot>
							</table>
							<!-- <p class="fw csr_note">GCPL India targets and progress only</p> -->
						</div>
					</div>
					<div class="fw">
						<div class="seperator">&nbsp;</div>
					</div>
				</div>


				<div class="pr fw impact_box">
					<div class="seperator_right hidden-xs">&nbsp;</div>
					<div class="col-md-9 col-md-offset-2 pd">
						<h3 class="sustainability_titles">Supplier engagement</h3>
						<div class="col-xs-12 visible-xs"><a class="arrow-down-close"></a></div>
						<div class="fw din">
							<table>
								<tbody>
									<tr>
										<td width="35%">Target (FY 22)</td>
										<td>Engage and evaluate suppliers amounting to 70% of our procurement spends</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td>Progress (FY 20)</td>
										<th>Engaged and evaluated suppliers amounting<br class="hidden-xs"> to 67% of our procurement spends</th>
									</tr>
								</tfoot>
							</table>
							<!-- <p class="fw csr_note">GCPL India targets and progress only</p> -->
						</div>
					</div>
				</div>

			</div>

			<div class="col-md-6 col-xs-12 pd">
				<div class="fw visible-xs">
					<div class="seperator">&nbsp;</div>
				</div>
				<div class="pr fw impact_box">
					<div class="col-md-9 col-md-offset-2 pd">
						<h3 class="sustainability_titles">Emissions</h3>
						<div class="col-xs-12 visible-xs"><a class="arrow-down-close"></a></div>
						<div class="fw din">
							<table>
								<tbody>
									<tr>
										<td width="35%">Target<br class="hidden-xs">(March 2021)</td>
										<td>Become carbon neutral</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td>Progress (Sep 2020)</td>
										<th>46% reduction in specific greenhouse gas emissions</th>
									</tr>
								</tfoot>
							</table>
							<!-- <p class="fw csr_note">GCPL India targets and progress only</p> -->
						</div>
					</div>
					<div class="fw">
						<div class="seperator hidden-xs">&nbsp;</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-xs-12 pd packaging_tables">
				<div class="fw visible-xs">
					<div class="seperator">&nbsp;</div>
				</div>
				<div class="pr fw impact_box">
					<div class="col-md-9 col-md-offset-2 pd">
						<h3 class="sustainability_titles">Packaging</h3>
						<div class="col-xs-12 visible-xs"><a class="arrow-down-close"></a></div>
						<div class="fw din">
							<table>
								<tbody>
									<tr>
										<td width="35%">Target (FY 25)</td>
										<td>Reduce packaging consumption per unit of production by 20% from the base year of fiscal<br class="hidden-xs"> year 2017-18</td>
									</tr>
								</tbody>
								<!-- <tfoot>
									<tr>
										<td>Progress (FY 19)</td>
										<th>14% ( + )</th>
									</tr>
								</tfoot> -->
							</table>
							<table>
								<tbody>
									<tr>
										<td width="35%">Target (FY 25)</td>
										<td>Have 100% of the<br class="hidden-xs"> packaging material recyclable, reusable, recoverable, or compostable</td>
									</tr>
								</tbody>
								<!-- <tfoot>
									<tr>
										<td>Progress (FY 19)</td>
										<th>To be added</th>
									</tr>
								</tfoot> -->
							</table>
							<table class="mrb">
								<tbody>
									<tr>
										<td width="35%">Target (FY 25)</td>
										<td>Use at least 10% post-consumer recycled (PCR) content in plastic packaging</td>
									</tr>
								</tbody>
								<!-- <tfoot>
									<tr>
										<td>Progress (FY 19)</td>
										<th>To be added</th>
									</tr>
								</tfoot> -->
							</table>
							<!-- <p class="fw csr_note">GCPL India targets and progress only</p> -->
						</div>
					</div>

				</div>
			</div>

			<!-- <div class="col-md-12 col-md-offset-0 col-xs-10 col-xs-offset-1 pd">
				<p class="txc">
					<br>
					<br>
					<a href="https://www.godrejindustries.com/public/pdfs/GCPL-Envi-Assurance-Statement.pdf" class="learnmore" target="_blank">Read the third-party assurance statement about our environmental performance</a>
			</div> -->
			
		</div>


	</div>
</section>

@endsection

@push('scripts')
    {{-- <script src="{{ asset('js/about.js') }}"></script> --}}

@endpush
    