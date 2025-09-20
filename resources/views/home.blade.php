@extends('layouts.home')

@section('title', 'Home - Consultez')
    @push('styles')
        <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    @endpush
@section('content')

<div id="Mobile_Menu">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 pd">

                <ul>
                    <li class="has_dropdown">
                        <a href="https://www.godrejindustries.com/know-us">Know Us</a><span></span>
                        <ul>
                            <li><a href="https://www.godrejindustries.com/know-us/our-story" title="Our Story">Our Story</a>
                            </li>
                            <li><a href="https://www.godrejindustries.com/know-us/about-godrej-industries-group"
                                    title="About Godrej Industries Group">About Godrej Industries Group</a></li>

                            <li><a href="https://www.godrejindustries.com/know-us/godrej-foundation"
                                    title="Godrej Foundation">Godrej Foundation</a></li>
                            <li><a href="https://www.godrejindustries.com/know-us/leadership"
                                    title="Leadership">Leadership</a></li>
                            <div class="menu_devider">&nbsp;</div>
                    </li>
                    <li class="has_dropdown">
                        <a href="https://www.godrejindustries.com/businesses">Businesses</a><span></span>
                        <ul>
                            <li><a href="https://www.godrejagrovet.com/" target="_blank" title="Godrej Agrovet">Godrej
                                    Agrovet</a></li>
                            <li><a href="https://www.godrejcp.com" target="_blank" title="Godrej Consumer Products">Godrej
                                    Consumer Products</a></li>
                            <li><a href="https://www.godrejproperties.com/" target="_blank" title="Godrej Properties">Godrej
                                    Properties</a></li>
                            <li><a href="https://www.godrejchemicals.com/" target="_blank" title="Godrej Chemicals">Godrej
                                    Chemicals</a></li>
                            <li><a href="https://www.godrejfunds.com/" target="_blank" title="Godrej Fund Management">Godrej
                                    Fund Management</a></li>
                            <li><a href="https://www.godrejcapital.com/" target="_blank" title="Godrej Capital">Godrej
                                    Capital</a></li>
                        </ul>
                        <div class="menu_devider">&nbsp;</div>
                    </li>
                    <li class="has_dropdown">
                        <a href="https://www.godrejcareers.com/?company=godrej_industries"
                            target="_blank">Careers</a><span></span>
                        <ul>
                            <li><a href="https://www.godrejcareers.com/people-philosophy/" target="_blank"
                                    title="People Philosophy">People Philosophy</a></li>
                            <li><a href="https://www.godrejcareers.com/learning/" target="_blank"
                                    title="Learning">Learning</a></li>
                            <li><a href="https://www.godrejcareers.com/benefits" title="Benefits"
                                    target="_blank">Benefits</a></li>
                            <li><a href="https://www.godrejcareers.com/on-campus/" target="_blank" title="On Campus">On
                                    Campus</a></li>

                            <li><a href="https://www.godrejcareers.com/work-with-us/" target="_blank"
                                    title="Work with Us">Work with Us</a></li>
                        </ul>
                        <div class="menu_devider">&nbsp;</div>
                    </li>


                    <li class="has_dropdown">
                        <a href="https://www.godrejindustries.com/sustainability">Good & Green</a><span></span>
                        <ul>

                            <li><a href="https://www.godrejdeilab.com" target="_blank" title="DEI Lab">DEI Lab</a></li>
                            <li><a href="https://www.godrejindustries.com/sustainability/10-years-of-sustainability"
                                    title="10 years of sustainability">10 years of sustainability</a></li>
                            <li><a href="https://www.godrejindustries.com/sustainability/csr" title="Conclaves">CSR</a>
                            </li>
                            <li><a href="https://www.godrejindustries.com/sustainability/green-supply-chain"
                                    title="Green Supply Chain">Green Supply Chain</a></li>
                            <li><a href="https://www.godrejindustries.com/sustainability/volunteering"
                                    title="Volunteering">Volunteering</a></li>

                        </ul>
                        <div class="menu_devider">&nbsp;</div>
                    </li>
                    <li class="has_dropdown">
                        <a href="https://www.godrejindustries.com/investors">Investors</a><span></span>
                        <ul>
                            <li><a href="https://www.godrejindustries.com/investors/annual-reports"
                                    title="Annual Reports">Annual Reports</a></li>
                            <li><a href="https://www.godrejindustries.com/investors/financial-updates"
                                    title="Financial Updates">Financial Updates</a></li>
                            <li><a href="https://www.godrejindustries.com/investors/shareholder-information"
                                    title="Shareholder Information">Shareholder Information</a></li>
                            <li><a href="https://www.godrejindustries.com/investors/investors-information"
                                    title="Investor Information">Investor Information</a></li>
                            <li><a href="https://www.godrejindustries.com/investors/subsidiaries-accounts"
                                    title="Subsidiaries Accounts">Subsidiaries Accounts</a></li>
                            <li><a href="https://www.godrejindustries.com/investors/listing-compliance"
                                    title="Listing Compliance">Listing Compliance</a></li>
                            <li><a href="https://www.godrejindustries.com/investors/board-committees"
                                    title="Board Committees">Board Committees</a></li>
                        </ul>
                    </li>


                </ul>
            </div>
        </div>
    </div>
 
</div>


    <section id="landing" class="title_desc_left fwp homenew hidden-xs">
        <div class="main_slice_banner">
            <div class="f_banner">
                <div>
                    <img src="https://www.godrejindustries.com/public/images/home/New_Banner_Item_01.jpg" class="fw">
                </div>
            </div>
            <div class="s_banner">
                <div class="bnr_tags">
                    <img src="https://www.godrejindustries.com/public/images/home/New_Banner_Item_02.jpg" class="fw">
                    <p>Chemicals</p>
                </div>
                <div>
                    <img src="https://www.godrejindustries.com/public/images/home/New_Banner_Item_03.jpg" class="fw">
                </div>
            </div>
            <div class="t_banner">
                <div>
                    <img src="https://www.godrejindustries.com/public/images/home/New_Banner_Item_04.jpg" class="fw">
                    <p>Consumer <br>Products</p>
                </div>
            </div>
            <div class="frt_banner">
                <div>
                    <img src="https://www.godrejindustries.com/public/images/home/New_Banner_Item_05.jpg" class="fw">
                    <p>Properties</p>
                </div>
                <div>
                    <img src="https://www.godrejindustries.com/public/images/home/New_Banner_Item_06.jpg" class="fw">
                </div>
                <div class="tag_ttl">
                    <img src="https://www.godrejindustries.com/public/images/home/New_Banner_Item_07.jpg" class="fw">
                    <p>Capital</p>
                </div>
            </div>
            <div class="fift_banner">
                <div>
                    <img src="https://www.godrejindustries.com/public/images/home/New_Banner_Item_08.jpg" class="fw">
                    <p>Agrovet</p>
                </div>
            </div>
        </div>
    </section>
    <section id="landing" class="title_desc_left fwp homenew visible-xs">
        <div class="container-fluid">
            <div class="row">
                <div class="mo_banners">
                    <img src="https://www.godrejindustries.com/public/images/home/banner_mo.jpg" class="fw">
                 
                </div>
            </div>
        </div>
    </section>
  
    <section id="goodness_home" class="title_desc_left">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="fw desc txc">
                        <p class="wow fadeInUp animated fast"><img
                                src="https://www.godrejindustries.com/public/images/Godrej_Logo_new.png" width="200">
                        </p>
                        <h3 class="section_title wow fadeInUp animated fast">Delighting 1.1 billion consumers globally</h3>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="fw pr">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="seperator">&nbsp;</section>
    <section class="our_business title_desc_left">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="txc section_title_01">Our Businesses</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-6">
                    <div class="businesses_ours txc pdrt">
                        <img src="https://www.godrejindustries.com/public/images/home/godrej_agrovet.jpg" class="fw"
                            alt="Godrej Agrovet">
                        <p>Godrej <br>Agrovet</p>
                        <a href="https://www.godrejagrovet.com/" target="_blank"
                            class="learnmore wow fadeInUp animated fast">Explore</a>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6">
                    <div class="businesses_ours txc pdlft">
                        <img src="https://www.godrejindustries.com/public/images/home/gcpl.jpg" class="fw"
                            alt="Godrej Consumer Products">
                        <p>Godrej <br>Consumer Products</p>
                        <a href="https://www.godrejcp.com/" target="_blank"
                            class="learnmore wow fadeInUp animated fast">Explore</a>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6">
                    <div class="businesses_ours txc pdrt">
                        <img src="https://www.godrejindustries.com/public/images/home/godrej_properties.jpg"
                            class="fw" alt="Godrej Properties">
                        <p>Godrej <br>Properties</p>
                        <a href="https://www.godrejproperties.com/" target="_blank"
                            class="learnmore wow fadeInUp animated fast">Explore</a>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6">
                    <div class="businesses_ours txc pdlft">
                        <img src="https://www.godrejindustries.com/public/images/home/godrej_chemicals.jpg" class="fw"
                            alt="Godrej Chemicals">
                        <p>Godrej <br>Chemicals</p>
                        <a href="https://www.godrejchemicals.com/" target="_blank"
                            class="learnmore wow fadeInUp animated fast">Explore</a>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6">
                    <div class="businesses_ours txc pdrt">
                        <img src="https://www.godrejindustries.com/public/images/home/godrej_investment.jpg"
                            class="fw" alt="Godrej Investment Advisers">
                        <p>Godrej <br>Fund Management</p>
                        <a href="https://www.godrejfunds.com/" target="_blank"
                            class="learnmore wow fadeInUp animated fast">Explore</a>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6">
                    <div class="businesses_ours txc pdlft">
                        <img src="https://www.godrejindustries.com/public/images/home/godrej_capitals.jpg" class="fw"
                            alt="Godrej Capital">
                        <p>Godrej <br>Capital</p>
                        <a href="https://www.godrejcapital.com/" target="_blank"
                            class="learnmore wow fadeInUp animated fast">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="seperator">&nbsp;</section>

    <div class="fw owl-carousel owl-theme" id="our_business_slider">
        <section id="hygiene_banner_home" class="title_desc_left mo_txc">
            <div class="container">
                <div class="fw fwp">
                    <div class="row">
                        <div class="col-md-6 visible-xs">
                            <div class="fw pr desc">
                                <img src="https://www.godrejindustries.com/public/images/video_bg.png"
                                    class="fw hidden-xs">
                                <div class="fw">
                                    <div class="col-md-10 col-md-offset-2">
                                        <h2 class="wow animated fadeInUp fast"><a href="https://www.godrejdeilab.com/"
                                                target="_blank" class="blue">Diversity</a></h2>
                                        <h3 class="wow fadeInUp animated fast">Diversity is the philosophy of<br>who we are
                                            as a company</h3>
                                        <p class="blk60 wow fadeInUp animated fast">Diversity is not just nice to do. It
                                            makes great business sense. Being more diverse helps us innovate better and grow
                                            faster.</p>
                                        <a href="https://www.godrejdeilab.com/" target="_blank"
                                            class="learnmore wow fadeInUp animated fast">Explore</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xs-12">
                            <div class="fw pr wow fadeIn animated">
                                <div class="fw mob_videos">
                                    <img src="https://www.godrejindustries.com/public/images/home/Diversity_bg_banner.jpg"
                                        class="fw" alt="Diversity">
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 hidden-xs">
                            <div class="fw pr desc">
                                <img src="https://www.godrejindustries.com/public/images/video_bg.png"
                                    class="fw hidden-xs">
                                <div class="fwpx no_mob_fwpx fw">
                                    <div class="col-md-10 col-md-offset-2">
                                        <h2 class="wow animated fadeInUp fast"><a href="https://www.godrejdeilab.com/"
                                                target="_blank" class="blue">Diversity</a></h2>
                                        <h3 class="wow fadeInUp animated fast">Diversity is the philosophy of<br>who we are
                                            as a company</h3>
                                        <p class="blk60 wow fadeInUp animated fast">Diversity is not just nice to do. It
                                            makes great business sense. Being more diverse helps us innovate better and grow
                                            faster.</p>
                                        <a href="https://www.godrejdeilab.com/" target="_blank"
                                            class="learnmore wow fadeInUp animated fast">Explore</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="hygiene_banner_home" class="title_desc_left mo_txc">
            <div class="container">
                <div class="fw fwp">
                    <div class="row">
                        <div class="col-md-6 visible-xs">
                            <div class="fw pr desc">
                                <img src="https://www.godrejindustries.com/public/images/video_bg.png"
                                    class="fw hidden-xs">
                                <div class="fw">
                                    <div class="col-md-10 col-md-offset-2">
                                        <h2 class="wow animated fadeInUp fast"><a
                                                href="https://www.godrejindustries.com/sustainability"
                                                class="blue">Sustainability</a></h2>
                                        <h3 class="wow fadeInUp animated fast">Building a more inclusive and greener planet
                                        </h3>
                                        <p class="blk60 wow fadeInUp animated fast">For over 125 years, the Godrej
                                            Industries Group has actively championed social responsibility.</p>
                                        <a href="https://www.godrejindustries.com/sustainability"
                                            class="learnmore wow fadeInUp animated fast">Explore</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xs-12">
                            <div class="fw pr wow fadeIn animated">
                                <div class="fw mob_videos">
                                    <img src="https://www.godrejindustries.com/public/images/home/Sustainability_bg_Banner.jpg"
                                        class="fw" alt="Sustainability">
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 hidden-xs">
                            <div class="fw pr desc">
                                <img src="https://www.godrejindustries.com/public/images/video_bg.png"
                                    class="fw hidden-xs">
                                <div class="fwpx no_mob_fwpx fw">
                                    <div class="col-md-10 col-md-offset-2">
                                        <h2 class="wow animated fadeInUp fast"><a
                                                href="https://www.godrejindustries.com/sustainability"
                                                class="blue">Sustainability</a></h2>
                                        <h3 class="wow fadeInUp animated fast">Building a more inclusive and greener planet
                                        </h3>
                                        <p class="blk60 wow fadeInUp animated fast">For over 125 years, the Godrej
                                            Industries Group has actively championed social responsibility.</p>
                                        <a href="https://www.godrejindustries.com/sustainability"
                                            class="learnmore wow fadeInUp animated fast">Explore</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="hygiene_banner_home" class="title_desc_left mo_txc">
            <div class="container">
                <div class="fw fwp">
                    <div class="row">
                        <div class="col-md-6 visible-xs">
                            <div class="fw pr desc">
                                <img src="https://www.godrejindustries.com/public/images/video_bg.png"
                                    class="fw hidden-xs">
                                <div class="fw">
                                    <div class="col-md-10 col-md-offset-2">
                                        <h2 class="wow animated fadeInUp fast"><a
                                                href="https://www.godrejcareers.com/?company=godrej_industries"
                                                class="blue">Careers</a></h2>
                                        <h3 class="wow fadeInUp animated fast">Passionate people make for passionate
                                            Godrejites.</h3>
                                        <p class="blk60 wow fadeInUp animated fast">Find out how you can grow with us.</p>
                                        <a href="https://www.godrejcareers.com/?company=godrej_industries" target="_blank"
                                            class="learnmore wow fadeInUp animated fast">Explore</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xs-12">
                            <div class="fw pr wow fadeIn animated">
                                <div class="fw mob_videos">
                                    <img src="https://www.godrejindustries.com/public/images/home/Careers_bg_Banner.jpg"
                                        class="fw" alt="Careers">
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 hidden-xs">
                            <div class="fw pr desc">
                                <img src="https://www.godrejindustries.com/public/images/video_bg.png"
                                    class="fw hidden-xs">
                                <div class="fwpx no_mob_fwpx fw">
                                    <div class="col-md-10 col-md-offset-2">
                                        <h2 class="wow animated fadeInUp fast"><a
                                                href="https://www.godrejcareers.com/?company=godrej_industries"
                                                class="blue">Careers</a></h2>
                                        <h3 class="wow fadeInUp animated fast">Passionate people make for passionate
                                            Godrejites.</h3>
                                        <p class="blk60 wow fadeInUp animated fast">Find out how you can grow with us.</p>
                                        <a href="https://www.godrejcareers.com/?company=godrej_industries" target="_blank"
                                            class="learnmore wow fadeInUp animated fast">Explore</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <section class="seperator">&nbsp;</section>


    <section id="investors" class="title_desc_left">
        <div class="container">
            <div class="row pr">
                <div class="col-md-12">
                    <div class="fw desc txc wow fadeInUp animated">
                        <h2><a href="https://www.godrejindustries.com/investors" class="blue">Investors</a></h2>
                        <h3>Creating long-term value</h3>
                        <p class="blk60">We are committed to creating long-term,<br class="hidden-xs"><br
                                class="visible-xs"> sustainable value for all our stakeholders</p>
                        <a href="https://www.godrejindustries.com/investors" class="learnmore">Explore</a>
                    </div>
                </div>
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
                 
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
@push('scripts')
   
    <script type="text/javascript" src="https://www.godrejindustries.com/public/js/home.js"
        nonce="w1ZuG4VnMwLmpBEjpqo3t35vmewO2OHO"></script>

@endpush