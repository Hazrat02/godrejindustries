
 @extends('layouts.home')

@section('title', 'Know Us - Consultez')
@push('styles')
    {{-- <link href="{{ asset('assets/css/about.css') }}" rel="stylesheet"> --}}
	<link rel="stylesheet" type="text/css" href="https://www.godrejindustries.com/public/css/sustainability_common.css?v=1758382971">
	<link rel="stylesheet" type="text/css" href="https://www.godrejindustries.com/public/css/csr.css?v=1758382971">
@endpush
@section('content')
<section class="fwp">
	<div class="fw owl-carousel owl-theme" id="landing_other_slider">
		<div class="fwp">
			<div class="fwvh_new pr" id="banner_csr_01">&nbsp;</div>
			<!-- <div class="fw pxy txc landing_caption"><h2 class="animated fadeInUp">Corporate Social<br class="hidden-xs"> Responsibility</h2></div> -->
		</div>
		<div class="fwp">
			<div class="fwvh_new pr" id="banner_csr_02">&nbsp;</div>
		</div>
		<div class="fwp">
			<div class="fwvh_new pr" id="banner_csr_03">&nbsp;</div>
		</div>
	</div>
	<ul id='landing_other_dots' class='owl-dots pyb zindex3'></ul>
	<div class="single_multibanner_caption pxy txc zindex5">
		<h1 class="white animated fadeInUp zindex5">Corporate <br class="visible-xs">Social<br> Responsibility</h1>
	</div>
</section>

<!-- <section class="fw txc" id="our_strategy_csr">
	<div class="fw title_desc_left">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-md-8 col-md-offset-2">
					<div class="fw desc txc wow fadeInUp animated">
						<h3 class="inside_page_titles">Our strategy</h3>
						<p class="blk60">We are committed to helping address critical social, environmental and economic needs of marginalised and underprivileged sections of our communities. We do this by adopting a shared value approach to help solve problems, while strengthening our competitive advantage.</p>
					</div>
				</div>
			</div>
			<div class="row wow fadeInUp animated">
				<div class="fw txc">
					<a href="https://www.godrejindustries.com/public/pdfs/CSR-Policy.pdf" target="_blank" class="learnmore">Read</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="seperator">&nbsp;</section> -->

<div class="fw h100 h50m">&nbsp;</div>

<section class="fw">
	<div class="container title_desc_left">
		<div class="row wow animated fadeInUp">
			<div class="col-md-12 col-xs-12 pd txc">
				<h3 class="sustainability_titles">Impact</h3>
			</div>
		</div>
		<div class="fw h100 h50m">&nbsp;</div>


		<div class="row wow animated fadeInUp">
			<div class="col-md-6 col-xs-12 pd">
				<div class="pr fw impact_box">
					<div class="col-md-9 col-md-offset-2 pd">
						<h3 class="sustainability_titles">Employability</h3>
						<div class="col-xs-12 visible-xs"><a class="arrow-down-close"></a></div>
						<div class="fw din">
							<table class="fw">
								<tbody>
									<tr>
										<td width="35%">Target <br class="hidden-xs">(March 2021)</td>
										<td>Train 8,00,000 people<br class="hidden-xs">&nbsp; </td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td>Progress (Dec 2020)</td>
										<th>Trained 5,54,185 <br class="hidden-xs"> people</th>
									</tr>
								</tfoot>
							</table>
							<!-- <p class="fw csr_note">*GCPL Goals</p> -->
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
						<h3 class="sustainability_titles">Public Health</h3>
						<div class="col-xs-12 visible-xs"><a class="arrow-down-close"></a></div>
						<div class="fw din">
							<table class="fw">
								<tbody>
									<tr>
										<td width="35%">Target <br class="hidden-xs">(March 2021)</td>
										<td>Cover 100% people in 810<br class="hidden-xs"> villages across 9 districts11</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td>Progress (Dec 2020)</td>
										<!-- <th>Reached XXXX people<br class="hidden-xs"> in 9 districts (-)</th> -->
										<th>Over 80% coverage achieved in 810 villages across 9 districts</th>
									</tr>
								</tfoot>
							</table>
							<!-- <p class="fw csr_note">*GCPL Goals</p> -->
						</div>
					</div>
					<div class="fw">
						<div class="seperator">&nbsp;</div>
					</div>
				</div>
			</div>
		</div>



		<div class="row wow animated fadeInUp">
			<div class="col-md-6 col-xs-12 pd">
				<div class="pr fw impact_box">
					<div class="col-md-9 col-md-offset-2 pd">
						<h3 class="sustainability_titles">Waste <br class="hidden-xs">management </h3>
						<div class="col-xs-12 visible-xs"><a class="arrow-down-close"></a></div>
						<div class="fw din">
							<table class="fw">
								<tbody>
									<tr>
										<td width="35%">Target <br class="hidden-xs">(March 2021)</td>
										<td>Process 18,000 MT of waste</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td>Progress (Dec 2021)</td>
										<th>Processed 5,800 MT of waste</th>
									</tr>
								</tfoot>
							</table>
							<!-- <p class="fw csr_note">#Godrej Industries Goal</p> -->
						</div>
					</div>
					<div class="fw visible-xs">
						<div class="seperator">&nbsp;</div>
					</div>

					<div class="seperator_right hidden-xs">&nbsp;</div>
				</div>
			</div>
			<div class="col-md-6 col-xs-12 pd">
				<div class="pr fw impact_box">
					<div class="col-md-9 col-md-offset-2 pd">
						<h3 class="sustainability_titles">Watershed <br class="hidden-xs">management</h3>
						<div class="col-xs-12 visible-xs"><a class="arrow-down-close"></a></div>
						<div class="fw din">
							<table class="fw">
								<tbody>
									<tr>
										<td width="35%">Target <br class="hidden-xs">(March 2022)</td>
										<td>Treat 9,600 ha of land</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td>Progress (Dec 2020)</td>
										<th>Developed 6,700 ha <br class="hidden-xs">of land</th>
									</tr>
								</tfoot>
							</table>
							<!-- <p class="fw csr_note">#Godrej Industries Goal</p> -->
						</div>
					</div>
				</div>
			</div>




		</div>



	</div>
</section>

<section class="seperator">&nbsp;</section>


<section class="fw">
	<div class="container title_desc_left">

		<div class="fw h30 h30m">&nbsp;</div>
		<div class="row wow animated fadeInUp">
			<div class="col-md-12 col-xs-12 pd txc">
				<h3 class="sustainability_titles" id="CSR_Initiatives_Title">Initiatives</h3>
			</div>
		</div>
		<div class="fw h100 h30m hidden-xs">&nbsp;</div>

		<div class="row wow animated fadeInUp">
			<div class="col-md-12 col-xs-12 pd">
				<div class="initiatives_box_container fw" id="Livelihood">
					
					<div class="initiatives_box pr fw">
						<div class="seperator fw hidden-xs">&nbsp;</div>
						<div class="col-md-7 col-xs-12 pd">
							<div class="fw txc visible-xs">
								<h3>Employability</h3>
							</div>
							<img src="https://www.godrejindustries.com/public/images/sustainability/csr/Livelihood.jpg" alt="Livelihood" width="100%" class="fw">
						</div>
						<div class="fw fwpx txcm pxy_mo">
							<div class="col-md-5 col-md-offset-7">
								<div class="col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0">
									<h3 class="hidden-xs">Employability</h3>
									<p class="blk60">Improving earning potential by building core domain skills, focusing on entrepreneurship and life skills education, providing post-training support, and enabling social protection.</p>
									<a class="learnmore show_initiatives pr" rel="Livelihood_Data" data-parent="Livelihood">More<span class="arrow-down-close"></span></a>
								</div>
							</div>
						</div>
						<!-- <div class="row wow fadeInUp animated visible-xs">
							<div class="fw txc">
								<a class="learnmore">Read</a>
							</div>
							<div class="fw h30m">&nbsp;</div>
						</div>
						<div class="col-xs-12 visible-xs pd">
							<img src="https://www.godrejindustries.com/public/images/sustainability/csr/Livelihood.jpg" alt="Livelihood" width="100%" class="fw">
						</div> -->
						<div class="seperator fw hidden-xs">&nbsp;</div>
						<div class="seperator_right left hidden-xs">&nbsp;</div>
						<div class="seperator_right hidden-xs">&nbsp;</div>
					</div>


					<div class="fw initiatives_boxdesc" id="Livelihood_Data">

						<div class="col-md-10 col-md-offset-1">
							<div class="col-md-4">
								<div class="fw initiatives_desc">
									<h6>Salon-i<br class="hidden-xs"><br class="hidden-xs"></h6>
									<p class="greya7">Training young women in beauty and hair care in India.<br class="hidden-xs">&nbsp;</p>
									<div class="fw">
										<!-- <a href="https://www.godrejindustries.com/public/pdfs/csr/salon_i_and_beuatypreneurs.pdf" target="_blank" class="learnmore">Read</a> -->
										<a href="https://www.godrejcp.com/annual-reports/2019-20/management-discussion-and-analysis/our-strategic-pillars/pillar-07/#Salon-i-and-Beautypreneur" target="_blank" class="learnmore">Read</a>
										&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.youtube.com/watch?v=BvW23noGs4M" target="_blank" class="learnmore">Watch</a>

									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="fw initiatives_desc">
									<h6>Beautypreneurs<br class="hidden-xs"><br class="hidden-xs"></h6>
									<p class="greya7">Strengthening beauty and wellness enterprises led by women in India.</p>
									<div class="fw">
										<!-- <a href="https://www.godrejindustries.com/public/pdfs/csr/salon_i_and_beuatypreneurs.pdf" target="_blank" class="learnmore">Read</a> -->
										<a href="https://www.godrejcp.com/annual-reports/2019-20/management-discussion-and-analysis/our-strategic-pillars/pillar-07/#Salon-i-and-Beautypreneur" target="_blank" class="learnmore">Read</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="fw initiatives_desc">
									<h6>Integrated Rural <br class="hidden-xs">Livelihoods Programme</h6>
									<p class="greya7">Improving farm and off-farm practices of small and marginal farmers to increase their productivity and income.</p>
									<div class="fw">
										<!-- <a href="https://www.godrejindustries.com/public/pdfs/csr/darling_hair_and_beauty_skills_training.pdf" target="_blank" class="learnmore">Read</a> -->
										<!-- <a href="https://www.godrejcp.com/annual-reports/2019-20/management-discussion-and-analysis/our-strategic-pillars/pillar-07/#Darling-hair-and-beauty-skills-training-in-Kenya" target="_blank" class="learnmore">Read</a> -->
									</div>
								</div>
							</div>
							<div class="h50m hidden-xs">&nbsp;</div>
							<div class="h50m hidden-xs">&nbsp;</div>
							<div class="col-md-4">
								<div class="fw initiatives_desc">
									<h6>Construction and Allied Trades</h6>
									<p class="greya7">Skill training and post-training support for workers in construction and allied services (pantry, electrical and plumbing), and supporting nano construction contractors.</p>
									<div class="fw">
										<!-- <a href="https://www.godrejindustries.com/public/pdfs/csr/salon_i_and_beuatypreneurs.pdf" target="_blank" class="learnmore">Read</a> -->
										<!-- <a target="_blank" class="learnmore">Read</a> -->

									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="fw initiatives_desc">
									<h6>Worker Welfare<br class="hidden-xs"><br class="hidden-xs"></h6>
									<p class="greya7">Unlocking and enabling access to government welfare schemes for construction workers.</p>
									<div class="fw">
										<!-- <a href="https://www.godrejindustries.com/public/pdfs/csr/salon_i_and_beuatypreneurs.pdf" target="_blank" class="learnmore">Read</a> -->
										<!-- <a target="_blank" class="learnmore">Read</a> -->
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="fw initiatives_desc">
									<h6>Wezesha Kenya Youth Empowerment</h6>
									<p class="greya7">Addressing unemployment among underprivileged women in Kenya through hairdressing training.</p>
									<div class="fw">
										<!-- <a href="https://www.godrejindustries.com/public/pdfs/csr/darling_hair_and_beauty_skills_training.pdf" target="_blank" class="learnmore">Read</a> -->
										<!-- <a target="_blank" class="learnmore">Read</a> -->
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>


		<div class="row wow animated fadeInUp">
			<div class="col-md-12 col-xs-12 pd">

				<div class="initiatives_box_container fw" id="Public_Health">
					<div class="initiatives_box pr fw">
						<div class="seperator fw">&nbsp;</div>
						<div class="col-md-7 col-xs-12 pd">
							<h3 class="visible-xs txcm">Public health</h3>
							<img src="https://www.godrejindustries.com/public/images/sustainability/csr/Public-Health.jpg" alt="Public Health" width="100%" class="fw">
						</div>
						<div class="txcm fw fwpx pxy_mo">
							<div class="col-md-5 col-md-offset-7">
								<div class="col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0">
									<h3 class="hidden-xs">Public health</h3>
									<!-- <div class="fw h30m visible-xs">&nbsp;</div> -->
									<p class="blk60 txcm">Partnering the Indian government’s aim to make India malaria-free by 2030 by creating awareness and driving behaviour change in high-risk rural areas</p>
									<a class="learnmore show_initiatives pr" rel="Public_Health_Data" data-parent="Public_Health">More<span class="arrow-down-close"></span></a>
								</div>
							</div>
						</div>
						<!-- <div class="row wow fadeInUp animated visible-xs">
							<div class="fw txc">
								<a class="learnmore">Read</a>
							</div>
						</div> -->
						<div class="seperator fw hidden-xs">&nbsp;</div>
						<div class="seperator_right left hidden-xs">&nbsp;</div>
						<div class="seperator_right hidden-xs">&nbsp;</div>
					</div>

					<div class="fw initiatives_boxdesc" id="Public_Health_Data">

						<div class="col-md-10 col-md-offset-1">
							<div class="col-md-12">
								<div class="fw initiatives_desc">
									<h6>Project EMBED</h6>
									<p class="greya7">Partnering the Indian government’s aim to make India malaria-free by 2030 by creating awareness and driving behaviour change in high-risk rural areas</p>
									<div class="fw">
										<!-- <a href="https://www.godrejindustries.com/public/pdfs/csr/public_health_project_EMBED.pdf" target="_blank" class="learnmore">Read</a> -->
										<a href="https://www.godrejcp.com/annual-reports/2019-20/management-discussion-and-analysis/our-strategic-pillars/pillar-07/#Public-Health" target="_blank" class="learnmore">Read</a>
										&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.youtube.com/watch?v=94HqTeFgWjM" target="_blank" class="learnmore">Watch</a>
									</div>
								</div>
							</div>
						</div>

					</div>

				</div>

			</div>
		</div>


		<div class="row wow animated fadeInUp">
			<div class="col-md-12 col-xs-12 pd">
				<div class="initiatives_box_container fw" id="Waste_Management">
					<div class="initiatives_box pr fw">
						<div class="seperator fw">&nbsp;</div>
						<div class="col-md-7 col-xs-12 pd">
							<h3 class="visible-xs txcm">Waste management</h3>
							<img src="https://www.godrejindustries.com/public/images/sustainability/csr/Waste-Management.jpg" alt="Waste Management" width="100%" class="fw">
						</div>
						<div class="txcm fw fwpx pxy_mo">
							<div class="col-md-5 col-md-offset-7">
								<div class="col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0">
									<h3 class="hidden-xs">Waste management</h3>
									<!-- <div class="fw h30m visible-xs">&nbsp;</div> -->
									<p class="blk60 txcm">Partnering with local municipalities, social entrepreneurs and residents for sustainable solid waste management.</p>
									<!-- <a href="https://www.godrejindustries.com/public/pdfs/csr/waste_management.pdf" target="_blank" class="learnmore pr">More<span class="arrow-down-close"></span></a> -->
									<!-- <a href="https://www.godrejcp.com/annual-reports/2019-20/management-discussion-and-analysis/our-strategic-pillars/pillar-07/#Waste-Management" target="_blank" class="learnmore pr">More<span class="arrow-down-close"></span></a> -->
									<a class="learnmore show_initiatives pr" rel="Waste_Management_Data" data-parent="Public_Health">More<span class="arrow-down-close"></span></a>
								</div>
							</div>
						</div>
						<!-- <div class="row wow fadeInUp animated visible-xs">
							<div class="fw txc">
								<a class="learnmore">Read</a>
							</div>
						</div> -->
						<div class="seperator fw hidden-xs">&nbsp;</div>
						<div class="seperator_right left hidden-xs">&nbsp;</div>
						<div class="seperator_right hidden-xs">&nbsp;</div>
					</div>


					<div class="fw initiatives_boxdesc" id="Waste_Management_Data">

						<div class="col-md-10 col-md-offset-1">
							<div class="col-md-4">
								<div class="fw initiatives_desc">
									<h6>3P Partnership in India<br class="hidden-xs"><br class="hidden-xs"></h6>
									<p class="greya7">Partnered with five municipalities and five social enterprises to run solid waste management projects that impact the lives of over 3.4 million residents in India.</p>
									<div class="fw">
										<!-- <a href="https://www.godrejindustries.com/public/pdfs/csr/salon_i_and_beuatypreneurs.pdf" target="_blank" class="learnmore">Read</a> -->
										<!-- <a target="_blank" class="learnmore">Read</a> -->

									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="fw initiatives_desc">
									<h6>Partnering with Salons in Kenya</h6>
									<p class="greya7">Partnering with over 330 salons for waste segregation, collection at source and proper disposal of non-biodegradable waste.</p>
									<div class="fw">
										<!-- <a href="https://www.godrejindustries.com/public/pdfs/csr/salon_i_and_beuatypreneurs.pdf" target="_blank" class="learnmore">Read</a> -->
										<!-- <a target="_blank" class="learnmore">Read</a> -->
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="fw initiatives_desc">
									<h6>Recycling<br class="hidden-xs"><br class="hidden-xs"></h6>
									<p class="greya7">In India, experimenting to convert plastic waste into fuel in India, and in Kenya, recycling waste hair into assorted products such as baskets, table mats and mattresses among other products. </p>
									<div class="fw">
										<!-- <a href="https://www.godrejindustries.com/public/pdfs/csr/darling_hair_and_beauty_skills_training.pdf" target="_blank" class="learnmore">Read</a> -->
										<!-- <a target="_blank" class="learnmore">Read</a> -->
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>


		<div class="row wow animated fadeInUp">
			<div class="col-md-12 col-xs-12 pd">
				<div class="initiatives_box_container fw" id="Watershed_Management">
					<div class="initiatives_box pr fw">
						<div class="seperator fw">&nbsp;</div>
						<div class="col-md-7 col-xs-12 pd">
							<h3 class="visible-xs txcm">Watershed management</h3>
							<img src="https://www.godrejindustries.com/public/images/sustainability/csr/Watershed-Management.jpg" alt="Watershed Management " width="100%" class="fw">
						</div>
						<div class="txcm fw fwpx pxy_mo">
							<div class="col-md-5 col-md-offset-7">
								<div class="col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0">
									<h3 class="hidden-xs">Watershed management </h3>
									<div class="fw h30m visible-xs">&nbsp;</div>
									<p class="blk60 txcm">Partnering with NABARD to help restore the ecological balance in drought-prone regions and mitigate the risk of climate change for small and marginal farmers</p>
									<!-- <a href="https://www.godrejindustries.com/public/pdfs/csr/watershed_management.pdf" target="_blank" class="learnmore show_initiatives pr">More<span class="arrow-down-close"></span></a> -->
									<!-- <a href="https://www.godrejcp.com/annual-reports/2019-20/management-discussion-and-analysis/our-strategic-pillars/pillar-07/#Watershed-Management" target="_blank" class="learnmore show_initiatives pr">More<span class="arrow-down-close"></span></a> -->
									<a class="learnmore show_initiatives pr" rel="Watershed_Management_Data" data-parent="Public_Health">More<span class="arrow-down-close"></span></a>
								</div>
							</div>
						</div>
						<!-- <div class="row wow fadeInUp animated visible-xs">
							<div class="fw txc">
								<a class="learnmore">Read</a>
							</div>
						</div> -->
						<div class="hidden-xs seperator fw">&nbsp;</div>
						<div class="hidden-xs seperator_right left">&nbsp;</div>
						<div class="hidden-xs seperator_right">&nbsp;</div>
					</div>
					<div class="fw initiatives_boxdesc" id="Watershed_Management_Data">

						<div class="col-md-10 col-md-offset-1">
							<div class="col-md-12">
								<div class="fw initiatives_desc">
									<h6>Watersheds with NABARD<br class="hidden-xs"></h6>
									<p class="greya7">In India, we run four watershed projects that captured over 14 million KL of water in 2019. This offsets over four times our water usage across Godrej Industries.</p>
									<div class="fw">
										<!-- <a href="https://www.godrejindustries.com/public/pdfs/csr/salon_i_and_beuatypreneurs.pdf" target="_blank" class="learnmore">Read</a> -->
										<!-- <a target="_blank" class="learnmore">Read</a> -->

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

@endpush
    